<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DeleteTripController;
use App\Models\Continent;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
// });
Route::view('/', 'index')->name('login')->middleware('guest');
// Route::get('register', RegisterController::class);
Route::view('register', 'register');
Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);

Route::get('random/{continent:continent}', RandomController::class)->name('random.country');

Route::post('/random/check/{country:country}', TripController::class);

Route::get('/random/check/{country:country}', TripController::class);

Route::get('/delete/{country:country}', DeleteTripController::class);



// Route::get('random/{continent:continent}/{country:country}', function (Continent $continent, Country $country) {
//     dd($country);
// });
Route::get('logout', LogoutController::class);
Route::get('dashboard', DashboardController::class)->name('dashboard')->middleware('auth');
Route::view('trips', 'trips');

Route::get('/search', SearchController::class);
