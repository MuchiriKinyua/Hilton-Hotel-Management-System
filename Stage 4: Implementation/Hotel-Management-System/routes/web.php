<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', [AdminController::class, 'home']);
Route::get('/home', [AdminController::class, 'index'])->name('home');

Auth::routes(['register' => true]);

Route::get('/create_room', [AdminController::class, 'create_room'])->middleware(['auth', 'admin']);
Route::post('/add_room', [AdminController::class, 'add_room'])->middleware(['auth', 'admin']); 
Route::get('/view_room', [AdminController::class, 'view_room'])->name('view_room')->middleware(['auth', 'admin']);
Route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->middleware(['auth', 'admin']);
Route::get('/room_update/{id}', [AdminController::class, 'room_update'])->middleware(['auth', 'admin']);
Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->middleware(['auth', 'admin']);
Route::get('/room_details/{id}', [HomeController::class, 'room_details']);
Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);
Route::get('/bookings', [AdminController::class, 'bookings'])->middleware(['auth', 'admin']);
Route::get('/transactions', [AdminController::class, 'transactions'])->middleware(['auth', 'admin']);
Route::get('/view_gallery', [AdminController::class, 'view_gallery'])->middleware(['auth', 'admin']);
Route::get('/view_messages', [AdminController::class, 'view_messages'])->middleware(['auth', 'admin']);
Route::post('/upload_gallery', [AdminController::class, 'upload_gallery'])->middleware(['auth', 'admin']);
Route::get('/delete_gallery/{id}', [AdminController::class, 'delete_gallery'])->middleware(['auth', 'admin']);
Route::get('/housekeeping', [AdminController::class, 'housekeeping'])->name('housekeeping')->middleware(['auth', 'admin']);
Route::get('/create_housekeeping', [AdminController::class, 'createhousekeeping'])->name('housekeeping.create')->middleware(['auth', 'admin']);
Route::get('/view_housekeeping', [AdminController::class, 'viewHousekeeping'])->name('housekeeping');
Route::post('/view_housekeeping', [AdminController::class, 'storeHousekeeping'])->name('housekeeping.store')->middleware(['auth', 'admin']);
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

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
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
Route::resource('users', UserController::class);
Route::resource('audits', App\Http\Controllers\AuditController::class);
Route::resource('billings', App\Http\Controllers\BillingController::class);
Route::resource('expenses', App\Http\Controllers\ExpenseController::class);
Route::resource('invoices', App\Http\Controllers\InvoiceController::class);
Route::resource('items', App\Http\Controllers\ItemController::class);
Route::resource('loggeds', App\Http\Controllers\LoggedController::class);
Route::resource('maintenances', App\Http\Controllers\MaintenanceController::class);
Route::resource('methods', App\Http\Controllers\MethodController::class);
Route::resource('occupations', App\Http\Controllers\OccupationController::class);
Route::resource('reports', App\Http\Controllers\ReportController::class);
Route::resource('stations', App\Http\Controllers\StationController::class);
Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('tables', App\Http\Controllers\TableController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);