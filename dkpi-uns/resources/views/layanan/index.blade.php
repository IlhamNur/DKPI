@extends('dashboard/layouts/main')

@section('title', 'Legal Drafting')

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
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Format Edit Penyusunan Hukum</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/layanan"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/layanan"> Penyusunan Hukum</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Edit</li>
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
                        <h3 class="mb-0">Edit Berkas</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/layanan" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ml-5 mr-5">
                            <label for="mou"> Edit Berkas Ketentuan MoU</label>
                            <input type="file" class="form-control  @error('mou') is-invalid @enderror" id="mou" placeholder="mou" name="mou" value="{{ old('mou') }}">
                            @error('mou')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="pks"> Edit Berkas Ketentuan PKS</label>
                            <input type="file" class="form-control  @error('pks') is-invalid @enderror" id="pks" placeholder="pks" name="pks" value="{{ old('pks') }}">
                            @error('pks')
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
    <!-- End Main content -->
    @endsection
