<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Galeri;
use App\Models\InformasiUmum;
use App\Models\Artikel;
use App\Models\Pengumuman; // 👈 jangan lupa import
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
{
    $informasi = InformasiUmum::first();

    if (!$informasi) {
        $informasi = new InformasiUmum([
            'jumlah_penduduk' => 0,
            'jumlah_keluarga' => 0,
            'jumlah_laki_laki' => 0,
            'jumlah_perempuan' => 0,
        ]);
    }

    $pengumuman = \App\Models\Pengumuman::where('status', true)
        ->latest('tanggal')
        ->take(3)
        ->get();

    return view('frontend.beranda', [
        'beritas'     => Berita::latest()->take(3)->get(),
        'produks'     => Produk::where('status', 'approved')->latest()->take(3)->get(),
        'artikels'    => Artikel::latest()->take(3)->get(),
        'galeris'     => Galeri::latest()->take(6)->get(),
        'informasi'   => $informasi,
        'pengumuman'  => $pengumuman, // ✅ lempar ke view
    ]);
}

}
