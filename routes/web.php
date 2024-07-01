<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;


Route::get('/', [IndexController::class, 'index']) -> name ('index');

Route::get('/home', [HomeController::class, 'home']) -> name ('home');

Route::get('/cart', [CartController::class, 'cart']) -> name ('cart');

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [UserController::class, 'showFormRegister']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/products', [ProductController::class, 'listProducts'])->name('listProducts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);
});

