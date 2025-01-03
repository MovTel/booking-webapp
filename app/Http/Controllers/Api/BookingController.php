<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Unit;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('status', 1)->get()->map(function ($booking) {
            $booking->start = date('Y-m-d\TH:i:s', strtotime($booking->checkin));
            $booking->end = date('Y-m-d\TH:i:s', strtotime($booking->checkout_plus_one_hour));
            $booking->description = "Start Date: " . $booking->checkin_formatted . "<br>End date: " . $booking->checkout_plus_formatted;
            return $booking;
        });

        return response()->json([
            'success' => true,
            'data' => $bookings
        ], 200);
    }

    public function getUnitBookings($id)
    {
        $bookings = Booking::where('status', 1)->where('unit_id', $id)->get()->map(function ($booking) {
            $booking->start = date('Y-m-d\TH:i:s', strtotime($booking->checkin));
            $booking->end = date('Y-m-d\TH:i:s', strtotime($booking->checkout_plus_one_hour));
            $booking->description = "Start Date: " . $booking->checkin_formatted . "<br>End date: " . $booking->checkout_plus_formatted;
            return $booking;
        });

        return response()->json([
            'success' => true,
            'data' => $bookings
        ], 200);
    }

    public function getUnitBookingBreakdown(Request $request, $unit_id)
    {
        $checkin = new DateTime($request->checkin_date . "T" . $request->checkin_time);
        $checkout = new DateTime($request->checkout_date . "T" . $request->checkout_time);
        $interval = $checkin->diff($checkout);
        $total_hours = ($interval->days * 24) + $interval->h;
        $unit = Unit::findOrFail($unit_id);
        $cost = 0;
        $per_hour = 0;
        $checkin_formatted = Carbon::createFromFormat('Y-m-d H:i:s', $request->checkin_date . " " . $request->checkin_time)->format('F d, Y h:i A');
        $checkout_formatted = Carbon::createFromFormat('Y-m-d H:i:s', $request->checkout_date . " " . $request->checkout_time)->format('F d, Y h:i A');

        if ($total_hours > 48) {
            $cost = $this->calculateTotal($unit->plus_48_hrs, $total_hours, $unit_id);
            $per_hour = $unit->per_hour_4_hrs - ($unit->per_hour_4_hrs * $unit->plus_48_hrs);
        } elseif ($total_hours < 48 && $total_hours >= 24) {
            $cost = $this->calculateTotal($unit->per_hour_24_hrs, $total_hours, $unit_id);
            $per_hour = $unit->per_hour_24_hrs;
        } elseif ($total_hours < 24 && $total_hours >= 12) {
            $cost = $this->calculateTotal($unit->per_hour_12_hrs, $total_hours, $unit_id);
            $per_hour = $unit->per_hour_12_hrs;
        } else {
            $cost = $total_hours * $unit->per_hour_4_hrs;
            $per_hour = $unit->per_hour_4_hrs;
        }

        $booking_fee = $cost * 0.25;
        $cost = $cost + $booking_fee;

        $details = [
            'checkin' => $checkin_formatted,
            'checkout' => $checkout_formatted,
            'total_hours' => $total_hours . " Hours",
            'per_hour' => '₱' . number_format($per_hour, 2, '.', ','),
            'booking_fee' => '₱' . number_format($booking_fee, 2, '.', ','),
            'cost' => '₱' . number_format($cost, 2, '.', ',')
        ];

        return response()->json([
            'success' => true,
            'data' => $details
        ], 200);
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
}
