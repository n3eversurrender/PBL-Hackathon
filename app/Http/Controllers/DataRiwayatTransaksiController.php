<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRiwayatTransaksiController extends Controller
{
    public function Data_Riwayat_Transaksi()
    {
        return view('Admin/DataRiwayatTransaksi', [
        ]);
    }
}
