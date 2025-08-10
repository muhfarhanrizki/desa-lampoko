<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LembagaController extends Controller
{
    public function bpd() {
        return view('frontend.lembaga.bpd');
    }

    public function lpm() {
        return view('frontend.lembaga.lpm');
    }

    public function pkk() {
        return view('frontend.lembaga.pkk');
    }

}

