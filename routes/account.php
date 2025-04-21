<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;


// Authenticated user accounts
Route::prefix('/account')->group(function () {

    // Account routes
    Route::controller(AccountController::class)
    ->group(function () {
        Route::get('/', 'index')->name('account');
    });


    // Route::get('/', function () {
    //     return view('dasma.account.dashboard');
    // })->name('account');


    Route::get('/cart', function () {
        return view('dasma.account.cart');
    })->name('cart');

    Route::apiResource('carts', CartController::class);
    Route::apiResource('wishlists', WishlistController::class);
    Route::get('cart-card-details', [CartController::class, 'cartCardDetails'])->name('carts.card-details');



    // Route::get('/wishlist', function () {
    //     return view('dasma.account.wishlist');
    // })->name('wishlist');

    Route::get('/orders', function () {
        return view('dasma.account.orders');
    })->name('orders');

    Route::get('/transactions', function () {
        return view('dasma.account.transactions');
    })->name('transactions');

    Route::get('/history', function () {
        return view('dasma.account.history');
    })->name('history');

    Route::get('/settings', function () {
        return view('dasma.account.settings');
    })->name('settings');


    // More
    Route::get('/shipping-methods', function () {
        return view('dasma.account.shipping-methods');
    })->name('shipping');
});
