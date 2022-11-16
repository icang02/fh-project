<style>
  /* Navbar Dropdown */
  .drop-down02 {
    position: relative;
  }

  .drop2 {
    text-transform: capitalize !important;
    font-weight: normal !important;
    margin-left: -1.5px !important;
  }

  .drop-down02 .sub-menu02 {
    position: absolute !important;
    left: 100%;
    top: -9px !important;
  }

  .drop-down02 .dropdown-toggle {
    padding: .25rem 1.1rem !important;
  }

  /* End dropdown */


  /* Google translate */
  .goog-te-gadget {
    color: transparent !important;
  }

  .goog-te-banner-frame.skiptranslate,
  .goog-te-gadget>span {
    display: none;
  }

  #google_translate_element select {
    color: #DA251E;
    height: 2.35rem;
    border-radius: 4px;
  }

  .form-control {
    border-radius: 4px;
  }

  /* End google translate */

  @media screen and (max-width:767px) {
    .drop-down02 .sub-menu02 {
      position: static !important;
    }

    .form-search {
      margin-top: 30px;
    }

    .form-search>div {
      width: 130px;
      margin: auto;
      margin-bottom: 7px
    }

    .form-search>input {
      width: 250px;
    }

  }
</style>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'id'
    }, 'google_translate_element');
  }

  window.addEventListener("load", (event) => {
    const select = document.querySelector('.goog-te-combo');

    select.classList.add("form-select");
  });
</script>

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow px-4 px-md-5">
  <div
    class="py-1 px-lg-3 pt-lg-4 d-flex justify-md-content-between justify-content-between flex-md-row flex-column align-items-center w-100">
    <a href="/">
      <img src="{{ asset('home-assets/img/logo-hukum.png') }}" class="d-block" alt="Logo" width="300">
    </a>

    <div class="form-search">
      <div id="google_translate_element"></div>
      <input class="form-control" name="search" placeholder="Cari.." style="margin-top: -18px;">
    </div>

  </div>
</nav>


{{-- Menu Panjang --}}
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 pb-3 pb-md-0">
  <button type="button" class="navbar-toggler mt-3 ms-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
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
          {{ request()->is('profil*') ? 'active txt-utama' : '' }}"
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
          <a href="{{ url('/dosen/daftar-dosen') }}"
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
          <a href="{{ url('program-studi/sejarah-prodi') }}"
            class="dropdown-item {{ request()->is('program-studi/sejarah') ? 'active bg-utama' : '' }}">Sejarah</a>
          <a href="{{ url('program-studi/visi-misi-prodi') }}"
            class="dropdown-item {{ request()->is('program-studi/visi-misi') ? 'active bg-utama' : '' }}">Visi
            dan
            Misi</a>
          <a href="{{ url('program-studi/tujuan-prodi') }}"
            class="dropdown-item {{ request()->is('program-studi/tujuan') ? 'active bg-utama' : '' }}">Tujuan</a>
          <a href="{{ url('program-studi/sasaran-strategis-prodi') }}"
            class="dropdown-item {{ request()->is('program-studi/sasaran-strategis') ? 'active bg-utama' : '' }}">Sasaran
            Strategis</a>
          <a href="{{ $links[3]->link }}"
            class="dropdown-item {{ request()->is('#') ? 'active bg-utama' : '' }}">Rencana Strategis
            Program
            Studi</a>
          <a href="{{ $links[4]->link }}"
            class="dropdown-item {{ request()->is('#') ? 'active bg-utama' : '' }}">Rencana Operasional
            Program
            Studi</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#" class="nav-link dropdown-toggle {{ request()->is('akademik*') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Akademik</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('akademik/peraturan-rektor-tentang-akademik') }}"
            class="dropdown-item {{ request()->is('akademik/peraturan-rektor-tentang-akademik') ? 'active bg-utama' : '' }}">Peraturan
            Rektor
            Tentang
            Akademik</a>
          <a href="{{ $links[5]->link }}"
            class="dropdown-item {{ request()->is('#') ? 'active bg-utama' : '' }}">Panduan
            Akademik</a>
          <a href="{{ url('akademik/kalender-akademik') }}"
            class="dropdown-item {{ request()->is('akademik/kalender-akademik') ? 'active bg-utama' : '' }}">Kalender
            Akademik</a>
          <a href="{{ url('akademik/jadwal-perkuliahan') }}"
            class="dropdown-item {{ request()->is('akademik/jadwal-perkuliahan') ? 'active bg-utama' : '' }}">Jadwal
            Perkuliahan</a>
          <a href="{{ url('akademik/jadwal-ujian') }}"
            class="dropdown-item {{ request()->is('akademik/jadwal-ujian') ? 'active bg-utama' : '' }}">Jadwal
            Ujian</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle {{ request()->is('mahasiswa-alumni*') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Mahasiswa & Alumni</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ $links[6]->link }}"
            class="dropdown-item {{ request()->is('#') ? 'active bg-utama' : '' }}">Pendaftaran
            Mahasiswa Baru</a>
          <a href="{{ url('mahasiswa-alumni/lembaga-kemahasiswaan') }}"
            class="dropdown-item {{ request()->is('mahasiswa-alumni/lembaga-kemahasiswaan') ? 'active bg-utama' : '' }}">Lembaga
            Kemahasiswaan</a>
          <a href="{{ url('mahasiswa-alumni/registrasi-alumni') }}"
            class="dropdown-item {{ request()->is('mahasiswa-alumni/registrasi-alumni') ? 'active bg-utama' : '' }}">Registrasi
            Alumni</a>
        </div>
      </div>

      <div class="nav-item dropdown ">
        <a href="#" class="nav-link dropdown-toggle {{ request()->is('tridharma*') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Tridharma</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('tridharma/penelitian') }}"
            class="dropdown-item {{ request()->is('tridharma/penelitian') ? 'active bg-utama' : '' }}">Penelitian</a>
          <a href="{{ url('tridharma/pengabdian') }}"
            class="dropdown-item {{ request()->is('tridharma/pengabdian') ? 'active bg-utama' : '' }}">Pengabdian</a>
          <a href="{{ url('tridharma/publikasi') }}"
            class="dropdown-item {{ request()->is('tridharma/publikasi') ? 'active bg-utama' : '' }}">Publikasi</a>
          <a href="{{ url('tridharma/hak-kekayaan-intelektual') }}"
            class="dropdown-item {{ request()->is('tridharma/hak-kekayaan-intelektual') ? 'active bg-utama' : '' }}">Hak
            Kekayaan Intelektual</a>
        </div>
      </div>

      <div class="dropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="dropdown">
            <a class="nav-link dropdown-toggle {{ request()->is('layanan*') ? 'active txt-utama' : '' }}"
              href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Layanan</a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li class="nav-item dropdown drop-down02">
                <a class="nav-link dropdown-toggle drop2 {{ request()->is('fasilitas*') ? 'active txt-utama' : '' }}"
                  href="#" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas
                </a>
                <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                  <li><a
                      class="dropdown-item {{ request()->is('layanan/fasilitas/kriminologi') ? 'active bg-utama' : '' }}"
                      href="{{ url('layanan/fasilitas/kriminologi') }}">Lab.
                      Pidana & Kriminologi</a></li>
                  <li><a
                      class="dropdown-item {{ request()->is('layanan/fasilitas/konstitusi') ? 'active bg-utama' : '' }}"
                      href="{{ url('layanan/fasilitas/konstitusi') }}">Lab.
                      Konstitusi
                      (vicon)</a></li>
                  <li><a
                      class="dropdown-item {{ request()->is('layanan/fasilitas/ruang-baca') ? 'active bg-utama' : '' }}"
                      href="{{ url('layanan/fasilitas/ruang-baca') }}">Ruang
                      Baca</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown drop-down02">
                <a class="nav-link dropdown-toggle drop2" href="#" id="navbarDropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">Sistem Informasi</a>
                <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ $links[8]->link }}">SIAKAD</a></li>
                  <li><a class="dropdown-item" href="{{ $links[9]->link }}">WISUDA</a></li>
                  <li><a class="dropdown-item" href="{{ $links[10]->link }}">SITEDI</a>
                  </li>
                  <li><a class="dropdown-item" href="{{ $links[11]->link }}">HOLREV</a></li>
                  <li><a class="dropdown-item" href="{{ $links[12]->link }}">SIMLITABMAS</a></li>
                  <li><a class="dropdown-item" href="{{ $links[13]->link }}">SISTER</a></li>
                  <li><a class="dropdown-item" href="{{ $links[14]->link }}">SINTA</a></li>
                  <li><a class="dropdown-item" href="{{ $links[15]->link }}">E-LIBRARY</a>
                  </li>
                  <li><a class="dropdown-item" href="{{ $links[16]->link }}">SIPATUK</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="{{ $links[7]->link }}">Klinik Hukum UHO</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <a href="{{ url('jaminan-mutu') }}"
        class="nav-item nav-link {{ request()->is('jaminan-mutu') ? 'active txt-utama' : '' }}">Jaminan
        Mutu</a>

      <div class="nav-item dropdown ">
        <a href="#" class="nav-link dropdown-toggle {{ request()->is('berita') ? 'active txt-utama' : '' }}"
          data-bs-toggle="dropdown">Berita</a>

        <div class="dropdown-menu fade-down m-0">
          @foreach ($kategoriBerita as $kategori)
            <a href="{{ url('berita/kategori/' . $kategori->id) }}"
              class="dropdown-item {{ request()->is('berita/kategori/' . $kategori->id) ? 'active bg-utama' : '' }}">{{ $kategori->nama }}</a>
          @endforeach
        </div>
      </div>

      <a href="{{ url("berita/kategori/$uiGreenmetric->id") }}"
        class="nav-item nav-link {{ request()->is('berita/ui-greenmetric') ? 'active txt-utama' : '' }}">
        {{ $uiGreenmetric->nama }}
      </a>
    </div>
  </div>
</nav>
