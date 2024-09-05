<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');});

Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/products', [ProductController::class,'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class,'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class,'destroy'])->name('products.destroy');

Route::get('/products/landing', [ProductController::class, 'landing'])->name('products.landing');


use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

