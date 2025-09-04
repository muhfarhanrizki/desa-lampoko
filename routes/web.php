<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\Admin\SuratController;
use App\Http\Controllers\Admin\InformasiUmumController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Frontend\StrukturFrontendController;
use App\Http\Controllers\Frontend\BeritaFrontendController;
use App\Http\Controllers\Frontend\ArtikelFrontendController;
use App\Http\Controllers\Frontend\GaleriFrontendController;
use App\Http\Controllers\Frontend\SuratFrontendController;
use App\Http\Controllers\Frontend\ProdukFrontendController;
use App\Http\Controllers\Frontend\PengaduanFrontendController;
use Illuminate\Support\Facades\Route;

// Redirect halaman utama ke beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Profil Desa
Route::get('/profil/visi-misi', fn() => view('frontend.profil.visi-misi'))->name('profil.visi-misi');
Route::get('/profil/sejarah', fn() => view('frontend.profil.sejarah'))->name('profil.sejarah');
Route::get('/profil/peta', fn() => view('frontend.profil.peta'))->name('profil.peta');
Route::get('/profil-desa/struktur-organisasi', [StrukturFrontendController::class, 'index'])->name('struktur.frontend');
Route::get('/profil/potensi', fn() => view('frontend.profil.potensi'))->name('profil.potensi');
Route::get('/profil/fasilitas', fn() => view('frontend.profil.fasilitas'))->name('profil.fasilitas');

// Lembaga
Route::get('/lembaga/bpd', fn() => view('frontend.lembaga.bpd'))->name('lembaga.bpd');
Route::get('/lembaga/lpm', fn() => view('frontend.lembaga.lpm'))->name('lembaga.lpm');
Route::get('/lembaga/pkk', fn() => view('frontend.lembaga.pkk'))->name('lembaga.pkk');

// Informasi
// Berita
Route::prefix('berita/informasi')->name('berita.informasi.')->group(function () {
    Route::get('/', [BeritaFrontendController::class, 'index'])->name('index');
    Route::get('/{slug}', [BeritaFrontendController::class, 'show'])->name('show');
});
// Artikel
Route::prefix('artikel/informasi')->name('artikel.informasi.')->group(function () {
    Route::get('/', [ArtikelFrontendController::class, 'index'])->name('index');
    Route::get('/{slug}', [ArtikelFrontendController::class, 'show'])->name('show');
});
// Galeri
Route::get('/informasi/galeri', [GaleriFrontendController::class, 'index'])->name('informasi.galeri');
// Data Desa
Route::get('/informasi/data', fn() => view('frontend.informasi.data'))->name('informasi.data');

// Pengaduan
Route::post('/pengaduan', [PengaduanFrontendController::class, 'store'])->name('frontend.pengaduan.store');

// Administrasi / Surat
Route::get('/administrasi/surat', [SuratFrontendController::class, 'index'])->name('administrasi.surat');

// Produk
Route::prefix('produk')->name('produk.frontend.')->group(function () {
    Route::get('/', [ProdukFrontendController::class, 'index'])->name('index');
    Route::get('/daftar', [ProdukFrontendController::class, 'create'])->name('create');
    Route::post('/daftar', [ProdukFrontendController::class, 'store'])->name('store');
    Route::get('/{slug}', [ProdukFrontendController::class, 'show'])->name('show');
});

// Dashboard & Auth
Route::middleware(['auth', 'verified'])->group(function () {

    // Redirect /dashboard ke home
    Route::get('/dashboard', fn() => redirect('/dashboard/home'))->name('dashboard');

    // Edit profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard routes
    Route::prefix('dashboard')->group(function () {

        Route::get('/home', fn() => view('dashboard'))->name('dashboard.home');

        Route::resource('berita', BeritaController::class)->parameters(['berita' => 'slug']);
        Route::resource('galeri', GaleriController::class)->parameters(['galeri' => 'slug']);
        Route::resource('artikel', ArtikelController::class)->parameters(['artikel' => 'slug']);
        Route::resource('struktur', StrukturController::class)->parameters(['struktur' => 'slug']);
        Route::resource('pengaduan', PengaduanController::class)->parameters(['pengaduan' => 'slug']);
        Route::resource('surat', SuratController::class)->parameters(['surat' => 'slug']);
        Route::resource('produk', ProdukController::class)->parameters(['produk' => 'slug']);
        Route::resource('pengumuman', PengumumanController::class)->parameters(['pengumuman' => 'slug']);

        // Update status pengaduan pakai slug
        Route::put('pengaduan/{slug}/status', [PengaduanController::class, 'updateStatus'])
            ->name('pengaduan.updateStatus');

        // Informasi umum
        Route::get('informasi', [InformasiUmumController::class, 'index'])->name('informasi.index');
        Route::get('informasi/edit', [InformasiUmumController::class, 'edit'])->name('informasi.edit');
        Route::put('informasi', [InformasiUmumController::class, 'update'])->name('informasi.update');
    });

});

require __DIR__.'/auth.php';
