<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengumuman extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'isi', 'status', 'tanggal', 'lokasi'];

    protected static function booted()
    {
        static::creating(function ($pengumuman) {
            $pengumuman->slug = Str::slug($pengumuman->judul);
        });

        static::updating(function ($pengumuman) {
            $pengumuman->slug = Str::slug($pengumuman->judul);
        });
    }
}


