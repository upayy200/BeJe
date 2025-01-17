<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart; // Model untuk tabel cart

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Tambahkan ke keranjang
        Cart::create([
            'user_id' => auth()->id(), // ID pengguna yang sedang login
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
        ]);
        
        return response()->json([
            'success' => true, // Tambahkan flag keberhasilan
            'message' => 'Product added to cart successfully',
            'data' => $request->all()
        ]);
        
    }

    public function deleteFromCart(Request $request)
    {
        $id = $request->id;

        Cart::where('id', $id)->delete();

        return response()->json(['message' => 'Keranjang berhasil dihapus.']);
    }
}
