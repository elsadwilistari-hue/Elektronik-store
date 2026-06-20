<?php

namespace App\Http\Controllers;

use App\Models\Products; // <-- SUDAH DIUBAH: Menggunakan 'Products' sesuai nama file modelmu
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengubah Product:: menjadi Products::
        $products = Products::all(); 
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Menambahkan validasi agar input aman
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori'    => 'required|string',
            'merek'       => 'required|string',
            'harga'       => 'required|numeric',
            'stok'        => 'required|integer',
        ]);

        // Mengubah Product:: menjadi Products::
        Products::create([
            'nama_produk' => $request->nama_produk,
            'kategori'    => $request->kategori,
            'merek'       => $request->merek,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // Mengubah Product:: menjadi Products::
        $product = Products::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        // Mengubah Product:: menjadi Products::
        $product = Products::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori'    => 'required|string',
            'merek'       => 'required|string',
            'harga'       => 'required|numeric',
            'stok'        => 'required|integer',
        ]);

        $product->update([
            'nama_produk' => $request->nama_produk,
            'kategori'    => $request->kategori,
            'merek'       => $request->merek,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        // Mengubah Product:: menjadi Products::
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}