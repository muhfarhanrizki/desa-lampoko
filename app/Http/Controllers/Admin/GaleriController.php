<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    // Tampilkan daftar galeri
    public function index()
    {
        $galeris = Galeri::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.galeri.index', compact('galeris'));
    }

    // Tampilkan form tambah galeri
    public function create()
    {
        return view('admin.galeri.create');
    }

    // Simpan galeri baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/galeri'), $fileName);
            $validated['gambar'] = $fileName;
        }

        // Buat slug unik
        $slug = Str::slug($validated['judul']);
        $count = Galeri::where('slug', 'like', "$slug%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;

        Galeri::create($validated);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    // Tampilkan form edit
    public function edit($slug)
    {
        $galeri = Galeri::where('slug', $slug)->firstOrFail();
        return view('admin.galeri.edit', compact('galeri'));
    }

    // Simpan perubahan galeri
    public function update(Request $request, $slug)
    {
        $galeri = Galeri::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ganti gambar jika ada upload baru
        if ($request->hasFile('gambar')) {
            if ($galeri->gambar && file_exists(public_path('uploads/galeri/' . $galeri->gambar))) {
                unlink(public_path('uploads/galeri/' . $galeri->gambar));
            }

            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/galeri'), $fileName);
            $validated['gambar'] = $fileName;
        } else {
            $validated['gambar'] = $galeri->gambar;
        }

        // Update slug hanya jika judul berubah
        if ($galeri->judul !== $validated['judul']) {
            $newSlug = Str::slug($validated['judul']);
            $count = Galeri::where('slug', 'like', "$newSlug%")->where('id', '!=', $galeri->id)->count();
            if ($count > 0) {
                $newSlug .= '-' . ($count + 1);
            }
            $validated['slug'] = $newSlug;
        } else {
            $validated['slug'] = $galeri->slug;
        }

        $galeri->update($validated);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    // Hapus galeri
    public function destroy($slug)
    {
        $galeri = Galeri::where('slug', $slug)->firstOrFail();

        if ($galeri->gambar && file_exists(public_path('uploads/galeri/' . $galeri->gambar))) {
            unlink(public_path('uploads/galeri/' . $galeri->gambar));
        }

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
