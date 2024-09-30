<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('layouts/main', [
        ]);
    }
    public function home()
    {
        return view('guest/Home', [
        ]);
    }

    public function daftarkursus()
    {
        return view('guest/DaftarKursus', [
        ]);
    }
}