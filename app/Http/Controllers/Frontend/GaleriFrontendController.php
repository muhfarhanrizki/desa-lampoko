<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Galeri;
use App\Http\Controllers\Controller;

class GaleriFrontendController extends Controller
{
    public function index()
    {
        $galeris = Galeri::orderBy('created_at', 'desc')->get();
        return view('frontend.informasi.galeri', compact('galeris'));
    }
}
