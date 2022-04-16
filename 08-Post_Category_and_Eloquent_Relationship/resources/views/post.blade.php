{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')
    <article>
        {{-- Menerima data post yg dikirim dari PostController.php --}}
        <h1 class="mb-4">{{ $post->title }}</h1>
        
        {{-- Menampilkan kategori dari post yg ditampilkan --}}
        <p>By. Restu in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}             {{-- {!! Akan menampilkan isi dari variabel dan apabila terdapat element html di dalamnya maka akan tetap dianggap sebagai element html !!} --}}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection


