<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Booking;
use App\Models\Keycard;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Redirect;
use App\Mail\NewBooking;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        return view('webapp.bookings.dashboard');
    }

    public function booking()
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 4) {
            $current_date = date('Y-m-d');
            $units = Unit::all();
            return view('webapp.bookings.index', ['units' => $units, 'date' => $current_date]);
        }

        return redirect('/dashboard');
    }

    public function bookUnit(Request $request, $unit_id)
    {
        $user_type = auth()->user()->user_type;
        $user_id = auth()->user()->id;

        if ($user_type == 4) {
            if (!$request->date) {
                return redirect('/booking');
            }

            $status_keycard = Keycard::where('user_id', $user_id)->whereIn('keycard_status', [2, 1])->get();

            $times = [];
            $date = Carbon::parse($request->date)->format('Y-m-d');

            for ($hour = 0; $hour < 24; $hour++) {
                $time24 = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00:00';
                $time12 = date('h:i A', strtotime($time24));
                $status = 1;

                $times[] = [
                    '24hr' => $time24,
                    '12hr' => $time12,
                    'status' => $status,
                ];
            }

            $unit = Unit::findOrFail($unit_id);
            return view('webapp.bookings.booking', ['unit' => $unit, 'hours' => $times, 'date' => $date, 'status_keycard' => $status_keycard]);
        }

        return redirect('/dashboard');
    }

    public function store(Request $request, $unit_id)
    {
        $user_type = auth()->user()->user_type;
        $user = User::where('email', auth()->user()->email)->first();

        if ($user_type == 4) {
            $checkin = new DateTime($request->checkin_date . "T" . $request->checkin_time);
            $checkout = new DateTime($request->checkout_date . "T" . $request->checkout_time);
            $checkout_dupe = new DateTime($request->checkout_date . "T" . $request->checkout_time);
            $interval = $checkin->diff($checkout);
            $checkout_plus_1_hour = $checkout_dupe->add(new DateInterval('PT1H'));
            $total_hours = ($interval->days * 24) + $interval->h;
            $unit = Unit::findOrFail($unit_id);
            $cost = 0;

            if ($total_hours > 48) {
                $cost = $this->calculateTotal($unit->plus_48_hrs, $total_hours, $unit_id);
            } elseif ($total_hours < 48 && $total_hours >= 24) {
                $cost = $this->calculateTotal($unit->per_hour_24_hrs, $total_hours, $unit_id);
            } elseif ($total_hours < 24 && $total_hours >= 12) {
                $cost = $this->calculateTotal($unit->per_hour_12_hrs, $total_hours, $unit_id);
            } else {
                $cost = $total_hours * $unit->per_hour_4_hrs;
            }

            $booking_fee = $cost * 0.25;
            $cost = $cost + $booking_fee;

            $conflict = Booking::where(function ($query) use ($checkin, $checkout, $unit_id) {
                $query->where('checkin', '<', $checkout)->where('checkout', '>', $checkin)->where('unit_id', '=', $unit_id)->where('status', '=', 1);
            })->get();

            if ($total_hours < $unit->minimum_hours) {
                return redirect::back()->with('message', 'You can only book a minimum of ' . $unit->minimum_hours . ' hours.');
            }

            if (count($conflict) != 0) {
                return Redirect::back()->with('message', 'Sorry, selected booking is not available.');
            }

            if ($request->id_image) {
                $fileName = time() . $request->file("id_image")->getClientOriginalName();
                $path = $request->file("id_image")->storeAs("image", $fileName, "public");
                $requestData['id_image'] = '/storage/' . $path;
            }

            if ($request->proof_of_payment) {
                $fileName = time() . $request->file("proof_of_payment")->getClientOriginalName();
                $path = $request->file("proof_of_payment")->storeAs("proof_image", $fileName, "public");
                $requestData['proof_of_payment'] = '/storage/' . $path;
            }

            $user_id = auth()->user()->id;
            $unit = Unit::findOrFail($unit_id);

            $validated = $request->validate([
                "guests" => ['required'],
                "checkin_date" => ['required'],
                "checkout_date" => ['required'],
                "checkin_time" => ['required'],
                "checkout_time" => ['required'],
                "id_image" => ['required'],
                "proof_of_payment" => ['required'],
                "total" => ['required'],
            ]);

            $auto_gen = [
                'user_id' => $user_id,
                'unit_id' => $unit->id,
                // 'total' => $cost,
                'id_image' => $requestData['id_image'],
                'proof_of_payment' => $requestData['proof_of_payment'],
                'agent_id' => $user_id,
                'checkin' => $checkin,
                'checkout' => $checkout,
                'checkout_plus_one_hour' => $checkout_plus_1_hour,
            ];

            $booking_id = Booking::create(array_merge($validated, $auto_gen))->id;
            $mail_details = Booking::with(['unit', 'user'])->findOrFail($booking_id);
            Mail::to('movietelletechnology@gmail.com')->send(new NewBooking($mail_details));
            return redirect('/booking')->with('message', 'reservation booked successfully.');
        }

        return redirect('/dashboard');
    }

    public function calculateTotal($multiplier, $total_hours, $unit_id)
    {
        $unit = Unit::findOrFail($unit_id);
        $cost = 0;
        if ($multiplier && $multiplier < 1) {
            $deduction = ($total_hours * $unit->per_hour_4_hrs) * $multiplier;
            $cost = ($total_hours * $unit->per_hour_4_hrs) - $deduction;
        } else {
            $cost = $total_hours * $multiplier;
        }

        return $cost;
    }

    public function records()
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 4) {
            $user_id = auth()->user()->id;
            $bookings = Booking::with('unit')->where('user_id', $user_id)->get();

            return view('webapp.bookings.records', ['bookings' => $bookings]);
        }

        return redirect('/dashboard');
    }

    public function keycardAll(Request $request)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2) {
            if ($request->query()) {
                $keycards = Keycard::select('*')->when($request->text_search && $request->string, function ($query) use ($request) {
                    $query->where($request->text_search, 'like', '%' . $request->string . '%');
                })->when($request->keycard_status || $request->keycard_status == 0, function ($query) use ($request) {
                    $query->where('keycard_status', $request->keycard_status);
                })->when($request->keycard_type, function ($query) use ($request) {
                    $query->where('keycard_type', $request->keycard_type);
                })->get();

                return view('webapp.keycard.keycard_all', ['keycards' => $keycards]);
            }

            $keycards = Keycard::All();
            return view('webapp.keycard.keycard_all', ['keycards' => $keycards]);
        }

        return redirect('/dashboard');
    }

    public function keycardUser()
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 4) {
            $user = auth()->user();
            return view('webapp.keycard.keycard_user', ['data' => $user]);
        }

        return redirect('/dashboard');
    }

    public function keycardPurchase(Request $request)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 4) {
            $requestData = $request->all();

            if ($request->id_image) {
                $fileName = time() . $request->file("id_image")->getClientOriginalName();
                $path = $request->file("id_image")->storeAs("keycard_images", $fileName, "public");
                $requestData['id_image'] = '/storage/' . $path;
            }

            if ($request->proof_of_payment) {
                $fileName = time() . $request->file("proof_of_payment")->getClientOriginalName();
                $path = $request->file("proof_of_payment")->storeAs("keycard_images", $fileName, "public");
                $requestData['proof_of_payment'] = '/storage/' . $path;
            }

            $user_id = auth()->user()->id;

            $validated = $request->validate([
                "id_image" => ['required'],
                "full_address" => ['required'],
                "proof_of_payment" => ['required'],
                "keycard_tier" => ['required'],
            ]);

            Purchase::create(array_merge($validated, ['user_id' => $user_id, 'id_image' => $requestData['id_image'], 'proof_of_payment' => $requestData['proof_of_payment']]))->id;
            return redirect('/booking')->with('message', 'Keycard purchase submitted successfully.');
        }

        return redirect('/dashboard');
    }

    public function keycardCreate()
    {
        $user_type = auth()->user()->user_type;
        $all_guests = User::where('user_type', 4)->get();

        if ($user_type == 1 || $user_type == 2) {
            return view('webapp.keycard.keycard_create', ['guests' => $all_guests]);
        }

        return redirect('/dashboard');
    }

    public function keycardStore(Request $request)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2) {
            $validated = $request->validate([
                "keycard_number" => ['required'],
                "keycard_status" => ['required'],
                "user_id" => ['required'],
                "keycard_type" => ['required'],
            ]);

            Keycard::create($validated)->id;
            return redirect('/keycard')->with('message', 'Keycard stored successfully.');
        }

        return redirect('/dashboard');
    }

    public function keycardEdit($id)
    {
        $user_type = auth()->user()->user_type;
        $all_guests = User::where('user_type', 4)->get();

        if ($user_type == 1 || $user_type == 2) {
            $keycard = Keycard::findOrfail($id);
            return view('webapp.keycard.keycard_edit', ['keycard' => $keycard, 'guests' => $all_guests]);
        }

        return redirect('/dashboard');
    }

    public function keycardUpdate(Request $request, $id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2) {
            $validated = $request->validate([
                "keycard_number" => ['required'],
                "keycard_status" => ['required'],
                "user_id" => ['required'],
                "keycard_type" => ['required'],
            ]);

            Keycard::where('id', $id)->update($validated);
            return Redirect::back()->with('message', 'Keycard updated successfully.');
        }

        return redirect('/dashboard');
    }

    public function schedules(Request $request)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2 || $user_type == 3) {
            if ($request->query()) {
                $schedules = Booking::with(['unit']) // Add your relationships here
                    ->select('*')
                    ->when($request->text_search && $request->string, function ($query) use ($request) {
                        $query->where($request->text_search, 'like', '%' . $request->string . '%');
                    })
                    ->when($request->status || $request->status == 0, function ($query) use ($request) {
                        $query->where('status', $request->status);
                    })
                    ->when($request->checkin_date, function ($query) use ($request) {
                        $query->where('checkin_date', $request->checkin_date);
                    })
                    ->get();
                return view('webapp.schedule.index', ['schedules' => $schedules]);
            }


            $schedules = Booking::with(['user', 'unit'])->get();
            return view('webapp.schedule.index', ['schedules' => $schedules]);
        }

        return redirect('/dashboard');
    }

    public function viewSchedule($id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2 || $user_type == 3) {
            $schedule = Booking::with('user')->findOrFail($id);
            return view('webapp.schedule.schedule', ['schedule' => $schedule]);
        }

        return redirect('/dashboard');
    }

    public function approveSchedule($id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2 || $user_type == 3) {
            Booking::where('id', $id)->update(['status' => 1]);
            return Redirect::back()->with('message', 'Schedule Approved.');
        }

        return redirect('/dashboard');
    }

    public function declineSchedule($id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2 || $user_type == 3) {
            Booking::where('id', $id)->update(['status' => 2]);
            return Redirect::back()->with('message', 'Schedule Declined.');
        }

        return redirect('/dashboard');
    }

    public function cancelSchedule($id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2 || $user_type == 3) {
            Booking::where('id', $id)->update(['status' => 3]);
            return Redirect::back()->with('message', 'Booking Cancelled.');
        }

        return redirect('/dashboard');
    }

    public function addComment(Request $request, $id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2 || $user_type == 3) {
            Booking::where('id', $id)->update(['comment' => $request->comment]);
            return Redirect::back()->with('message', 'Comment Added.');
        }

        return redirect('/dashboard');
    }
}
