<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelFrontendController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        $artikels = Artikel::query();

        if ($query) {
            $artikels->where('judul', 'like', "%{$query}%")
                     ->orWhere('isi', 'like', "%{$query}%");
        }

        $artikels = $artikels->latest()->paginate(9);
        $artikels->appends(['q' => $query]);

        return view('frontend.informasi.artikel.index', compact('artikels'));
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        $relatedArtikels = Artikel::where('id', '!=', $artikel->id)
            ->latest()
            ->take(5)
            ->get();

        return view('frontend.informasi.artikel.show', compact('artikel', 'relatedArtikels'));
    }
}

