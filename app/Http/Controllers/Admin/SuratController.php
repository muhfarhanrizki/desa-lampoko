<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuratController extends Controller
{
    public function index()
    {
        // Pagination 5 data per halaman, terbaru dulu
        $surats = Surat::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.surat.index', compact('surats'));
    }

    public function create()
    {
        return view('admin.surat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'link' => 'required|url',
            'hasil' => 'nullable|url',
        ]);

        $slug = Str::slug($validated['nama']);
        $count = Surat::where('slug', 'like', "$slug%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;

        Surat::create($validated);

        return redirect()->route('surat.index')->with('success', 'Surat berhasil ditambahkan!');
    }

    public function edit($slug)
    {
        $surat = Surat::where('slug', $slug)->firstOrFail();
        return view('admin.surat.edit', compact('surat'));
    }

    public function update(Request $request, $slug)
    {
        $surat = Surat::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'link' => 'required|url',
            'hasil' => 'nullable|url',
        ]);

        if ($surat->nama !== $validated['nama']) {
            $newSlug = Str::slug($validated['nama']);
            $count = Surat::where('slug', 'like', "$newSlug%")
                ->where('id', '!=', $surat->id)
                ->count();
            if ($count > 0) {
                $newSlug .= '-' . ($count + 1);
            }
            $validated['slug'] = $newSlug;
        } else {
            $validated['slug'] = $surat->slug;
        }

        $surat->update($validated);

        return redirect()->route('surat.index')->with('success', 'Surat berhasil diupdate!');
    }

    public function destroy($slug)
    {
        $surat = Surat::where('slug', $slug)->firstOrFail();
        $surat->delete();

        return redirect()->route('surat.index')->with('success', 'Surat berhasil dihapus!');
    }
}
