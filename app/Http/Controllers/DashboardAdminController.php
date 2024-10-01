<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function Dashboard_Admin()
    {
        return view('Admin/DashboardAdmin', [
        ]);
    }
}
