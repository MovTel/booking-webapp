<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('status', 1)->get()->map(function ($booking) {
            $booking->start = date('Y-m-d\TH:i:s', strtotime($booking->checkin));
            $booking->end = date('Y-m-d\TH:i:s', strtotime($booking->checkout_plus_one_hour));
            $booking->description = "Start Date: ".$booking->checkin_formatted."<br>End date: ".$booking->checkout_plus_formatted;
            return $booking;
        });

        return response()->json([
            'success' => true,
            'data' => $bookings
        ], 200);
    }
}
