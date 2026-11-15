<?php

use App\Http\Controllers\admin\GuestController as AdminGuestController;
use App\Http\Controllers\Admin\GuestController as ControllersAdminGuestController;
use App\Http\Controllers\Admin\TicketbookingController;
use App\Http\Controllers\app\guestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app.index');
})->name('home');
Route::get('/ticket-booking', function () {
    return view('app.ticket-booking');
})->name('ticket-booking');

Route::get('/stall-booking', function () {
    return view('app.stall-booking');
})->name('stall-booking');


Route::get('/exhibitors', function () {
    return view('app.exhibitor');
})->name('exhibitor');

Route::resource('guest', guestController::class)->names('guest');

Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    // ticket-booking
    Route::resource('/ticket-booking', TicketbookingController::class);
    Route::resource('/guest', ControllersAdminGuestController::class);

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
});
