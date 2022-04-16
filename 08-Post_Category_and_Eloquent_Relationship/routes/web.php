<?php

use Illuminate\Support\Facades\Route;

// Memanggil model Post.php
use App\Models\Post;

// Memanggil controller PostController.php
use App\Http\Controllers\PostController;

// Memanggil model Category
use App\Models\Category;

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


// Route untuk halaman categories apabila url-nya /categories
Route::get('/categories', function (Category $category) {

    // Akan memanggil file view category.blade.php di folder resources/views
    return view('categories', [           
        "title" => 'Post Categories',           // Mengirimkan data title ke file view dan disimpan sebagai variabel title
        'categories' => Category::all()         // Mengirimkan semua data post dari setiap category dan disimpan sebagai variabel categories
    ]); 
    
});


// Route untuk halaman category apabila url-nya /categories/slug dan mengirimkan satu instance penuh dari salah satu category
Route::get('/categories/{category:slug}', function (Category $category) {

    // Akan memanggil file view category.blade.php di folder resources/views
    return view('category', [           
        "title" => $category->name,             // Mengirimkan data title ke file view dan disimpan sebagai variabel title
        'posts' => $category->posts,            // Mengirimkan semua data post yg memiliki category yg sama seperti di url dan disimpan sebagai variabel posts  
        'category' => $category->name           // Mengirimkan data nama dari category dan disimpan sebagai variabel category
    ]); 
    
});


