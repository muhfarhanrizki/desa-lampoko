<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Pengaduan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // <- jangan lupa import Str

class PengaduanFrontendController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'telepon' => 'required|string|max:15',
            'kategori' => 'required',
            'alamat' => 'required|string',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except('gambar');

        // generate slug unik dari judul
        $slug = Str::slug($request->judul);

        // pastikan slug unik
        $count = Pengaduan::where('slug', 'like', "{$slug}%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $data['slug'] = $slug;

        // handle upload manual ke public/uploads/pengaduan
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/pengaduan'), $filename);
            $data['gambar'] = 'uploads/pengaduan/' . $filename;
        }

        Pengaduan::create($data);

        return back()->with('success', 'Pengaduan berhasil dikirim!');
    }
}
