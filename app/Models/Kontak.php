<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'email',
        'telepon',
        'alamat',
    ];

        public static function boot()   
        {
        parent::boot();

        static::creating(function ($kontak) {
            $kontak->slug = Str::slug($kontak->nama);
        });

        static::updating(function ($kontak) {
            $kontak->slug = Str::slug($kontak->nama);
        });
    }
}
