<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenAkunController extends Controller
{
    public function Daftar()
    {
        return view('guest/Daftar', []);
    }
    public function Masuk()
    {
        return view('guest/Masuk', []);
    }
}
