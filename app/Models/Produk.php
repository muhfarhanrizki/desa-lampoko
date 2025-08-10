<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'penjual',
        'slug',
        'deskripsi',
        'kontak',
        'alamat',
        'harga',
        'gambar',
        'status',  

    ];

        public static function boot()   
        {
        parent::boot();

        static::creating(function ($produk) {
            $produk->slug = Str::slug($produk->nama);
        });

        static::updating(function ($produk) {
            $produk->slug = Str::slug($produk->nama);
        });
    }
}
