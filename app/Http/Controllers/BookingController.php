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
            $checkin_times = array_column(booking::select('checkin_time')->where(['checkin_date' => $request->date, 'status' => 1])->get()->toArray(), 'checkin_time');
            $checkout_times = array_column(booking::select('checkout_time_plus_one')->where(['checkin_date' => $request->date, 'status' => 1])->get()->toArray(), 'checkout_time_plus_one');

            $times = [];
            $date = Carbon::parse($request->date)->format('Y-m-d');

            if ($checkin_times) {

                $starting_hour = null;
                $current_hour = "";

                for ($hour = 0; $hour < 24; $hour++) {
                    $time24 = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00:00';
                    $time12 = date('h:i A', strtotime($time24));
                    $status = 1;

                    if (in_array($time24, $checkin_times)) {
                        $starting_hour = $time24;
                    }

                    $current_hour = $time24;

                    $checkin_order = array_search($starting_hour, $checkin_times);
                    $checkout_time_match = $checkin_order ? $checkout_times[$checkin_order] : $checkout_times[0];
                    if (strtotime($current_hour) <= strtotime($checkout_time_match) && strtotime($current_hour) >= strtotime($checkin_times[$checkin_order])) {
                        $status = 0;
                    } else {
                        $status = 1;
                    }

                    $times[] = [
                        '24hr' => $time24,
                        '12hr' => $time12,
                        'status' => $status,
                    ];
                }

                $unit = Unit::findOrFail($unit_id);
                return view('webapp.bookings.booking', ['unit' => $unit, 'hours' => $times, 'date' => $date, 'status_keycard' => $status_keycard]);
            }

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

        if ($user_type == 4) {
            $requestData = $request->all();
            $checkin = new DateTime($request->checkin_time);
            $checkout = new DateTime($request->checkout_time);
            $interval = $checkin->diff($checkout);
            $checkout_plus_1 = $checkout->add(new DateInterval('PT1H'));
            $total_hours = $interval->h;
            $unit = Unit::findOrFail($unit_id);

            if ($total_hours < 4) {
                return redirect::back()->with('message', 'You can only book a minimum of 4 hours.');
            }

            $cost = $total_hours * $unit->per_hour_4_hrs;


            if ($request->id_image) {
                $fileName = time() . $request->file("id_image")->getClientOriginalName();
                $path = $request->file("id_image")->storeAs("image", $fileName, "public");
                $requestData['id_image'] = '/storage/' . $path;
            }

            $user_id = auth()->user()->id;
            $unit = Unit::findOrFail($unit_id);

            $validated = $request->validate([
                "guests" => ['required'],
                "checkin_date" => ['required'],
                "checkin_time" => ['required'],
                "checkout_time" => ['required'],
                "id_image" => ['required'],
            ]);

            $auto_gen = [
                'user_id' => $user_id,
                'unit_id' => $unit->id,
                'dp' => $cost,
                'fp' => $cost,
                'checkout_time_plus_one' => $checkout_plus_1,
                'id_image' => $requestData['id_image'],
                'agent_id' => $user_id
            ];

            Booking::create(array_merge($validated, $auto_gen))->id;
            return redirect('/booking')->with('message', 'reservation booked successfully.');
        }

        return redirect('/dashboard');
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

            $user_id = auth()->user()->id;

            $validated = $request->validate([
                "id_image" => ['required'],
                "full_address" => ['required'],
            ]);

            Purchase::create(array_merge($validated, ['user_id' => $user_id, 'id_image' => $requestData['id_image']]))->id;
            return redirect('/booking');
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
                $schedules = Booking::select('*')->when($request->text_search && $request->string, function ($query) use ($request) {
                    $query->where($request->text_search, 'like', '%' . $request->string . '%');
                })->when($request->status || $request->status == 0, function ($query) use ($request) {
                    $query->where('status', $request->status);
                })->when($request->checkin_date, function ($query) use ($request) {
                    $query->where('checkin_date', $request->checkin_date);
                })->get();

                return view('webapp.schedule.index', ['schedules' => $schedules]);
            }

            $schedules = Booking::with('user')->get();
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
}
