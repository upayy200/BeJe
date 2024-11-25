<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Mock data for products
        $products = [
            ['name' => 'Produk A', 'price' => 200000],
            ['name' => 'Produk B', 'price' => 150000],
            ['name' => 'Produk C', 'price' => 300000],
            ['name' => 'Produk D', 'price' => 250000],
        ];

        // Filter products based on the search query
        $filteredProducts = array_filter($products, function($product) use ($query) {
            return stripos($product['name'], $query) !== false; // Case-insensitive search
        });

        return view('search.results', compact('filteredProducts', 'query'));
    }
}