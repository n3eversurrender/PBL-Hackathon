<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanAdminController extends Controller
{
    public function Pesan_Admin()
    {
        return view('Admin/PesanAdmin', [
        ]);
    }
}
