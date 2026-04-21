<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [RiceController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::post('/d_dashboard', [RiceController::class,'store']);

Route::get('/dashboard/{id}/edit', [RiceController::class,'edit']);

Route::put('/dashboard/{id}', [RiceController::class,'update']);

Route::delete('/dashboard/{id}', [RiceController::class,'destroy']);

Route::get('/order', [OrderController::class, 'orderindex'])
    ->middleware(['auth'])
    ->name('order');

Route::post('/o_orders', [OrderController::class,'orderstore']);


Route::get('/orders/{id}/edit', [OrderController::class,'orderedit']);

Route::put('/orders/{id}', [OrderController::class,'orderupdate'])
    ->name('orders.update');

Route::delete('/orders/{id}', [OrderController::class,'orderdestroy']);

Route::get('/payments', [PaymentController::class,'paymentindex'])
    ->middleware(['auth'])
    ->name('payment');

require __DIR__.'/auth.php';
