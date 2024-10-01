<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function Pesan()
    {
        return view('guest/Pesan', [
        ]);
    }
}
