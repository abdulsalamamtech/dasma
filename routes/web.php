<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/dashboard', function () {
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



// Search product
Route::get('search', [ProductController::class, 'searchProduct'])->name('search');

// Store Routes
Route::get('stores', [ProductController::class, 'listProduct'])->name('stores.list');
Route::get('stores/{product:slug}', [ProductController::class, 'showProduct'])->name('stores.show');

Route::get('contact', [MessageController::class, 'create'])->name('message.create');
Route::post('contact', [MessageController::class, 'store'])->name('message.store');

// Newsletter
Route::post('newsletters', [NewsletterController::class, 'store'])->name('newsletters.store');






Route::get('/dasma/product', function () {
    return view('dasma.product');
})->name('product');


Route::get('/dasma/about', function () {
    return view('dasma.about');
})->name('about');

Route::get('/dasma/contact', function () {
    return view('dasma.contact');
})->name('contact');



Route::get('/dasma/terms-and-conditions', function () {
    return view('dasma.terms-and-conditions');
})->name('terms-and-conditions');







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

Route::get('/fallback', function () {
    return redirect()->route('index')->with('error', 'page not found');
})->name('fallback');

// Last Route
Route::fallback(function () {
    // ...
    return redirect()->route('index')->with('error', 'page not found');
});