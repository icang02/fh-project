<nav class="navbar navbar-expand-lg bg-white navbar-light shadow px-2">
  <div
    class="py-2 p-lg-4 d-flex justify-md-content-between justify-content-center flex-md-row flex-column align-items-center w-100">
    <img src="{{ asset('home-assets/img/logo-hukum.png') }}" class="d-block" alt="Logo" width="300">

    <div class="btn btn-danger badge my-md-0 my-4 mx-auto">Language Switcher</div>

    <form class="">
      <input class="form-control px-lg-4" placeholder="Cari..">
    </form>
  </div>
</nav>


{{-- Menu Panjang --}}
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 pb-3 pb-md-0">
  <button type="button" class="navbar-toggler me-4 ms-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">

    <div class="navbar-nav mx-auto p-4 p-lg-0">
      <a href="{{ url('/') }}"
        class="nav-item nav-link ms-0 ms-md-4 {{ request()->is('/') ? 'active txt-utama' : '' }}">Beranda</a>

      <a href="{{ url('/about') }}"
        class="nav-item nav-link {{ request()->is('about') ? 'active txt-utama' : '' }}">Spada</a>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle
          {{ request()->is('sejarah') || request()->is('profil*') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Profil</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('profil/sejarah') }}"
            class="dropdown-item {{ request()->is('profil/sejarah') ? 'active bg-utama' : '' }}">Sejarah</a>
          <a href="{{ url('profil/visi-misi') }}"
            class="dropdown-item {{ request()->is('profil/visi-misi') ? 'active bg-utama' : '' }}">Visi dan
            Misi</a>
          <a href="{{ url('profil/tujuan') }}"
            class="dropdown-item {{ request()->is('profil/tujuan') ? 'active bg-utama' : '' }}">Tujuan</a>
          <a href="{{ url('profil/sasaran-strategis') }}"
            class="dropdown-item {{ request()->is('profil/sasaran-strategis') ? 'active bg-utama' : '' }}">Sasaran
            Strategis</a>
          <a href="{{ url('profil/personalia') }}"
            class="dropdown-item {{ request()->is('profil/personalia') ? 'active bg-utama' : '' }}">Personalia</a>
          <a href="{{ url('profil/struktur-organisasi') }}"
            class="dropdown-item {{ request()->is('profil/struktur-organisasi') ? 'active bg-utama' : '' }}">Struktur
            Organisasi</a>
          <a href="{{ url('profil/tenaga-pendidikan') }}"
            class="dropdown-item {{ request()->is('profil/tenaga-pendidikan') ? 'active bg-utama' : '' }}">Tenaga
            Pendidikan/Dosen</a>
          <a href="{{ url('profil/tenaga-kependidikan') }}"
            class="dropdown-item {{ request()->is('profil/tenaga-kependidikan') ? 'active bg-utama' : '' }}">Tenaga
            Kependidikan</a>
          <a href="{{ url('profil/rencana-strategis') }}"
            class="dropdown-item {{ request()->is('profil/rencana-strategis') ? 'active bg-utama' : '' }}">Rencana
            Strategis</a>
          <a href="{{ url('profil/rencana-operasional') }}"
            class="dropdown-item {{ request()->is('profil/rencana-operasional') ? 'active bg-utama' : '' }}">Rencana
            Operasional</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('program-studi*') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Program Studi</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('program-studi/sejarah') }}"
            class="dropdown-item {{ request()->is('program-studi/sejarah') ? 'active bg-utama' : '' }}">Sejarah</a>
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
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Hak
            Kekayaan
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
          data-bs-toggle="dropdown">UI Greenmetric</a>
      </div>
    </div>
</nav>
