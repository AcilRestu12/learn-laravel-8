<?php

use Illuminate\Support\Facades\Route;

// Memanggil model Post.php
use App\Models\Post;

// Memanggil controller PostController.php
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route untuk halaman home
Route::get('/', function () {
    return view('home', [           // Akan memanggil file view home.blade.php di folder resources/views
        "title" => 'Home'           // Akan mengirimkan data ke file view dan disimpan sebagai variabel title
    ]); 
});


// Route untuk halaman about
Route::get('/about', function () {
    return view('about', [          // Akan memanggil file view about.blade.php di folder resources/views
        "title" => 'About',                         // Akan mengirimkan data ke file view dan disimpan sebagai variabel title
        "name" => "Arieska Restu",                  // Akan mengirimkan data ke file view dan disimpan sebagai variabel name
        "email" => "arieskarestu214@gmail.com",     // Akan mengirimkan data ke file view dan disimpan sebagai variabel email
        "image" => 'ice.jpg'                        // Akan mengirimkan data ke file view dan disimpan sebagai variabel image
    ]);           
});


// Memanggil method index di controller PostController apabila url-nya /posts
Route::get('/posts', [PostController::class, 'index']);


// Memanggil method show di controller PostController apabila url-nya /posts/slug dan mengirimkan satu instance penuh dari salah satu post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

