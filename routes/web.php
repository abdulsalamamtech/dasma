<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    // return view('welcome');
    return view('dasma.index');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect()->route('account.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/account.php';






// DASMA APP
Route::get('/dasma', function () {
    return view('dasma.index');
})->name('index');


// Search product
Route::get('search', [ProductController::class, 'searchProduct'])->name('search');

// Store Routes
Route::get('stores', [ProductController::class, 'listProduct'])->name('stores.list');
Route::get('stores/{product:slug}', [ProductController::class, 'showProduct'])->name('stores.show');


// Carts Routes
// Route::post('carts', [CartController::class, 'store'])->name('carts.store');
// Route::delete('carts/{cart}', [CartController::class, 'destroy'])->name('carts.delete');


// Wishlists Route
// Route::post('wishlists', [WishlistController::class, 'store'])->name('wishlists.store');
// Route::delete('wishlists/{wishlist}', [WishlistController::class, 'destroy'])->name('wishlists.delete');


Route::get('/dasma/product', function () {
    return view('dasma.product');
})->name('product');


Route::get('/dasma/about', function () {
    return view('dasma.about');
})->name('about');

Route::get('/dasma/contact', function () {
    return view('dasma.contact');
})->name('contact');

Route::get('contact', [MessageController::class, 'create'])->name('message.create');
Route::post('contact', [MessageController::class, 'store'])->name('message.store');

// Newsletter
Route::post('newsletters', [NewsletterController::class, 'store'])->name('newsletters.store');


Route::get('/dasma/terms-and-conditions', function () {
    return view('dasma.terms-and-conditions');
})->name('terms-and-conditions');










Route::get('/fallback', function () {
    return view('dashboard.dashboard');
})->name('fallback');


Route::get('states', function(){
    $states=[
        "Abia",
        "Adamawa",
        "Akwa-Ibom",
        "Anambra",
        "Bauchi",
        "Bayelsa",
        "Benue",
        "Borno",
        "Cross-River",
        "Delta",
        "Ebonyi",
        "Edo",
        "Ekiti",
        "Enugu",
        "FCT-Abuja",
        "Gombe",
        "Imo",
        "Jigawa",
        "Kaduna",
        "Kano",
        "Katsina",
        "Kebbi",
        "Kogi",
        "Kwara",
        "Lagos",
        "Nasarawa",
        "Niger",
        "Ogun",
        "Ondo",
        "Osun",
        "Oyo",
        "Plateau",
        "Rivers",
        "Sokoto",
        "Taraba",
        "Yobe",
        "Zamfara"
    ];
    return $states;
});


// Last Route
Route::fallback(function () {
    // ...
    return view('dashboard.dashboard')->with('error', 'page not found');
});