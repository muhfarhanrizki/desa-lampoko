<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.kontak.index', compact('kontaks'));
    }

    public function create()
    {
        return view('admin.kontak.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        $slug = Str::slug($validated['nama']);
        $count = Kontak::where('slug', 'like', "$slug%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;

        Kontak::create($validated);

        return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil ditambahkan.');
    }

    public function edit($slug)
    {
        $kontak = Kontak::where('slug', $slug)->firstOrFail();
        return view('admin.kontak.edit', compact('kontak'));
    }

    public function update(Request $request, $slug)
    {
        $kontak = Kontak::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        if ($kontak->nama !== $validated['nama']) {
            $newSlug = Str::slug($validated['nama']);
            $count = Kontak::where('slug', 'like', "$newSlug%")->where('id', '!=', $kontak->id)->count();
            if ($count > 0) {
                $newSlug .= '-' . ($count + 1);
            }
            $validated['slug'] = $newSlug;
        } else {
            $validated['slug'] = $kontak->slug;
        }

        $kontak->update($validated);

        return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $kontak = Kontak::where('slug', $slug)->firstOrFail();
        $kontak->delete();

        return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil dihapus.');
    }
}
