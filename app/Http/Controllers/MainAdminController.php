<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainAdminController extends Controller
{
    public function Main_Admin()
    {
        return view('layouts/mainAdmin', [
        ]);
    }
}
