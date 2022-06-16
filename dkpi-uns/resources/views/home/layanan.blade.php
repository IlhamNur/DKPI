@extends('layouts.main')
@section('container')

    <!-- ======= Layanan Section ======= -->
    <br>
    <br>
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Direktorat Kerjasama, Pengembangan, dan Internasionalisasi (DKPI) UNS menyediakan layanan yang dapat diakses dalam beberapa hal sebagai berikut</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="/layanan/legaldrafting">Penyusunan Naskah Hukum</a></h4>
              <p>perancangan naskah hukum / perancangan kontrak atau MoU.</p>
              <a href="/layanan/legaldrafting" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div>

          <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Pengembangan PSDKU</a></h4>
              <p>Pelaksanaan kegiatan pendidikan tinggi oleh perguruan tinggi diluar Kampus Utama.</p>
              <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash-coin"></i></div>
              <h4><a href="">Pencairan Dana Kerjasama</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="">Pemrosesan Surat Izin</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div> -->
          
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="200">
          	<div class="icon-box">
    	        <div class="icon"><i class="bx bx-help-circle icon-help"></i></div>
  	            <h4><a href="/layanan/surveykepuasan">Survey Kepuasan Pelayanan</a></h4>
                <p>Pengisian kuesioner berdasarkan pelayanan yang telah kami berikan.</p>
              	<a href="/layanan/surveykepuasan" class="btn-learn-more">Baca Selengkapnya</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Layanan Section -->

@endsection
