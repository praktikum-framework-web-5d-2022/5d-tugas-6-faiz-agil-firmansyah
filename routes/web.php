<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
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

Route::resource('/', CustomerController::class);
Route::resource('customer', CustomerController::class);
Route::resource('rental', RentalController::class);
Route::fallback(function() {
    return view('fail');
});