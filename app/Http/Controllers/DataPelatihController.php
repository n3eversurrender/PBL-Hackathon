<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPelatihController extends Controller
{
    public function dataPelatih()
    {
        return view('Admin/DataPelatih', [
        ]);
    }
}
