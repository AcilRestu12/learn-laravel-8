<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');            // Akan memanggil file view home.blade.php di folder resources/views
});

Route::get('/about', function () {
    return view('about', [          // Akan memanggil file view about.blade.php di folder resources/views
        "name" => "Arieska Restu",                  // Akan mengirimkan data ke file view dan disimpan sebagai variabel name
        "email" => "arieskarestu214@gmail.com",     // Akan mengirimkan data ke file view dan disimpan sebagai variabel email
        "image" => 'ice.jpg'                        // Akan mengirimkan data ke file view dan disimpan sebagai variabel image
    ]);           
});

Route::get('/posts', function () {
    return view('posts');           // Akan memanggil file view posts.blade.php di folder resources/views
});


