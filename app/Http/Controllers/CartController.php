<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function __construct()
    {
        // Inisialisasi cart jika belum ada
        if (!session()->has('cart')) {
            session()->put('cart', []);
        }
    }

    public function beli($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1,
                "image" => $product->image, // Tambahkan gambar jika ada
                "category" => $product->category // Tambahkan kategori jika ada
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.keranjang');
    }

    public function keranjang()
    {
        $cart = session()->get('cart', []); // Ambil cart dari sesi
        return view('keranjang', compact('cart')); // Kirim cart ke view
    }
}