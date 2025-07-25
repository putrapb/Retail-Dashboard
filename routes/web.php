<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/creator', [DashboardController::class, 'creator'])->name('creator');
Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
Route::get('/products', [DashboardController::class, 'products'])->name('products');
Route::get('/products/tambah', [DashboardController::class, 'addproducts'])->name('add products');
Route::get('/visualisasi', [DashboardController::class, 'visualisasi'])->name('visualisasi');
Route::get('/forecast', [DashboardController::class, 'forecast'])->name('forecast');
Route::get('/ai', [DashboardController::class, 'ai'])->name('ai');
