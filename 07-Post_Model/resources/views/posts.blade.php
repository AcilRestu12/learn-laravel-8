{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')       

    {{-- Menerima data dari yg dikirim dari PostController.php --}}
    {{-- Melakukan looping untuk setiap posts yg ada --}}
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>     {{-- Mengirim slug dari suatu post melalui url --}}
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
    
@endsection