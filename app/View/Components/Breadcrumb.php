<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Breadcrumb extends Component
{
    public $items;

    public function __construct($items = null)
    {
        $this->items = $items ?? $this->generateBreadcrumb();
    }

    protected function generateBreadcrumb()
    {
        $breadcrumbs = [
            ['label' => 'Beranda', 'url' => route('beranda')],
        ];

        $routeName = Route::currentRouteName();

        switch ($routeName) {
            // Home
            case 'beranda':
                // hanya beranda, tidak perlu tambahan
                break;

            // Produk
            case 'produk.frontend.index':
                $breadcrumbs[] = ['label' => 'Produk', 'url' => null];
                break;

            case 'produk.frontend.show':
                $breadcrumbs[] = ['label' => 'Produk', 'url' => route('produk.frontend.index')];
                $slug = request()->route('slug');
                $produk = \App\Models\Produk::where('slug', $slug)->first();
                $breadcrumbs[] = ['label' => $produk ? $produk->nama : 'Detail Produk', 'url' => null];
                break;

            // Berita
            case 'berita.informasi.index':
                $breadcrumbs[] = ['label' => 'Berita', 'url' => null];
                break;

            case 'berita.informasi.show':
                $breadcrumbs[] = ['label' => 'Berita', 'url' => route('berita.informasi.index')];
                $slug = request()->route('slug');
                $berita = \App\Models\Berita::where('slug', $slug)->first();
                $breadcrumbs[] = ['label' => $berita ? $berita->judul : 'Detail Berita', 'url' => null];
                break;

            // Artikel
            case 'artikel.informasi.index':
                $breadcrumbs[] = ['label' => 'Artikel', 'url' => null];
                break;

            case 'artikel.informasi.show':
                $breadcrumbs[] = ['label' => 'Artikel', 'url' => route('artikel.informasi.index')];
                $slug = request()->route('slug');
                $artikel = \App\Models\Artikel::where('slug', $slug)->first();
                $breadcrumbs[] = ['label' => $artikel ? $artikel->judul : 'Detail Artikel', 'url' => null];
                break;

            // Galeri
            case 'informasi.galeri':
                $breadcrumbs[] = ['label' => 'Galeri', 'url' => null];
                break;

            case 'informasi.galeri':
                $breadcrumbs[] = ['label' => 'Galeri', 'url' => route('informasi.galeri')];
                $slug = request()->route('slug');
                $galeri = \App\Models\Galeri::where('slug', $slug)->first();
                $breadcrumbs[] = ['label' => $galeri ? $galeri->judul : 'Detail Galeri', 'url' => null];
                break;

            // Tambah case lain sesuai kebutuhan lo...

            default:
                // fallback, cuma beranda
                break;
        }

        return $breadcrumbs;
    }

    public function render()
    {
        return view('components.breadcrumb');
    }
}
