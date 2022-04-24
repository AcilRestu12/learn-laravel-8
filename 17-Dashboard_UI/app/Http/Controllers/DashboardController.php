<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Method untuk memanggil file view dashboard/index.blade.php
    public function index() {
        return view('dashboard.index');
    }
}
