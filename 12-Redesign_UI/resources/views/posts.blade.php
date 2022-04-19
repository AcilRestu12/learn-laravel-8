{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')     

    {{-- Menerima data dari yg dikirim dari PostController.php --}}
    <h1 class="mb-5">{{ $title }}</h1>
    

    {{-- Mengecek apakah ada posts atau tidak --}}
    @if  ( $posts->count() )
        <div class="card mb-3 text-center">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                    By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more<a>     
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    
    <div class="container">
        {{-- Melakukan looping untuk setiap posts yg ada --}}
        <div class="row">
            {{-- Menskip data post pertama --}}
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        {{-- Menampilkan kategori dari post yg ditampilkan --}}
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, .7)">
                            <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        
                        {{-- Menampilkan gambar random dari unsplash --}}
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">

                        <div class="card-body">
                            {{-- Mengirim slug dari suatu post melalui url --}}
                            <h5 class="card-title">{{ $post->title }}</h5>

                            {{-- Menampilkan author / user post yg ditampilkan --}}
                            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>

                            {{-- Menampilkan excerpt dari post yg ditampilkan --}}
                            <p class="card-text">{{ $post->excerpt }}</p>

                            {{-- Link untuk menuju single post dari suatu post tertentu --}}
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    
@endsection