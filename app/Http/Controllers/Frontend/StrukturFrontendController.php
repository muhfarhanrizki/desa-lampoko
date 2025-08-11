<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Struktur;

class StrukturFrontendController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::orderBy('created_at')->get();

        // Gabung Kepala Desa, Sekretaris, dan Staff
        // Kepala Desa, Sekretaris, dan Staff
        $kepalaSekretarisStaff = $strukturs->filter(function ($s) {
            return str_contains(strtolower($s->jabatan), 'kepala desa') ||
                str_contains(strtolower($s->jabatan), 'sekretaris') ||
                str_contains(strtolower($s->jabatan), 'staff');
        });

        // Kasi-kasi (jabatan mengandung kata "Kasi" atau "Kaur")
        $kasi = $strukturs->filter(function ($s) {
            return str_contains(strtolower($s->jabatan), 'kasi') ||
                str_contains(strtolower($s->jabatan), 'kaur');
        });

        // Kepala Dusun (jabatan mengandung kata "dusun", case insensitive)
        $kepalaDusun = $strukturs->filter(function ($s) {
            return str_contains(($s->jabatan), 'Dusun');
        });

        return view('frontend.profil.struktur', compact('kepalaSekretarisStaff', 'kasi', 'kepalaDusun',));
    }
}


