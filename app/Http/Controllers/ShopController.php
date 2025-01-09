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
    public function index(Request $request)
    {
        $products = Product::latest()->take(4)->get();

        $categories = Kategori::all();

        // Filter by category
        if ($request->kategoris) {
            $products->where('kategoris_id', '=', $request->kategoris);
        }

        if (Auth::check() && Auth::user()->role == 'seller') {
            $products = Product::with(['seller', 'kategori'])
                ->where('seller_id', Auth::id())
                ->paginate(15);
            return view('seller.index', compact('categories', 'products'));
        } elseif (Auth::check() && Auth::user()->role == 'buyer') {
            return view('shop.home', compact('categories', 'products'));;
        } else {
            return view('index', compact('categories', 'products'));;
        }
    }
}
