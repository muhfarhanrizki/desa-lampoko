<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeris';

    protected $fillable = [
        'judul',
        'slug',
        'gambar',
        'deskripsi',
    ];

    // Generate slug otomatis saat membuat atau mengupdate galeri
    public static function boot()
    {
        parent::boot();

        static::creating(function ($galeri) {
            $galeri->slug = Str::slug($galeri->judul);
        });

        static::updating(function ($galeri) {
            $galeri->slug = Str::slug($galeri->judul);
        });
    }
}
