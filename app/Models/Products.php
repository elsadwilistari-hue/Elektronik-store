<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model // <-- Pastikan namanya 'Products', bukan 'Product'
{
    protected $fillable = [
        'nama_produk', 
        'kategori', 
        'merek', 
        'harga', 
        'stok',
        'gambar',
        'supplier',
        'tanggal_masuk'
    ];
}