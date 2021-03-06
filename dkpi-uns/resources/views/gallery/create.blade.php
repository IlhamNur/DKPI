@extends('dashboard/layouts/main')

@section('title', 'Tambah galeri')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Format Tambah galeri</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/gallery"> Galeri</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Tambah</li>
                            </ol>
                        </nav>
                    </div>
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
                        <h3 class="mb-0">Tambah Galeri</h3>
                    </div>
                    @if (session('success'))
                    <div class="alert-success">
                      <p>{{ session('success') }}</p>
                    </div>
                    @endif
                    <!-- body card -->
                    <form method="POST" action="/gallery" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ml-5 mr-5">
                            <label for="link">Tautan</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="tautan semat youtube" name="link" value="{{ old('link') }}">
                            @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="judul video" name="judul" value="{{ old('judul') }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jenis" class="form-select" >Jenis</label>
                            <select class="form-control  @error('jenis') is-invalid @enderror" id="jenis" placeholder="kategori" name="jenis">
                            <option value="video">Video</option>
                            <option value="gambar">Gambar</option>
                            </select>

                            @error('jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="gambar"> Gambar Pendukung</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input id="gambar" type="file" name="gambar" class="form-control  @error('gambar') is-invalid @enderror" id="gambar" placeholder="gambar" name="gambar">
                            {{-- <trix-editor input="gambar"></trix-editor> --}}
                            @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                        <label for="caption"> Keterangan</label>
                        <textarea  id="editor" type="hidden" name="caption" class="form-control  @error('caption') is-invalid @enderror" id="caption" placeholder="tulis keterangan" name="caption" value="{{ old('caption') }}">
                            {{ old('caption') }}
                        </textarea>
                        @error('caption')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="published_at"> Diterbitkan</label>
                            <input id="published_at" type="date" name="published_at" class="form-control  @error('published_at') is-invalid @enderror" id="published_atr" placeholder="published_at berita" name="published_at" value="{{ old('published_at') }}">
                            {{-- <trix-editor input="gambar"></trix-editor> --}}
                            @error('published_at')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                        <button type="submit" class="btn btn-primary ml-5">Kirim</button>
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

