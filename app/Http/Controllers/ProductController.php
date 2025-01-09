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

    public function list(Request $request)
    {
        $products = Product::query(); // Start with a query builder
        $kategoris = Kategori::all(); // Fetch all categories for display

        // Filter by category from the navbar
        if ($request->kategoris) {
            $products->where('kategoris_id', $request->kategoris);
        }

        // Fetch the filtered and paginated products
        $products = $products->paginate(12);

        return view('shop.list', compact('kategoris', 'products'));
    }

    public function detail(Request $request, $id)
    {
        $products = Product::findOrFail($id);

        return view('shop.detail', compact('products'));
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
