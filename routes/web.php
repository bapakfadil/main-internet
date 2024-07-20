<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CustomerController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
//auth
route::get('/login',[LoginController::class,'index'])->name('login');
route::get('/register',[LoginController::class,'register'])->name('register');
//menu customer
route::get('/customer',[CustomerController::class,'index'])->name('customer');
route::get('/customer/tambah-data',[CustomerController::class,'tambah'])->name('customer.tambah');
//voucher
route::get('/voucher',[VoucherController::class,'index'])->name('voucher');
