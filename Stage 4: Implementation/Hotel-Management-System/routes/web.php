<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('bookings', App\Http\Controllers\BookingController::class);
Route::resource('contacts', App\Http\Controllers\ContactController::class);
Route::resource('features', App\Http\Controllers\FeatureController::class);
Route::resource('feedback', App\Http\Controllers\FeedbackController::class);
Route::resource('galleries', App\Http\Controllers\GalleryController::class);
Route::resource('guests', App\Http\Controllers\GuestController::class);
Route::resource('housekeepings', App\Http\Controllers\HousekeepingController::class);
Route::resource('inventories', App\Http\Controllers\InventoryController::class);
Route::resource('notifications', App\Http\Controllers\NotificationController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('payments', App\Http\Controllers\PaymentController::class);
Route::resource('predictions', App\Http\Controllers\PredictionController::class);
Route::resource('rooms', App\Http\Controllers\RoomController::class);
Route::resource('staff', App\Http\Controllers\StaffController::class);
Route::resource('transactions', App\Http\Controllers\TransactionController::class);