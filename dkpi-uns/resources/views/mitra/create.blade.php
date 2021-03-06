@extends('dashboard/layouts/main')

@section('title', 'Tambah Data Mitra')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Format Tambah Data Mitra</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra"> Mitra</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Tambah</li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
                        <h3 class="mb-0">Tambah Data Mitra Kerjasama</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/mitra" enctype= multipart/form-data>
                        @csrf
                        <div class="form-group ml-5 mr-5">
                            <label for="nama_instansi">Nama Instansi</label>
                            <input type="text" class="form-control  @error('nama_instansi') is-invalid @enderror" id="nama_instansi" placeholder="Nama Instansi" name="nama_instansi" value="{{ old('nama_instansi') }}">
                            @error('nama_instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="instansi" class="form-select" >Jenis Instansi</label>
                            <select class="form-control  @error('instansi') is-invalid @enderror" id="instansi" placeholder="jenis instansi" name="instansi">
                            <option value="yayasan">Yayasan/Sekolah</option>
                            <option value="cv">CV/PT</option>
                            <option value="internasional">Internasional</option>
                            <option value="pemerintah">Pemerintah</option>
                            <option value="jasaKeuangan">Jasa keuangan</option>

                            </select>
                            @error('instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        {{-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Default radio
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Default checked radio
                            </label>
                          </div> --}}

                        <div class="form-group ml-5 mr-5">
                            <label for="no_mou_uns">Nomor MoU UNS</label>
                            <input type="text" class="form-control @error('no_mou_uns') is-invalid @enderror" id="no_mou_uns" placeholder="nomor surat UNS" name="no_mou_uns" value="{{ old('no_mou_uns') }}">
                            @error('no_mou_uns')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="no_mou_mitra">Nomor MoU Mitra</label>
                            <input type="text" class="form-control @error('no_mou_mitra') is-invalid @enderror" id="no_mou_mitra" placeholder="nomor surat" name="no_mou_mitra" value="{{ old('no_mou_mitra') }}">
                            @error('no_mou_mitra')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="ruang_lingkup">Ruang Lingkup</label>
                            <input type="text" class="form-control @error('ruang_lingkup') is-invalid @enderror" id="ruang_lingkup" placeholder="Ruang Lingkup" name="ruang_lingkup" value="{{ old('ruang_lingkup') }}">
                            @error('ruang_lingkup')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jangka_waktu_awal">Jangka Waktu Awal</label>
                            <input type="date" class="form-control @error('jangka_waktu_awal') is-invalid @enderror" id="jangka_waktu_awal" placeholder="jangka waktu Awal" name="jangka_waktu_awal" value="{{ old('jangka_waktu_awal') }}">
                            @error('jangka_waktu_awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="jangka_waktu_akhir">Jangka Waktu Akhir</label>
                            <input type="date" class="form-control @error('jangka_waktu_akhir') is-invalid @enderror" id="jangka_waktu_akhir" placeholder="Jangka Waktu Akhir" name="jangka_waktu_akhir" value="{{ old('jangka_waktu_akhir') }}">
                            @error('jangka_waktu_akhir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="pejabat_penandatangan">Pejabat Penandatangan</label>
                            <input type="text" class="form-control @error('pejabat_penandatangan') is-invalid @enderror" id="pejabat_penandatangan" placeholder="nama pejabat pendandatangan" name="pejabat_penandatangan" value="{{ old('pejabat_penandatangan') }}">
                            @error('pejabat_penandatangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="file_mou">Berkas MoU</label>
                            <input type="file" class="form-control @error('file_mou') is-invalid @enderror" id="file_mou" placeholder="catatan" name="file_mou" value="{{ old('kapaitas_ruang') }}">
                            @error('file_mou')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary ml-5 mb-5">Kirim</button>
                    </form>

                    <!-- Card footer -->
                    {{-- <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Sebelumnya</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(Saat Ini)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Selanjutnya</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Main content -->
    @endsection
