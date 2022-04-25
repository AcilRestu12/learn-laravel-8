<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    //  Method untuk menampilkan semua data post berdasarkan user tertentu
    public function index()
    {
        // Memanggil file view dashboard/posts/index.blade.php dan mengirim data posts
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()        // Mengambil data posts berdasarkan id user yang sudah login
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */

    //  Method untuk menampilkan halaman tambah post
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    // Method untuk menjalankan fungsi tambah
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
    */

    // Method untuk menampilkan detail dari post
    public function show(Post $post)
    {
        // Memanggil file view dashboard/posts/show.blade.php dan mengirim data post
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
    */

    // Method untuk menampilkan ubah data post
    public function edit(Post $post)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
    */
    
    // Method untuk memproses perubahan data post
    public function update(Request $request, Post $post)
    {
        //
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
    */

    // Method untuk menghapus data post
    public function destroy(Post $post)
    {
        //
    }
}
