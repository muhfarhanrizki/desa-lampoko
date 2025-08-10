<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function index()
    {
        // Tampil semua produk dengan pagination
        $produks = Produk::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'penjual'   => 'required|string|max:255', // ✅ tambah validasi penjual
            'deskripsi' => 'nullable|string',
            'alamat'    => 'nullable|string|max:255',
            'kontak'    => 'nullable|string|max:100',
            'harga'     => 'nullable|numeric',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $fileName);
            $validated['gambar'] = $fileName;
        }

        // Generate slug unik
        $slug = Str::slug($validated['nama']);
        $count = Produk::where('slug', 'like', "$slug%")->count();
        $validated['slug'] = $count ? "$slug-" . ($count + 1) : $slug;

        // Set status langsung approved untuk produk yang dibuat admin
        $validated['status'] = 'approved';

        Produk::create($validated);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan dan langsung aktif.');
    }

    public function edit($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();

        // Validasi input termasuk status jika mau admin bisa ubah status manual
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'penjual'   => 'required|string|max:255', // ✅ tambah validasi penjual
            'deskripsi' => 'nullable|string',
            'alamat'    => 'nullable|string|max:255',
            'kontak'    => 'nullable|string|max:100',
            'harga'     => 'nullable|numeric',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'    => 'required|in:pending,approved', // wajib ada validasi status
        ]);

        // Upload gambar baru
        if ($request->hasFile('gambar')) {
            if ($produk->gambar && file_exists(public_path('uploads/produk/' . $produk->gambar))) {
                unlink(public_path('uploads/produk/' . $produk->gambar));
            }

            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $fileName);
            $validated['gambar'] = $fileName;
        } else {
            $validated['gambar'] = $produk->gambar;
        }

        // Update slug jika nama berubah
        if ($produk->nama !== $validated['nama']) {
            $newSlug = Str::slug($validated['nama']);
            $count = Produk::where('slug', 'like', "$newSlug%")->where('id', '!=', $produk->id)->count();
            $validated['slug'] = $count ? "$newSlug-" . ($count + 1) : $newSlug;
        } else {
            $validated['slug'] = $produk->slug;
        }

        $produk->update($validated);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();

        if ($produk->gambar && file_exists(public_path('uploads/produk/' . $produk->gambar))) {
            unlink(public_path('uploads/produk/' . $produk->gambar));
        }

        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
