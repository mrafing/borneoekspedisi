<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemitraanController extends Controller
{
    public function index() {
        return view('kemitraan', [
            'title' => 'Kemitraan',
            'active' => 'kemitraan'
        ]);
    }
}
