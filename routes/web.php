<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RandomController;


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
Route::view('/', 'index')->name('login')->middleware('guest');
// Route::get('register', RegisterController::class);
Route::view('register', 'register');
Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);
Route::post('random', RandomController::class);
Route::get('logout', LogoutController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
// });
