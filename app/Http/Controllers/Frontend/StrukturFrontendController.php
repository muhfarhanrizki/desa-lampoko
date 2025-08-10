<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Struktur;

class StrukturFrontendController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::orderBy('created_at')->get();
        return view('frontend.profil.struktur', compact('strukturs'));
    }
}
