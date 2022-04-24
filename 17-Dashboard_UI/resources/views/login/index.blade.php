@extends('layouts.main')

@section('container')
    
    <div class="row justify-content-center">
        <div class="col-md-4">
            {{-- Menampilkan flash message ketika berhasil login --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Menampilkan flash message ketika gagal login / login error --}}
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                {{-- Form untuk login yg datanya akan dikirim ke route login dengan metode post --}}
                <form action="/login" method="post">
                    {{-- Mengirimkan token csrf agar tidak dibajak --}}
                    @csrf
                    {{-- Input email --}}
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Input password --}}
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">
                    Not register? 
                    <a href="/register">Register Now!</a>
                </small>
            </main>
        </div>
    </div>



@endsection


