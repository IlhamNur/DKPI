@extends('layouts.main')
@section('container')

<!-- ======= Pengumuman Section ======= -->
<br>
<br>
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pengumuman</h2>
            <p>Informasi terkait Direktorat Kerjasama, pengembangan, dan Internasionalisasi dapat dilihat pada kolom
                berikut </p>
        </div>
        <div class="card">
            <h5 class="card-header">INFORMASI !!! </h5>
            @foreach ($pengumumans as $pengumuman)
            <div class="card-body">
                <h5 class="card-title">{{ $pengumuman->judul }}</h5>
                <p class="card-text">{{ substr($pengumuman->excerpt, 0, 250)."..." }}</p>
                <a href="/home/pengumumandetails/{{ $pengumuman->id }}">Selengkapnya</a>
            </div>
            <!-- garis -->
            <hr />
            @endforeach
        </div>
    </div>
</section><!-- End Team Section -->
@endsection
