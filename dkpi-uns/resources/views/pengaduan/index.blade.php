@extends('dashboard/layouts/main')

@section('title', 'Pengaduan')
@section('search')
<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="/pengaduan">
    <div class="form-group mb-0">
        <div class="input-group input-group-alternative input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Cari" type="text" name="name" value="{{ request('name') }}">
        </div>
    </div>
    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</form>
@endsection
@section('container')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Pengaduan</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#"> Pengaduan</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Indeks</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">Baru</a>
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
                    <h3 class="mb-0">Pengaduan</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="no">No</th>
                                <th scope="col" class="sort" data-sort="nim">Nama</th>
                                <th scope="col" class="sort" data-sort="nama">Email</th>
                                <th scope="col" class="sort" data-sort="nama">Subjek</th>
                                <th scope="col" class="sort" data-sort="nama">Tanggal</th>
                                <th scope="col" class="sort" data-sort="nama">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($pengaduans as $pengaduan)
                            <tr>
                                <th scope="row">{{ $pengaduans->firstItem() + $loop->index }}</th>
                                <td>{{ $pengaduan->name }}</td>
                                <td>{{ $pengaduan->email }}</td>
                                <td>{{ $pengaduan->subject }}</td>
                                <td>{{ $pengaduan->created_at }}</td>
                                <td>
                                    <a href="/pengaduan/{{ $pengaduan->id }}" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col">
                                <div style="overflow-x:auto;">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item">
                                            {{ $pengaduans->links() }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main content -->
@endsection
