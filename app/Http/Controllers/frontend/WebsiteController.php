<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function single($id)
    {
        $logged = auth()->user();
        $unit = Unit::with('property_image')->where('status', 1)->findOrFail($id);
        $amenities = explode(",", $unit->amenities);
        $current_date = date('Y-m-d');
        return view('website.single-listing', ['unit' => $unit, 'amenities' => $amenities, 'date' => $current_date, 'logged_in' => $logged]);
    }

    public function category($slug)
    {
        $units = Unit::with('property_image')->where('category', $slug)->where('status', 1)->get();
        if ($units->isNotEmpty()) {
            return view('website.category', ['units' => $units, 'category' => $slug]);
        }

        abort(404);
    }

    public function about()
    {
        return view('website.about');
    }

    public function joinUs()
    {
        return view('website.join-us');
    }

    public function referral()
    {
        return view('website.referral');
    }

    public function signup()
    {
        if (!auth()->user()) {
            return view('website.signup');
        }

        return redirect('/');
    }

    public function countdown()
    {
        return view('website.countdown');
    }
}
