<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Property_imageController;
use App\Http\Controllers\frontend\WebsiteController;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Webapp
Route::controller(UserController::class)->group(function () {
    Route::post('/login/attempt', 'loginAttempt');
    Route::get('/registration', 'registration')->middleware('guest');
    Route::post('/registration/attempt', 'registrationAttempt');
    Route::post('/registration/owner/attempt', 'registrationAttemptOwner');
    Route::post('/logout', 'logout');
    Route::get('/profile', 'profile');
});

Route::controller(AgentController::class)->middleware('auth')->group(function () {
    Route::get('/agents', 'agent');
    Route::get('/agents/create', 'create');
    Route::post('/agents/store', 'store');
    Route::get('/agents/{id}/edit', 'edit');
    Route::put('/agents/{id}/update', 'update');
    Route::delete('/agents/{id}/delete', 'destroy');
});

Route::controller(BookingController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/booking', 'booking');
    Route::get('/booking/records', 'records');
    Route::get('/booking/keycard/', 'keycardUser');
    Route::post('/booking/keycard/store', 'keycardPurchase');
    Route::get('/keycard', 'keycardAll');
    Route::get('/keycard/create', 'keycardCreate');
    Route::post('/keycard/store', 'keycardStore');
    Route::post('/keycard/purchase', 'keycardPurchase');
    Route::get('/keycard/{id}/edit', 'keycardEdit');
    Route::put('/keycard/{id}/update', 'keycardUpdate');
    Route::get('/booking/{unit_id}', 'bookUnit');
    Route::post('/booking/{unit_id}/store', 'store');
    Route::get('/schedules', 'schedules');
    Route::get('/schedule/{id}', 'viewSchedule');
    Route::put('/schedule/{id}/approve', 'approveSchedule');
    Route::put('/schedule/{id}/decline', 'declineSchedule');
    Route::put('/booking/{id}/cancel', 'cancelSchedule');
    Route::put('/booking/{id}/comment', 'addComment');
});

Route::controller(UnitController::class)->middleware('auth')->group(function () {
    Route::get('/unit', 'index');
    Route::get('/unit/create', 'create');
    Route::post('/unit/store', 'store');
    Route::get('/unit/{id}/edit', 'edit');
    Route::put('/unit/{id}/update', 'update');
    Route::delete('/unit/{id}/delete', 'destroy');
});

Route::controller(PropertyController::class)->middleware('auth')->group(function () {
    Route::get('/properties', 'index');
    Route::get('/properties/create', 'create');
    Route::post('/properties/store', 'store');
    Route::get('/properties/{id}/edit', 'edit');
    Route::put('/properties/{id}/update', 'update');
    Route::delete('/properties/{id}/delete', 'destroy');
});

Route::controller(Property_imageController::class)->middleware('auth')->group(function () {
    Route::post('/property_images/{id}/delete', 'destroy');
    Route::post('/property_images/{unit_id}/cover/{id}', 'setCoverImage');
});

// Website
Route::get('/', [WebsiteController::class, 'index'])->name('login');
Route::get('/about-us', [WebsiteController::class, 'about']);
Route::get('/join-us', [WebsiteController::class, 'joinUs']);
Route::get('/referral', [WebsiteController::class, 'referral']);
Route::get('/signup', [WebsiteController::class, 'signup']);
Route::get('/properties/{id}', [WebsiteController::class, 'single']);
Route::get('/registration-promo', [WebsiteController::class, 'countdown']);
Route::get('/{slug}', [WebsiteController::class, 'category']);