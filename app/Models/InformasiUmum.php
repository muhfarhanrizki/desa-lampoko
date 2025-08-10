<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiUmum extends Model
{
    protected $table = 'informasi_umum';

    protected $fillable = [
        'jumlah_penduduk',
        'jumlah_keluarga',
        'jumlah_laki_laki',
        'jumlah_perempuan',
    ];
}

