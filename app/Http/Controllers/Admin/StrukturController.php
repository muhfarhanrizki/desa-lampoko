<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.struktur.index', compact('strukturs'));
    }

    public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/struktur'), $fileName);
            $validated['gambar'] = $fileName;
        }

        // Slug unik
        $slug = Str::slug($validated['nama']);
        $originalSlug = $slug;
        $counter = 1;

        while (Struktur::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;

        Struktur::create($validated);

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil ditambahkan.');
    }

    public function edit($slug)
    {
        $struktur = Struktur::where('slug', $slug)->firstOrFail();
        return view('admin.struktur.edit', compact('struktur'));
    }

    public function update(Request $request, $slug)
    {
        $struktur = Struktur::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ganti gambar jika upload baru
        if ($request->hasFile('gambar')) {
            if ($struktur->gambar && file_exists(public_path('uploads/struktur/' . $struktur->gambar))) {
                unlink(public_path('uploads/struktur/' . $struktur->gambar));
            }

            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/struktur'), $fileName);
            $validated['gambar'] = $fileName;
        } else {
            $validated['gambar'] = $struktur->gambar;
        }

        // Slug unik jika nama berubah
        if ($struktur->nama !== $validated['nama']) {
            $newSlug = Str::slug($validated['nama']);
            $originalSlug = $newSlug;
            $counter = 1;

            while (Struktur::where('slug', $newSlug)->where('id', '!=', $struktur->id)->exists()) {
                $newSlug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $validated['slug'] = $newSlug;
        } else {
            $validated['slug'] = $struktur->slug;
        }

        $struktur->update($validated);

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $struktur = Struktur::where('slug', $slug)->firstOrFail();

        if ($struktur->gambar && file_exists(public_path('uploads/struktur/' . $struktur->gambar))) {
            unlink(public_path('uploads/struktur/' . $struktur->gambar));
        }

        $struktur->delete();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil dihapus.');
    }
}
