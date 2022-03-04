<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayController;
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
// RazorpayController
Route::get('payThroughRazorpay',[RazorpayController::class ,'payThroughRazorpay'])->name('payThroughRazorpay');
Route::post('payment',[RazorpayController::class ,'payment'])->name('payment');
