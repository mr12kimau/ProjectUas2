<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\MenuController::class, 'index'])->name('index');

Route::resource('menu', MenuController::class);

// Route untuk menyimpan transaksi
Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
