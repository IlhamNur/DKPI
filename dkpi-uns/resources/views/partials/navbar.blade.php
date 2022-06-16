<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ ($title === "DKPI") ? 'active' : '' }}  " href="/">Beranda</a></li>
          <li><a class="nav-link scrollto {{ ($title === "Layanan") ? 'active' : '' }} " href="/home/layanan">Layanan</a></li>
          <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down" {{ ($title === "Data PDLN") ? 'active' : '' }}"></i></a>
            <ul>
              <li><a href="/home/pdln-mahasiswa">Data PDLN</a></li>
              <li><a href="/home/mitra-cv">Data Mitra</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down {{ ($title === "Berita") ? 'active' : '' }}"></i></a>
            <ul>
              <li><a href="/home/berita">Berita</a></li>
              <li><a href="/home/pengumuman">Pengumuman</a></li>
              <li><a href="/home/galeri/gambar">Galeri</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ ($title === "TJU") ? 'active' : '' }} " href="/home/faq">TJU</a></li>
          <li><a class="nav-link scrollto {{ ($title === "Peringkat") ? 'active' : '' }}" href="/home/thes">Peringkat</a></li>
          <li><a class="nav-link scrollto {{ ($title === "About") ? 'active' : '' }}" href="/home/about">Tentang</a></li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard">Dasbor</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
            		<form action="/logout" method="post">
            			@csrf
            			<button type="submit" class="dropdown-item">Keluar</button>
            		</form>
              </li>
            </ul>
          </li>
          @else
          <li><a class="bi bi-box-arrow-in-right" href="/login"></a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
