<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function visiMisi() {
        return view('frontend.profil.visi-misi');
    }

    public function sejarah() {
        return view('frontend.profil.sejarah');
    }

        public function data() {
        return view('frontend.informasi.data');
    }

    public function peta() {
        return view('frontend.profil.peta');
    }

    public function potensi() {
        return view('frontend.profil.potensi');
    }

    public function fasilitas() {
        return view('frontend.profil.fasilitas');
    }
}

