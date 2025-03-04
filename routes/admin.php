<?php 

use App\Http\Controllers\AssetController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariationController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;















Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard routes
    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    // Route::get('/products', function () {
    //     return view('dashboard.pages.products.index');
    // })->name('products.index');
    Route::get('/centers', function () {
        return view('dashboard.pages.centers.index');
    })->name('');
    Route::get('/centers', function () {
        return view('dashboard.pages.centers.index');
    })->name('');
    Route::get('/centers', function () {
        return view('dashboard.pages.centers.index');
    })->name('');
    Route::get('/centers', function () {
        return view('dashboard.pages.centers.index');
    })->name('');
    Route::get('/centers', function () {
        return view('dashboard.pages.centers.index');
    })->name('');

    // Brands routes
    Route::apiResource('brands', BrandController::class);
    // Categories routes
    Route::apiResource('categories', CategoryController::class);
    // Promotions routes
    Route::apiResource('promotions', PromotionController::class);
    // Assets routes
    Route::apiResource('assets', AssetController::class);
    // Route::any('assets', [AssetController::class, 'index']);


    // Products routes
    Route::apiResource('products', ProductController::class);

    // Product Variations routes   
    Route::apiResource('products.product-variations', ProductVariationController::class);


    // Orders routes
    Route::apiResource('orders', OrderController::class);
    
    // Cart routes
    // Route::apiResource('carts', CartController::class);
    // Wishlist routes
    // Route::apiResource('wishlists', WishlistController::class);
    // Reviews routes
    // Route::apiResource('reviews', ReviewController::class);
    // Returns routes
    // Route::apiResource('returns', ReturnController::class);
    // Messages routes
    // Route::get('messages', [MessageController::class, 'index']);
    // Route::get('messages/{message}', [MessageController::class, 'show']);
    // Route::delete('messages/{message}', [MessageController::class, 'destroy']);

    // Notifications routes
    // Route::get('notifications', [NotificationController::class, 'index']);
    // Route::get('notifications/{notification}', [NotificationController::class, 'show']);


    // Transactions routes
    // Route::apiResource('transactions', TransactionController::class);
    // Customers routes
    // Route::apiResource('customers', CustomerController::class);

    // Settings routes
    // Route::get('/settings', function () {
    //     return view('dashboard.pages.settings.index');
    // })->name('settings.index');
    // Route::get('/settings/general', function () {
    //     return view('dashboard.pages.settings.general');
    // })->name('settings.general');
    // Route::get('/settings/payment', function () {
    //     return view('dashboard.pages.settings.payment');
    // })->name('settings.payment');

});