{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')       

    {{-- Menerima data dari yg dikirim dari PostController.php --}}
    {{-- Melakukan looping untuk setiap posts yg ada --}}
    @foreach ($posts as $post)
        <article class="mb-4 border-bottom pb-5">
            <h2>
                {{-- Mengirim slug dari suatu post melalui url --}}
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>     
            </h2>
            {{-- Menampilkan author / user dan kategori dari post yg ditampilkan --}}
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <p>{{ $post->excerpt }}</p>

            {{-- Link untuk menuju single post dari suatu post tertentu --}}
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>     
        </article>
    @endforeach
    
@endsection