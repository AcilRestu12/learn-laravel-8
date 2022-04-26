 {{-- Memanggil file view di views/dashboard/layouts/main.blade.php --}}
@extends('dashboard.layouts.main')


@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        {{-- Mengambil data user yg sudah login / authentication --}}
        <h1 class="h2">Edit Posts</h1>

    </div>

    <div class="col-lg-8">
        {{-- Form untuk menambah data post yg datanya akan dikirim ke route /dashboard/posts/{{ $post->slug } dengan metode post dan akan diterima oleh method store di controller DashboardPostControlller.php --}}
        <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5">
            {{-- Mengubah method dari form dari post menjadi put --}}
            @method('put')
            {{-- Mengirimkan token csrf agar tidak dibajak --}}
            @csrf
            {{-- Input untuk title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
                {{-- Apabila terjadi error untuk input title --}}
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Input untuk slug --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required autofocus value="{{ old('slug', $post->slug) }}">
                {{-- Apabila terjadi error untuk input slug --}}
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Input untuk category --}}
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        {{-- Apabila sudah memilih category sebelumnya --}}
                        @if ( old('category_id', $post->category_id) == $category->id )
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        {{-- Apabila sebelumnya belum memilih category --}}
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            {{-- Input untuk body --}}
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                {{-- Apabila terjadi error untuk input body --}}
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>
            {{-- Tombol submit --}}
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>


    <script>
        // import fetch from "node-fetch";

        // Mengambil input title
        const title = document.querySelector('#title');
        // Mengambil input slug
        const slug = document.querySelector('#slug');

        // Apabila input title berubah
        title.addEventListener('change', function() {

            // console.log(title);
            // console.log(title.value);
            
            // Apabila ada request ke /dashboard/posts/checkSlug dan mengirim data title
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                // Mengambil isinya dan response-nya akan dijalankan ke dalam method json 
                .then(reponse => response.json())
                // Data-nya akan mengganti value dari slug
                .then(data => slug.value = data.slug)
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        // Menonaktifkan fitur upload file di trix editor
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })
        
    </script>

@endsection