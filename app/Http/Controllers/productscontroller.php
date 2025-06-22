<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class productscontroller extends Controller
{
    //
    public function index() : \Illuminate\View\View {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    //method create
    public function create (): View {
        return view('products.create');
    }

    // method untuk simpan data ke table data
    public function store(Request $request): RedirectResponse{
        //code validasi inputan
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);
        //uoload image
        $image = $request->file('image');
        $image->storeAs('products', $image->hashName());

        //kirimkan data input ke table database
        Product::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index')->with(['success' => "Data Berhasil Disimpan"]);
    }

    //method untuk detail product
    public function show(string $id): View {
        //ambil id product
        $product = Product::findOrFail($id);
        //render view
        return view('products.show', compact('product'));
    }

    //method edit
    public function edit(string $id): View {
        //ambil id product
        $product = Product::findOrFail($id);
        //render view
        return view('products.edit', compact('product'));
    }

    //method update
    public function update(Request $request, string $id): RedirectResponse {
        //code validasi inputan
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);
        //ambil id product
        $product = Product::findOrFail($id);
        //jika ada gambar baru
        if ($request->file('image')) {
            //hapus gambar lama
            Storage::delete('products/'.$product->image);
            //upload gambar baru
            $image = $request->file('image');
            $image->storeAs('products', $image->hashName());
            //update data ke database
            $product->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock
            ]);
        } else {
            //update data ke database tanpa mengubah gambar
            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock
            ]);
        }
        return redirect()->route('products.index')->with(['success' => "Data Berhasil Diupdate"]);
    }

    //method delete
    public function destroy ($id): RedirectResponse {
        //ambil id product
        $product = Product::findOrFail($id);
        //hapus gambar
        Storage::delete('products/'.$product->image);
        //hapus data dari database
        $product->delete();
        return redirect()->route('products.index')->with(['success' => "Data Berhasil Dihapus"]);
    }
}
