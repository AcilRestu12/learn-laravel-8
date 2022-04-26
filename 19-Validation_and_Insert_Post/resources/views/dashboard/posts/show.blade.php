{{-- Memanggil file view di views/dashboard/layouts/main.blade.php --}}
@extends('dashboard.layouts.main')


@section('container')
    
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                {{-- Menerima data post yg dikirim dari DashboardPostController.php --}}
                <h1 class="mb-3">{{ $post->title }}</h1>
                
                {{-- Tombol untuk melihat semua posts yang mengakses url dashboard/posts --}}
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                
                {{-- Tombol untuk mengedit data post yang mengakses url  --}}
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                
                {{-- Tombol untuk menghapus data post yang mengakses url  --}}
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                
                {{-- Menampilkan gambar random dari unsplash --}}
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                
                {{-- Menampilkan body dari post yg ditampilkan --}}
                <article class="my-3 fs-6">
                    {!! $post->body !!}             {{-- {!! !!} ~> Berfungsi untuk menampilkan isi dari variabel dan apabila terdapat element html di dalamnya maka akan tetap dianggap sebagai element html --}}
                </article>

            </div>
        </div>
    </div>

@endsection



