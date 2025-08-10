<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Struktur extends Model
{
    protected $fillable = ['nama', 'slug', 'jabatan', 'gambar'];

    protected static function booted()
    {
        static::creating(function ($struktur) {
            $struktur->slug = Str::slug($struktur->nama);
        });

        static::updating(function ($struktur) {
            $struktur->slug = Str::slug($struktur->nama);
        });
    }
}
