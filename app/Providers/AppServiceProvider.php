<?php

namespace App\Providers;

use App\Models\Unit;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $units = Unit::where('status', 1)->get();
        $locations = Unit::select('location')->where('status', 1)->distinct()->pluck('location');
        $categories = Unit::select('category')->distinct()->pluck('category');

        View::share(['units_global' => $units, 'locations_global' => $locations, 'categories_global' => $categories]);
    }
}
