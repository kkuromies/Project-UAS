<?php

use App\Http\Controllers\productscontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

//route dengan mide resources

Route::resource('/products', productscontroller::class);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/products', \App\Http\Controllers\productscontroller::class);
Route::get('/products/{id}', [productscontroller::class, 'show'])->name('products.show');
Route::get('/welcome', function () {
    return view('welcome'); // Adjust this to match your welcome view
})->name('welcome');

Route::get('/keranjang_checkout', function () {
    return view('keranjang_checkout');
})->name('keranjang_checkout');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/beli/{id}', [CartController::class, 'beli'])->name('cart.beli');
Route::get('/keranjang', [CartController::class, 'keranjang'])->name('cart.keranjang');