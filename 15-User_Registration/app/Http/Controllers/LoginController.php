<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Method untuk memanggil file view login/index.blade.php
    public function index() {
        return view('login.index', [
            'title' => 'Login',         // Akan mengirimkan data title ke file view dan disimpan sebagai variabel title
            'active' => 'login'         // Akan mengirimkan active ke file view dan disimpan sebagai variabel active
        ]);
    }
}
