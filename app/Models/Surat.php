<?php

// app/Models/Surat.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Surat extends Model
{
    protected $fillable = ['nama', 'slug', 'link', 'hasil',];

    // Auto generate slug saat simpan
    protected static function booted() {
        static::creating(function ($surat) {
            $surat->slug = Str::slug($surat->nama);
        });
        static::updating(function ($surat) {
            $surat->slug = Str::slug($surat->nama);
        });
    }
}
