<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// rute global start

// Route::get('/', function () {
//     return Auth::check() ? redirect()->route('seller.index') : view('index');
// })->name('homePage');

Route::get('/', 'ShopController@index')->name('homePage');

Route::get('/list', function () {
    return view('shop.list');
});

Route::get('/search', [SearchController::class, 'index'])->name('search');

// rute global end


// rute auth start

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('shop')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('index');

        Route::get('/', [ProductController::class, 'index'])->name('seller.index');

        Route::get('/tambah-produk', [ProductController::class, 'create'])->name('seller.create');
        Route::post('/tambah-produk/store', [ProductController::class, 'store'])->name('seller.store');
        Route::put('/update-produk/{product}', [ProductController::class, 'update'])->name('seller.update');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('seller.destroy');
    });
});

// rute auth start