@extends('layouts.main')
@section('container')

      <!-- ======= Portfolio Section ======= -->
      <br>
      <br>
      <section id="pdln" class="portfolio" style="background-color: #f3f5fa">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data PDLN</h2>
          <p>Perjalanan Dinas Luar Negeri (PDLN) adalah adalah penugasan yang dilakukan oleh mahasiswa, dosen, maupun pimpinan dalam rangka tugas belajar dan tugas dinas lainnya di luar negeri yang disetujui oleh Rektor UNS</p>

          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

<div class="container">
  <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <a class="filter-active" href="/home/pdln-mahasiswa">Mahasiswa</a>
                    <a href="/home/pdln-dosen">Dosen</a>
                    <a href="/home/pdln-pimpinan">Pimpinan</a>

  </ul> </div>

  <p>
    <button class="bi bi-search btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Cari Data
    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">Nama</label>
          <input type="text" class="form-control" id="validationCustom01" name="nama" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Waktu Mulai</label>
          <input type="text" class="form-control" id="validationCustom02" name="jangka_waktu_awal"required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Waktu Berakhir</label>
          <input type="text" class="form-control" id="validationCustom03" name="jangka_waktu_akhir"required>
          <div class="invalid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Negara</label>
          <input type="text" class="form-control" id="validationCustom03" name="negara" required>
          <div class="invalid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-warning" type="submit">Cari Data</button>
        </div>
      </form>
    </div>
  </div>

<br/>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- CV/PT -->
            <div class="portfolio-item filter-mahasiswa">

            <table class="table table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">unit kerja</th>
                  <th scope="col">negara</th>
                  <th scope="col">tujuan</th>
                  <th scope="col">awal</th>
                  <th scope="col">akhir</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mahasiswas as $mahasiswa)
                <tr>
                  <th scope="row">{{ $mahasiswas->firstItem() + $loop->index }}</th>
                  <td>{{ $mahasiswa->nama }}</td>
                  <td>{{ $mahasiswa->unit_kerja }}</td>
                  <td>{{ $mahasiswa->negara }}</td>
                  <td>{{ $mahasiswa->tujuan }}</td>
                  <td>{{ $date = empty(strtotime($mahasiswa->jangka_waktu_awal)) ? $mahasiswa->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($mahasiswa->jangka_waktu_awal)))->isoFormat('D MMMM Y'); }}</td>
                  <td>{{ $date = empty(strtotime($mahasiswa->jangka_waktu_akhir)) ? $mahasiswa->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($mahasiswa->jangka_waktu_akhir)))->isoFormat('D MMMM Y'); }}</td>
                  <td>{{ $mahasiswa->status }}</td>
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    {{ $mahasiswas->links() }}
                  </li>
                </ul>
              </nav>
            </div>
            <div class="portfolio-item filter-dosen">

                <table class="table table-hover">
                  <thead>
                    <tr class="text-primary">
                      <th scope="col">No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">unit kerja</th>
                      <th scope="col">negara</th>
                      <th scope="col">tujuan</th>
                      <th scope="col">awal</th>
                      <th scope="col">akhir</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dosens as $dosen)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $dosen->nama }}</td>
                      <td>{{ $dosen->unit_kerja }}</td>
                      <td>{{ $dosen->negara }}</td>
                      <td>{{ $dosen->tujuan }}</td>
                      <td>{{ $date = empty(strtotime($dosen->jangka_waktu_awal)) ? $dosen->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($dosen->jangka_waktu_awal)))->isoFormat('D MMMM Y'); }} }}</td>
                      <td>{{ $date = empty(strtotime($dosen->jangka_waktu_akhir)) ? $dosen->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($dosen->jangka_waktu_akhir)))->isoFormat('D MMMM Y'); }} }}</td>
                      <td>{{ $dosen->status }}</td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        {{ $dosens->links() }}
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="portfolio-item filter-pimpinan">

                    <table class="table table-hover">
                      <thead>
                        <tr class="text-primary">
                          <th scope="col">No.</th>
                          <th scope="col">Nama</th>
                          <th scope="col">unit kerja</th>
                          <th scope="col">negara</th>
                          <th scope="col">tujuan</th>
                          <th scope="col">awal</th>
                          <th scope="col">akhir</th>
                          <th scope="col">Status</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pimpinans as $pimpinan)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $pimpinan->nama }}</td>
                          <td>{{ $pimpinan->unit_kerja }}</td>
                          <td>{{ $pimpinan->negara }}</td>
                          <td>{{ $pimpinan->tujuan }}</td>
                          <td>{{ $date = empty(strtotime($pimpinan->jangka_waktu_awal)) ? $pimpinan->jangka_waktu_awal : Carbon\Carbon::parse(date('Y-m-d', strtotime($pimpinan->jangka_waktu_awal)))->isoFormat('D MMMM Y'); }} }}</td>
                          <td>{{ $date = empty(strtotime($pimpinan->jangka_waktu_akhir)) ? $pimpinan->jangka_waktu_akhir : Carbon\Carbon::parse(date('Y-m-d', strtotime($pimpinan->jangka_waktu_akhir)))->isoFormat('D MMMM Y'); }} }}</td>
                          <td>{{ $pimpinan->status }}</td>
                          <td></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                            {{ $pimpinans->links() }}
                          </li>
                        </ul>
                      </nav>
                    </div>

            </div>


      </div>
    </section><!-- End Portfolio Section -->

@endsection
