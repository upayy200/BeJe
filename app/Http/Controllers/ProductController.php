<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'integer',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'rating' => 'nullable|numeric',
            'kategoris_id' => 'required|exists:kategoris,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['seller_id'] = Auth::id();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('products', 'public');
        }

        Product::create($data);
        return redirect()->route('seller.index')->with('success', 'Produk Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        if ($product->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('seller.index', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if ($product->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('seller.index', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if ($product->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'rating' => 'nullable|numeric',
            'kategoris_id' => 'required|exists:kategoris,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['seller_id'] = Auth::id();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('products', 'public');
        }

        $product->update($data);
        return redirect()->route('seller.index')->with('success', 'Produk Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $product->delete();
        return redirect()->route('seller.index')->with('success', 'Produk Berhasil Dihapus.');
    }
}
