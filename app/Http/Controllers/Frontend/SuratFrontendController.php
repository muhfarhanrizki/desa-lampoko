<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Surat;

class SuratFrontendController extends Controller
{
    public function index()
    {
        $surats = Surat::orderBy('created_at', 'desc')->get(); 
        return view('frontend.administrasi.surat', compact('surats'));
    }
}

