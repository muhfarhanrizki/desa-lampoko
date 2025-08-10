<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(5);
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'judul'   => 'required|string|max:255',
        'tanggal' => 'required|date',
        'lokasi'  => 'required|string|max:255',
        'isi'     => 'nullable|string',
        'status'  => 'nullable|boolean',
    ]);

    $slug = Str::slug($validated['judul']);
    $count = Pengumuman::where('slug', 'like', "$slug%")->count();
    if ($count > 0) {
        $slug .= '-' . ($count + 1);
    }

    $validated['slug'] = $slug;
    $validated['status'] = $validated['status'] ?? false;

    Pengumuman::create($validated);

    return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan.');
}

    public function edit($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $slug)
{
    $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();

    $validated = $request->validate([
        'judul'   => 'required|string|max:255',
        'tanggal' => 'required|date',
        'lokasi'  => 'required|string|max:255',
        'isi'     => 'nullable|string',
        'status'  => 'nullable|boolean',
    ]);

    if ($pengumuman->judul !== $validated['judul']) {
        $newSlug = Str::slug($validated['judul']);
        $count = Pengumuman::where('slug', 'like', "$newSlug%")->where('id', '!=', $pengumuman->id)->count();
        if ($count > 0) {
            $newSlug .= '-' . ($count + 1);
        }
        $validated['slug'] = $newSlug;
    } else {
        $validated['slug'] = $pengumuman->slug;
    }

    $validated['status'] = $validated['status'] ?? false;

    $pengumuman->update($validated);

    return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui.');
}

    public function destroy($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}

