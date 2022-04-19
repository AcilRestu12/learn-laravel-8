{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')       
    <h1 class="mb-5">Post Categories :</h1>

    {{-- Melakukan looping untuk setiap category yg diterima dari route web --}}
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2>
                    {{-- Mengirim slug dari suatu category melalui url --}}
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>     
                </h2>
            </li>
        </ul>
    @endforeach
    
@endsection