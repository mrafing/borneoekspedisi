<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index () {
        return view('layanan',[
            'title' => 'Layanan',
            'active' => 'layanan'
        ]);
    }
}
