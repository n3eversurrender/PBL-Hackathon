<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPembayaranController extends Controller
{
    public function Data_Pembayaran()
    {
        return view('Admin/DataPembayaran', [
        ]);
    }
}
