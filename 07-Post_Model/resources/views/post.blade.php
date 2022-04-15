{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')
    <article>
        {{-- Menerima data post yg dikirim dari PostController.php --}}
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!}             {{-- {!! Akan menampilkan isi dari variabel dan apabila terdapat element html di dalamnya maka akan tetap dianggap sebagai element html !!} --}}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection


