{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')
    <article>
        {{-- Menerima data post yg dikirim dari PostController.php --}}
        <h1 class="mb-4">{{ $post->title }}</h1>
        
        {{-- Menampilkan user dan kategori dari post yg ditampilkan --}}
        <p>By. <a href="" class="text-decoration-none"> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}             {{-- {!! Akan menampilkan isi dari variabel dan apabila terdapat element html di dalamnya maka akan tetap dianggap sebagai element html !!} --}}
    </article>

    <a href="/posts" class="d-block mt-5">Back to Posts</a>
@endsection


