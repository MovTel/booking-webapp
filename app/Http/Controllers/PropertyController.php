<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Property_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PropertyController extends Controller
{
    public function index()
    {
        $user_type = auth()->user()->user_type;
        $user_id = auth()->user()->id;

        if ($user_type == 5) {
            $properties = Unit::where('owner_id', $user_id)->get();
            return view('webapp.properties.index', ['units' => $properties]);
        }
        return redirect('/dashboard');
    }

    public function create()
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 5) {
            return view('webapp.properties.property_create');
        }

        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 5) {
            $units = Unit::with('property_image')->findOrfail($id);
            $amenities = explode(",", $units->amenities);

            return view('webapp.properties.property_edit', ['units' => $units, 'amenities' => $amenities]);
        }

        return redirect('/dashboard');
    }

    public function store(Request $request)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 5) {
            $amenities = implode(",", $request['amenities']);
            $owner_id = auth()->user()->id;

            $validated = $request->validate([
                "location" => ['required'],
                "property_name" => ['required'],
                "property_description" => ['required'],
                "property_address" => ['required'],
                "property_type" => ['required'],
                "category" => ['required'],
                "capacity" => ['required'],
                "maps_url" => ['nullable'],
                "property_view" => ['nullable'],
                "space" => ['required'],
                "per_hour_4_hrs" => ['nullable'],
                "per_hour_12_hrs" => ['nullable'],
                "per_hour_24_hrs" => ['nullable'],
                "plus_48_hrs" => ['nullable'],
                "minimum_hours" => ['required'],
                "downpayment" => ['nullable'],
            ]);

            $additional_info = [
                'amenities' => $amenities,
                'owner_id' => $owner_id
            ];

            $unit = Unit::create(array_merge($validated, $additional_info))->id;

            if ($request->hasFile('property_images')) {

                foreach ($request->file('property_images') as $image) {
                    $fileName = now()->format('Y-m-d_H-i-s') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $path = $image->storeAs('property_images', $fileName, 'public');
                    $imagePath = '/storage/' . $path;

                    Property_image::create(['unit_id' => $unit, 'image_path' => $imagePath])->id;
                }
            }

            return redirect('/unit');
        }

        return redirect('/dashboard');
    }

    public function update(Request $request, $id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 5) {
            $amenities = implode(",", $request['amenities']);
            $owner_id = auth()->user()->id;

            $validated = $request->validate([
                "location" => ['required'],
                "property_name" => ['required'],
                "property_description" => ['required'],
                "property_address" => ['required'],
                "property_type" => ['required'],
                "category" => ['required'],
                "capacity" => ['required'],
                "maps_url" => ['nullable'],
                "property_view" => ['nullable'],
                "space" => ['required'],
                "per_hour_4_hrs" => ['nullable'],
                "per_hour_12_hrs" => ['nullable'],
                "per_hour_24_hrs" => ['nullable'],
                "plus_48_hrs" => ['nullable'],
                "minimum_hours" => ['required'],
                "downpayment" => ['nullable'],
            ]);

            $additional_info = [
                'amenities' => $amenities,
                'owner_id' => $owner_id
            ];

            Unit::where('id', $id)->update(array_merge($validated, $additional_info));

            if ($request->hasFile('property_images')) {
                foreach ($request->file('property_images') as $image) {
                    $fileName = now()->format('Y-m-d_H-i-s') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $path = $image->storeAs('property_images', $fileName, 'public');
                    $imagePath = '/storage/' . $path;

                    Property_image::create(['unit_id' => $id, 'image_path' => $imagePath])->id;
                }
            }

            return Redirect::back()->with('message', 'Unit updated successfully.');
        }

        return redirect('/dashboard');
    }

    public function destroy(Request $request, $id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 5) {
            Unit::where('id', $id)->delete();
            Property_image::where('unit_id', $id)->delete();
            return redirect('/unit');
        }

        return redirect('/dashboard');
    }
}
