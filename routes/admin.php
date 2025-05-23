<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomizationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessageRepliesController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariationController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




















Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard routes
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Brands routes
    Route::apiResource('brands', BrandController::class);
    // Categories routes
    Route::apiResource('categories', CategoryController::class);
    // Promotions routes
    Route::apiResource('promotions', PromotionController::class);
    // Assets routes
    Route::apiResource('assets', AssetController::class)
    ->only(['index']);


    // Products routes
    Route::apiResource('products', ProductController::class);
    // Product Variations routes   
    Route::apiResource('products.product-variations', ProductVariationController::class);
    // Orders routes
    Route::apiResource('orders', OrderController::class);
    

    // Customization routes
    Route::apiResource('customizations', CustomizationController::class);
    // Customization routes
    Route::get('/customizations/types/home', [CustomizationController::class, 'index'])->name('customizations.home');
    Route::get('/customizations/types/trending', [CustomizationController::class, 'trending'])->name('customizations.trending');
    Route::get('/customizations/types/new-arrivals', [CustomizationController::class, 'newArrivals'])->name('customizations.new-arrivals');

    // Transactions routes
    Route::apiResource('transactions', TransactionController::class)
    ->except(['edit', 'store', 'update', 'destroy']);

    // Customers routes
    Route::apiResource('users', UserController::class);
    // Transactions routes
    Route::apiResource('newsletters', NewsletterController::class)
    ->except(['store']);

    // Cart routes
    // Route::apiResource('carts', CartController::class);
    // Wishlist routes
    // Route::apiResource('wishlists', WishlistController::class);
    // Reviews routes
    // Route::apiResource('reviews', ReviewController::class);
    // Returns routes
    // Route::apiResource('returns', ReturnController::class);

    // Messages routes
    Route::apiResource('messages', MessageController::class);
    // Message Reply routes
    Route::apiResource('message-replies', MessageRepliesController::class);

    // Notifications routes
    // Route::get('notifications', [NotificationController::class, 'index']);
    // Route::get('notifications/{notification}', [NotificationController::class, 'show']);

    // Customers routes
    // Route::apiResource('customers', CustomerController::class);

    // Profile routes
    Route::get('/profile', function () {
        return view('dashboard.profile.show');
    })->name('profile');
    // Setting routes
    Route::get('/settings', function () {
        return view('dashboard.profile.edit');
    })->name('settings');
});


