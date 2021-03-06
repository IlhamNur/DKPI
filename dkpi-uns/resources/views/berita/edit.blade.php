@extends('dashboard/layouts/main')

@section('title', 'Edit berita')

@section('container')

<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar links -->
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Berita</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/berita">Berita</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">Baru</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filter</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Edit Berita</h3>
                    </div>
                    {{-- <img src="storage/app/{{ $berita->gambar }}" > --}}


                    <!-- body card -->
                    <form method="POST" action="/berita/{{ $berita->id }}"  enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="form-group ml-5 mr-5">
                            <label for="judul"> Judul</label>
                            <input type="textarea" class="form-control  @error('judul') is-invalid @enderror" id="judul" placeholder="judul berita" name="judul" value="{{ old('judul', $berita->judul) }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group ml-5 mr-5">
                            <label for="excerpt"> Kutipan</label>
                            <input id="excerpt" type="text" name="excerpt" class="form-control  @error('excerpt') is-invalid @enderror" id="excerpt" placeholder="excerpt berita" name="excerpt" value="{{ old('excerpt', $berita->excerpt) }}">
                            @error('excerpt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}

                        <div class="form-group ml-5 mr-5">
                            <label for="body"> Isi Berita</label>
                            <textarea  id="editor" type="hidden" name="body" class="form-control  @error('body') is-invalid @enderror" id="body" placeholder="isi berita" name="body" value="{{ old('body') }}">
                                    {{ $berita->body }}
                            </textarea>
                            @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="gambar"> Ganti Gambar</label>
                              @if($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <input id="gambar" type="file" name="gambar" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" placeholder="gambar berita" name="gambar" value="{{ old('gambar', $berita->gambar) }}">
                            @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="published_at"> Diterbitkan</label>
                            <input id="published_at" type="date" name="published_at" class="form-control  @error('published_at') is-invalid @enderror" id="published_at" placeholder="berita" name="published_at" value="{{ old('published_at', $berita->published_at) }}">
                            @error('published_at')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-5 mb-5">Kirim</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(ofREvent){
                imgPreview.src = ofReader.target.result;
            }

        }
    </script>
    <!-- End Main content -->
    @endsection
