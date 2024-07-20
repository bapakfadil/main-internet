<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');

// Auth
route::get('/login',[LoginController::class,'index'])->name('login');
route::post('/login',[LoginController::class,'authenticate'])->name('login.authenticate');
route::get('/register',[RegisterController::class,'index'])->name('register');
route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Menu customer
route::get('/customer',[CustomerController::class,'index'])->name('customer');
route::get('/customer/tambah-data',[CustomerController::class,'tambah'])->name('customer.tambah');

// Voucher
route::get('/voucher',[VoucherController::class,'index'])->name('voucher');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
