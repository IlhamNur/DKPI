@extends('dashboard/layouts/main')

@section('title', 'Data Pengumuman')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data Pengumuman</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/pengumuman"> Pengumuman</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> {{ $pengumuman->judul }}</li>
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
                        <h3 class="mb-0">Detail Pengumuman</h3>
                    </div>

                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Judul : {{ $pengumuman->judul}}</h5>
                            <p class="card-text">Pengumuman : {{ $pengumuman->pengumuman}}</p>
                            <p class="card-text">Tautan : {{ $pengumuman->link }}</p>
                            <p class="card-text">Berlaku Sampai : {{ $pengumuman->berlaku }}</p>
                            <a href="/pengumuman/download/pengumuman/{{ $pengumuman->id }}"
                                class="btn btn-warning">Download File Pengumuman</a>
                            <a href="{{ $pengumuman->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ $pengumuman->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2"
                                    onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                            </form>
                            <a href="/pengumuman" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main content -->
@endsection
