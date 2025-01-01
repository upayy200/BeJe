<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with(['seller', 'kategori'])
            ->where('seller_id', Auth::id())
            ->paginate(15);

        $categories = Kategori::all();

        if (Auth::check() && Auth::user()->role == 'seller') {
            return view('seller.index', compact('categories', 'products'));
        } elseif (Auth::check() && Auth::user()->role == 'buyer') {
            return view('shop.home');
        } else {
            return view('index');
        }
    }
}
