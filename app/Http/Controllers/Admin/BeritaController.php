<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.berita.index', compact('beritas'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/berita'), $fileName);
            $validated['gambar'] = $fileName;
        }

        // Buat slug unik
        $slug = Str::slug($validated['judul']);
        $count = Berita::where('slug', 'like', "$slug%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;

        Berita::create($validated);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('admin.berita.edit', compact('berita'));
    }

    // Menyimpan perubahan berita
    public function update(Request $request, $slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ganti gambar jika ada upload baru
        if ($request->hasFile('gambar')) {
            if ($berita->gambar && file_exists(public_path('uploads/berita/' . $berita->gambar))) {
                unlink(public_path('uploads/berita/' . $berita->gambar));
            }

            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/berita'), $fileName);
            $validated['gambar'] = $fileName;
        } else {
            $validated['gambar'] = $berita->gambar;
        }

        // Update slug hanya jika judul berubah
        if ($berita->judul !== $validated['judul']) {
            $newSlug = Str::slug($validated['judul']);
            $count = Berita::where('slug', 'like', "$newSlug%")->where('id', '!=', $berita->id)->count();
            if ($count > 0) {
                $newSlug .= '-' . ($count + 1);
            }
            $validated['slug'] = $newSlug;
        } else {
            $validated['slug'] = $berita->slug;
        }

        $berita->update($validated);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Menghapus berita
    public function destroy($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        if ($berita->gambar && file_exists(public_path('uploads/berita/' . $berita->gambar))) {
            unlink(public_path('uploads/berita/' . $berita->gambar));
        }   

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
