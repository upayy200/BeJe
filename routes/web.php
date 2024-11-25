<?php

use App\Http\Controllers\Penjualan\ProductController;
use App\Http\Controllers\Penjualan\ShopController;
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

Route::get('/', 'ShopController@index')->name('homePage');

Route::get('/home', function () {
    return view('home');
});

Route::get('/search', [SearchController::class, 'index'])->name('search');

Auth::routes();

// rute global start
//
// rute global end

// rute auth start
Route::middleware(['auth'])->group(function () {
    Route::prefix('shop')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('shop.home');
    });
});
// rute auth start