<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('dasma.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





// DASMA APP
Route::get('/dasma', function () {
    return view('dasma.index');
})->name('index');

Route::get('/dasma/search', function () {
    return view('dasma.search');
})->name('search');

Route::get('/dasma/store', function () {
    return view('dasma.store');
})->name('store');

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




// Authenticated user accounts
Route::prefix('/account')->group(function () {

    Route::get('/', function () {
        return view('dasma.account.dashboard');
    })->name('account');


    Route::get('/cart', function () {
        return view('dasma.account.cart');
    })->name('cart');

    Route::get('/wishlist', function () {
        return view('dasma.account.wishlist');
    })->name('wishlist');

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




Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard routes
    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::get('/products', function () {
        return view('dashboard.pages.products.index');
    })->name('products.index');
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
});


Route::get('/fallback', function () {
    return view('dashboard.index');
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