<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Memanggil model Post.php
use App\Models\Post;


class PostController extends Controller
{
    // Method untuk memanggil file view posts.blade.php
    public function index() {
        return view('posts', [                      // Akan memanggil file view home.blade.php di folder resources/views
            "title" => 'Posts',                     // Akan mengirimkan data title ke file view dan disimpan sebagai variabel title
            // 'posts' => Post::all()               // Mengambil semua data post dari model Post.php lalu mengirimkannya ke file view dan disimpan sebagai variabel posts
            'posts' => Post::latest()->get()        // Mengambil semua data post terbaru dari model Post.php lalu mengirimkannya ke file view dan disimpan sebagai variabel posts
        ]); 
    }


    // Method untuk menampilkan single post 
    public function show(Post $post) {      // Menerima data instance Post yg dikirim lewat url
        return view('post', [
            'title' => 'Single Post',       // Akan mengirimkan data title ke file view dan disimpan sebagai variabel title
            'post' => $post                 // Mengirimkan data post ke file view dan disimpan sebagai variabel post
        ]);
    }
}
