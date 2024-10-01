<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function Kursus()
    {
        return view('guest/Kursus', [
        ]);
    }
    public function Kursus_Modul()
    {
        return view('guest/KursusModul', [
        ]);
    }
    public function Kursus_Materi()
    {
        return view('guest/KursusMateri', [
        ]);
    }
}
