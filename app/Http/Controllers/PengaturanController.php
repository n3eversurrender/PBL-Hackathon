<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function Pengaturan()
    {
        return view('guest/Pengaturan', [
        ]);
    }
}
