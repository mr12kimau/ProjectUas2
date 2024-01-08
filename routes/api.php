<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // web.php or api.php
    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

    // Di dalam grup middleware 'auth:sanctum'
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
});

