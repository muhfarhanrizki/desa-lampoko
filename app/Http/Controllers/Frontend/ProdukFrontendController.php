<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukFrontendController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        $produks = Produk::where('status', 'approved');

        if ($query) {
            $produks->where(function($q) use ($query) {
                $q->where('nama', 'like', "%{$query}%")
                  ->orWhere('penjual', 'like', "%{$query}%")
                  ->orWhere('deskripsi', 'like', "%{$query}%");
            });
        }

        $produks = $produks->latest()->paginate(9);
        $produks->appends(['q' => $query]);

        return view('frontend.produk.index', compact('produks'));
    }

    public function show($slug)
    {
        $produk = Produk::where('slug', $slug)
                        ->where('status', 'approved')
                        ->firstOrFail();

        $relatedProduks = Produk::where('status', 'approved')
                                ->where('id', '!=', $produk->id)
                                ->latest()
                                ->take(5)
                                ->get();

        return view('frontend.produk.show', compact('produk', 'relatedProduks'));
    }

    public function create()
    {
        return view('frontend.produk.daftar');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'penjual'   => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'alamat'    => 'nullable|string|max:255',
            'kontak'    => 'nullable|string|max:100',
            'harga'     => 'nullable|numeric',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $fileName);
            $validated['gambar'] = $fileName;
        }

        $slug = Str::slug($validated['nama']);
        $count = Produk::where('slug', 'like', "$slug%")->count();
        $validated['slug'] = $count ? "$slug-" . ($count + 1) : $slug;

        $validated['status'] = 'pending';

        Produk::create($validated);

        return redirect()->route('produk.frontend.create')->with('success', 'Terima kasih! Produk kamu sudah terdaftar. Silahkan tunggu proses verifikasi.');
    }
}
