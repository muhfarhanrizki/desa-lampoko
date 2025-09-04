<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'email',
        'telepon',
        'kategori',
        'alamat',
        'judul',
        'deskripsi',
        'gambar',
        'slug',
        'status',
    ];
}
