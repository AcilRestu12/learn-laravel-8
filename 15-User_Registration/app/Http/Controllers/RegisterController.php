<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Method untuk memanggil file view register/index.blade.php
    public function index() {
        return view('register.index', [
            'title' => 'Register',         // Akan mengirimkan data title ke file view dan disimpan sebagai variabel title
            'active' => 'register'         // Akan mengirimkan active ke file view dan disimpan sebagai variabel active
        ]);
    }

    
}
