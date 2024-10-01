<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPelatihController extends Controller
{
    public function Data_Pelatih()
    {
        return view('Admin/DataPelatih', [
        ]);
    }
}
