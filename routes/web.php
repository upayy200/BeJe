<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Define the web routes for your application here. These routes are loaded
| by the RouteServiceProvider and contain the "web" middleware group.
|
*/

// Public Routes (Global)
Route::get('/', [ShopController::class, 'index'])->name('homePage');

Route::get('/profile', function () {
    return view('auth.profile');
})->name('profile');

Route::get('/list', [ProductController::class, 'list'])->name('shop.list');

Route::get('/cart', function () {
    return view('shop.cart');
})->name('shop.cart');

Route::get('/detail', function () {
    return view('shop.detail');
})->name('shop.detail.basic');

Route::get('/detail-product/{id}', [ProductController::class, 'detail'])->name('shop.detail');

Route::get('/checkout', function () {
    return view('shop.checkout');
})->name('shop.checkout');

Route::get('/search', [SearchController::class, 'index'])->name('search');

// Cart Actions
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/delete-from-cart', [CartController::class, 'deleteFromCart'])->name('cart.delete');

// Authenticated Routes
Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Seller Routes
    Route::prefix('shop')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('seller.index');

        Route::get('/tambah-produk', [ProductController::class, 'create'])->name('seller.create');
        Route::post('/tambah-produk/store', [ProductController::class, 'store'])->name('seller.store');
        Route::put('/update-produk/{product}', [ProductController::class, 'update'])->name('seller.update');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('seller.destroy');
    });
});
