<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function kursus()
    {
        return view('guest/Kursus', [
        ]);
    }
    public function kursusmodul()
    {
        return view('guest/KursusModul', [
        ]);
    }
    public function kursusmateri()
    {
        return view('guest/KursusMateri', [
        ]);
    }
}
