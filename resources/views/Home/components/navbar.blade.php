<nav class="navbar navbar-expand-lg bg-white navbar-light shadow">
  <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img src="{{ asset('home-assets/img/logo-hukum.png') }}" alt="Logo" width="300">
  </a>
  <div class="navbar-nav ms-auto p-4 p-lg-0 search-pc">
    <input class="form-control px-lg-5 d-lg-block" placeholder="Cari..">
  </div>
</nav>


{{-- Menu Panjang --}}
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">

    <div class="navbar-nav mx-auto p-4 p-lg-0">
      <a href="{{ url('/') }}"
        class="nav-item nav-link {{ request()->is('/') ? 'active txt-utama' : '' }}">Beranda</a>
      <a href="{{ url('/about') }}"
        class="nav-item nav-link {{ request()->is('about') ? 'active txt-utama' : '' }}">Spada</a>
      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Profil</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('team') }}"
            class="dropdown-item {{ request()->is('team') ? 'active bg-utama' : '' }}">Sejarah</a>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Visi dan
            Misi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Tujuan</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Sasaran Strategis</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Personalia</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Struktur
            Organisasi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Tenaga
            Pendidikan/Dosen</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Tenaga
            Kependidikan</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Rencana Strategis</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Rencana
            Operasional</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Program Studi</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('team') }}"
            class="dropdown-item {{ request()->is('team') ? 'active bg-utama' : '' }}">Sejarah</a>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Visi dan
            Misi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Tujuan</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Sasaran Strategis</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Rencana Strategis
            Program
            Studi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Rencana Operasional
            Program
            Studi</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Akademik</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('team') }}"
            class="dropdown-item {{ request()->is('team') ? 'active bg-utama' : '' }}">Peraturan Rektor
            Tentang
            Akademik</a>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Panduan
            Akademik</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Kalender Akademik</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Jadwal
            Perkuliahan</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Jadwal Ujian</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Mahasiswa & Alumni</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('team') }}"
            class="dropdown-item {{ request()->is('team') ? 'active bg-utama' : '' }}">Pendaftaran
            Mahasiswa Bary</a>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Lembaga
            Kemahasiswaan</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Registrasi Alumni</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Tridharma</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('team') }}"
            class="dropdown-item {{ request()->is('team') ? 'active bg-utama' : '' }}">Penelitian</a>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Pengabdian</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Publikasi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Hak Kekayaan
            Intelektual</a>
        </div>
      </div>



      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Layanan</a>
        <div class="dropdown-menu fade-down m-0">
          <div class="nav-item dropdown">
            <a href="{{ url('team') }}"
              class="nav-link dropdown-toggle {{ request()->is('team') ? 'active bg-utama' : '' }}">Fasilitas</a>
          </div>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Sistem
            Informasi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Klinik Hukum Uho</a>
        </div>
      </div>


      <div class="nav-item">
        <a href="#"
          class="nav-link {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Jaminan Mutu</a>
      </div>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Berita</a>

        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('team') }}"
            class="dropdown-item {{ request()->is('team') ? 'active bg-utama' : '' }}">Event</a>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Informasi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Pengumuman</a>
        </div>
      </div>

      <div class="nav-item">
        <a href="#"
          class="nav-link {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">UI Grennmetric</a>
      </div>
    </div>
</nav>
