<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;

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
Route::get('/customer', [CustomerController::class, 'index'])->name('customer')->middleware('admin');
Route::get('/customer/tambah-data', [CustomerController::class, 'tambah'])->name('customer.tambah')->middleware('admin');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store')->middleware('admin');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit')->middleware('admin');
Route::post('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update')->middleware('admin');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy')->middleware('admin');

// Voucher
route::get('/voucher',[VoucherController::class,'index'])->name('voucher');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/admin/transactions', [TransactionController::class, 'adminIndex'])->name('admin.transactions.index');
Route::post('/admin/transactions/{transaction}/confirm', [TransactionController::class, 'confirm'])->name('admin.transactions.confirm');
Route::post('/admin/transactions/{transaction}/reject', [TransactionController::class, 'reject'])->name('admin.transactions.reject');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::post('/reports/generate', [ReportController::class, 'generate'])->name('reports.generate');
});

