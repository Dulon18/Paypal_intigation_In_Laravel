<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PaypalPaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//payment
Route::post('/payment',[PaypalPaymentController::class,'payment'])->name("paypalPayment");
Route::get('success', [PaypalPaymentController::class, 'success']);
Route::get('error', [PaypalPaymentController::class, 'error']);