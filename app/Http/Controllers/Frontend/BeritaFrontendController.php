<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaFrontendController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        $beritas = Berita::query();

        if ($query) {
            $beritas->where('judul', 'like', "%{$query}%")
                    ->orWhere('isi', 'like', "%{$query}%");
        }

        $beritas = $beritas->latest()->paginate(9);
        $beritas->appends(['q' => $query]);

        return view('frontend.informasi.berita.index', compact('beritas'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        $relatedBeritas = Berita::where('id', '!=', $berita->id)
            ->latest()
            ->take(5)
            ->get();

        return view('frontend.informasi.berita.show', compact('berita', 'relatedBeritas'));
    }
}
