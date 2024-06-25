<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\companyController;
// use adminController  

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route role user
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [userController::class, 'index'])->name('home');
});

// Route role admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [adminController::class, 'index'])->name('admin.home');
});

// Route role company
Route::middleware(['auth', 'user-access:company'])->group(function () {
  
    Route::get('/company/home', [companyController::class, 'index'])->name('company.home');
});