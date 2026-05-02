<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ManageProducts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/product', function () {
    return view('product');
});

// auth

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// admin middleware

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/order', [CheckoutController::class, 'checkout'])
        ->name('dashboard.order');

    Route::get('/products',[ManageProducts::class, "index"])->name('products.index');
    Route::get('/products/create',[ManageProducts::class, "create"])->name('products.create');
    Route::post('/products',[ManageProducts::class, "store"]);
    Route::get('/products/{id}',[ManageProducts::class, "show"])->name('products.show');
    Route::get('/products/{id}/edit',[ManageProducts::class, "edit"])->name('products.edit');
    Route::put('/products/{id}',[ManageProducts::class, "update"])->name('products.update');
    Route::delete('/products/{id}/delete',[ManageProducts::class, "destroy"])->name('products.destroy');
});

// cart

Route::post('/cart/add/{id}', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/remove/{id}', [CartController::class, 'remove']);
Route::get('/cart/count', [CartController::class, 'count']);
Route::post('/cart/update/{id}', [CartController::class, 'update']);

// checkout

Route::get('/checkout', [CheckoutController::class, 'index'])
    ->middleware('auth')
    ->name('checkout');

Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder']);

// invoice

Route::get('/invoice/{id}', [CheckoutController::class, 'invoice'])
    ->name('invoice.show');