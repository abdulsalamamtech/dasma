<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;




// Authenticated user accounts
Route::prefix('/account')->name('account.')->middleware('auth')->group(function () {

    // Account routes
    Route::controller(AccountController::class)
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });


    // Route::get('/', function () {
    //     return view('dasma.account.dashboard');
    // })->name('account');


    Route::get('/cart', function () {
        return view('dasma.account.cart');
    })->name('cart');

    Route::apiResource('carts', CartController::class)->middleware('auth');
    Route::apiResource('wishlists', WishlistController::class);
    Route::get('cart-card-details', [CartController::class, 'cartCardDetails'])->name('carts.card-details');

    Route::post('checkout', [CartController::class, 'checkout'])->name('carts.checkout');
    // checkout page
    Route::get('checkout', [CartController::class, 'checkout'])->name('carts.checkout-page');

    // More
    Route::get('/payment-method', [CartController::class, 'paymentMethod'])->name('payment-method');

    // Use new address
    Route::post('use-new-address', [CartController::class, 'useNewAddress'])->name('carts.use-new-address');
    // Use previous address
    Route::post('use-previous-address', [CartController::class, 'usePreviousAddress'])->name('carts.use-previous-address');

    Route::get('/orders', [AccountController::class, 'orders'])->name('orders.index');
    Route::get('/order-items', [AccountController::class, 'orderItems'])->name('orders.items.index');
    Route::get('/orders/{order}', [AccountController::class, 'showOrderItems'])->name('orders.show');

    // Proceed to checkout page after placing unpaid order
    Route::get('checkout/orders/{order}', [OrderController::class, 'proceedToCheckout'])->name('proceed-to-checkout');

    // User transactions
    Route::get('transactions', [TransactionController::class, 'userTransactions'])->name('transactions.index');


    // Coming soon
    Route::get('/history', function () {
        return redirect()->back()->with('warnings', 'Feature coming soon!');
        // return view('dasma.account.history');
    })->name('history.index');

    Route::get('/settings', function () {
        return view('dasma.account.settings');
    })->name('settings.index');
});
