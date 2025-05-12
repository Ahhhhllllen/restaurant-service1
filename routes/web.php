<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TableController;

// Main restaurant interface
Route::get('/', [RestaurantController::class, 'index'])->name('restaurant.index');

// Service request routes
Route::post('/call-waiter', [RestaurantController::class, 'callWaiter'])->name('call.waiter');
Route::post('/bill-out', [RestaurantController::class, 'billOut'])->name('bill.out');
Route::post('/cancel', [RestaurantController::class, 'cancel'])->name('cancel');
Route::post('/feedback', [RestaurantController::class, 'feedback'])->name('feedback');

// Table-specific routes
Route::get('/table/{number}', function ($number) {
    session(['table_number' => 'Table ' . $number]);
    return redirect()->route('restaurant.index');
});

// Call waiter from specific table
Route::get('/table/{number}/call', [TableController::class, 'callWaiter'])->name('table.call');

// Show QR codes
Route::get('/qrcodes', [TableController::class, 'showQR'])->name('table.qr');

// Set the table
Route::get('/table/{id}', [TableController::class, 'setTable'])->name('table.set');
