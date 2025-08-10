<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformasiUmum;
use Illuminate\Http\Request;

class InformasiUmumController extends Controller
{
    public function index()
{
    $informasi = InformasiUmum::first();

    // Kalau belum ada data, buat objek kosong supaya view tidak error
    if (!$informasi) {
        $informasi = new InformasiUmum([
            'jumlah_penduduk' => 0,
            'jumlah_keluarga' => 0,
            'jumlah_laki_laki' => 0,
            'jumlah_perempuan' => 0,
        ]);
    }

    return view('admin.informasi.index', compact('informasi'));
}


public function edit()
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

    return view('admin.informasi.edit', compact('informasi'));
}


    public function update(Request $request)
    {
        $request->validate([
            'jumlah_penduduk' => 'required|integer|min:0',
            'jumlah_keluarga' => 'required|integer|min:0',
            'jumlah_laki_laki' => 'required|integer|min:0',
            'jumlah_perempuan' => 'required|integer|min:0',
        ]);

        $informasi = InformasiUmum::first();

        if (!$informasi) {
            $informasi = new InformasiUmum();
        }

        $informasi->jumlah_penduduk = $request->jumlah_penduduk;
        $informasi->jumlah_keluarga = $request->jumlah_keluarga;
        $informasi->jumlah_laki_laki = $request->jumlah_laki_laki;
        $informasi->jumlah_perempuan = $request->jumlah_perempuan;
        $informasi->save();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbarui.');
    }
}
