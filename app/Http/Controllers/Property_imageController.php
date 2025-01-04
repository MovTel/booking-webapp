<?php

namespace App\Http\Controllers;

use App\Models\Property_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Property_imageController extends Controller
{
    public function destroy($id)
    {
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2) {
            Property_image::where('id', $id)->delete();
            return redirect::back()->with('message', 'Property image deleted successfully.');
        }

        return redirect('/dashboard');
    }

    public function setCoverImage($unit_id, $id)
    {   
        $user_type = auth()->user()->user_type;

        if ($user_type == 1 || $user_type == 2) {
            Property_image::where('unit_id', $unit_id)->update(['is_cover' => 0]);
            Property_image::where('id', $id)->update(['is_cover' => 1]);
            return Redirect::back()->with('message', 'Cover Image set successfully.');
        }

        return redirect('/dashboard');
    }
}
