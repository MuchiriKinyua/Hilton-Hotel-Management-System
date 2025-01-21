<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'home']);
Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/create_room', [AdminController::class, 'create_room'])->middleware(['auth', 'admin']);
Route::post('/add_room', [AdminController::class, 'add_room'])->middleware(['auth', 'admin']); 
Route::get('/view_room', [AdminController::class, 'view_room'])->name('view_room')->middleware(['auth', 'admin']);
Route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->middleware(['auth', 'admin']);
Route::get('/room_update/{id}', [AdminController::class, 'room_update'])->middleware(['auth', 'admin']);
Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->middleware(['auth', 'admin']);
Route::get('/room_details/{id}', [HomeController::class, 'room_details']);
Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);
Route::get('/bookings', [AdminController::class, 'bookings'])->middleware(['auth', 'admin']);
Route::get('/view_gallery', [AdminController::class, 'view_gallery'])->middleware(['auth', 'admin']);
Route::get('/view_messages', [AdminController::class, 'view_messages'])->middleware(['auth', 'admin']);
Route::post('/upload_gallery', [AdminController::class, 'upload_gallery'])->middleware(['auth', 'admin']);
Route::get('/delete_gallery/{id}', [AdminController::class, 'delete_gallery'])->middleware(['auth', 'admin']);
Route::post('/contact', [HomeController::class, 'contact']);
Route::get('/our_rooms', [HomeController::class, 'our_rooms']);
Route::get('/hotel_blog', [HomeController::class, 'hotel_blog']);
Route::get('/contact_us', [HomeController::class, 'contact_us']);
Route::get('/hotel_gallery', [HomeController::class, 'hotel_gallery']);
Route::get('/send_mail/{id}', [AdminController::class, 'send_mail'])->middleware(['auth', 'admin'])->middleware(['auth', 'admin']);
Route::post('/mail/{id}', [AdminController::class, 'mail'])->middleware(['auth', 'admin'])->middleware(['auth', 'admin']);
Route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking'])->middleware(['auth', 'admin']);
Route::get('/approve_book/{id}', [AdminController::class, 'approve_book'])->middleware(['auth', 'admin']);
Route::get('/reject_book/{id}', [AdminController::class, 'reject_book'])->middleware(['auth', 'admin']);
Route::get('/prediction', [AdminController::class, 'prediction'])->middleware(['auth', 'admin']);
Route::post('/predict', [HomeController::class, 'predict'])->name('predict');

Route::controller(HomeController::class)
    ->prefix('add_booking')
    ->as('add_booking.')
    ->group(function () {
        Route::post('/initiatepush', 'initiateStkPush')->name('initiatepush');
        Route::get('/token', 'token')->name('token');
        Route::post('/stkCallback', 'stkCallback')->name('stkCallback');
    });




