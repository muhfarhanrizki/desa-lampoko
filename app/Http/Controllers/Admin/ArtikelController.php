<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    // Menampilkan daftar artikel
    public function index()
    {
        $artikels = Artikel::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.artikel.index', compact('artikels'));
    }

    // Menampilkan form tambah artikel
    public function create()
    {
        return view('admin.artikel.create');
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'   => 'required|string|max:255',
            'penulis' => 'required|string|max:100',
            'isi'     => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/artikel'), $fileName);
            $validated['gambar'] = $fileName;
        }

        // Buat slug unik
        $slug = Str::slug($validated['judul']);
        $count = Artikel::where('slug', 'like', "$slug%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;

        Artikel::create($validated);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    // Menampilkan form edit artikel
    public function edit($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        return view('admin.artikel.edit', compact('artikel'));
    }

    // Menyimpan perubahan artikel
    public function update(Request $request, $slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'judul'   => 'required|string|max:255',
            'penulis' => 'required|string|max:100',
            'isi'     => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            if ($artikel->gambar && file_exists(public_path('uploads/artikel/' . $artikel->gambar))) {
                unlink(public_path('uploads/artikel/' . $artikel->gambar));
            }

            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/artikel'), $fileName);
            $validated['gambar'] = $fileName;
        } else {
            $validated['gambar'] = $artikel->gambar;
        }

        // Update slug jika judul berubah
        if ($artikel->judul !== $validated['judul']) {
            $newSlug = Str::slug($validated['judul']);
            $count = Artikel::where('slug', 'like', "$newSlug%")->where('id', '!=', $artikel->id)->count();
            if ($count > 0) {
                $newSlug .= '-' . ($count + 1);
            }
            $validated['slug'] = $newSlug;
        } else {
            $validated['slug'] = $artikel->slug;
        }

        $artikel->update($validated);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    // Menghapus artikel
    public function destroy($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        if ($artikel->gambar && file_exists(public_path('uploads/artikel/' . $artikel->gambar))) {
            unlink(public_path('uploads/artikel/' . $artikel->gambar));
        }

        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
