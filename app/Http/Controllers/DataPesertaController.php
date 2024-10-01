<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function Data_Peserta()
    {
        return view('Admin/DataPeserta', [
        ]);
    }
}
