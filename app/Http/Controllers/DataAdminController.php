<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAdminController extends Controller
{
    public function Data_Admin()
    {
        return view('Admin/DataAdmin', [
        ]);
    }
}
