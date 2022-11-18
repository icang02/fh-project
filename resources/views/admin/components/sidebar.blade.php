<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex">
    <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="{{ asset('admin-assets') }}/brand/coreui.svg#full"></use>
    </svg>
    <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="{{ asset('admin-assets') }}/brand/coreui.svg#signet"></use>
    </svg>
  </div>
  <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-title">Main Navigator</li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-speedometer">
          </use>
        </svg> Dashboard</a></li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg>Profil</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/sejarah') }}"><span
              class="nav-icon"></span> Sejarah</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/visi-misi') }}"><span
              class="nav-icon"></span> Visi Misi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/tujuan') }}"><span
              class="nav-icon"></span> Tujuan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/sasaran-strategis') }}"><span
              class="nav-icon"></span> Sasaran Strategis</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/personalia') }}"><span
              class="nav-icon"></span> Personalia</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/struktur-organisasi') }}"><span
              class="nav-icon"></span>
            Struktur Organisasi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/dosen/list-dosen') }}"><span
              class="nav-icon"></span> Tenaga Pendidikan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/tenaga-kependidikan') }}"><span
              class="nav-icon"></span> Tenaga
            Kependidikan</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-book"></use>
        </svg>Program Studi</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/program-studi/sejarah-prodi') }}"><span
              class="nav-icon"></span>
            Sejarah</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/program-studi/visi-misi-prodi') }}"><span
              class="nav-icon"></span>
            Visi Misi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/program-studi/tujuan-prodi') }}"><span
              class="nav-icon"></span>
            Tujuan</a></li>
        <li class="nav-item"><a class="nav-link"
            href="{{ url('/dashboard/program-studi/sasaran-strategis-prodi') }}"><span class="nav-icon"></span> Sasaran
            Strategis</a></li>
      </ul>
    </li>
    <li class="nav-group">
      <a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-calendar">
          </use>
        </svg>Akademik
      </a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link"
            href="{{ url('/dashboard/akademik/peraturan-rektor-tentang-akademik') }}"><span class="nav-icon"></span>
            Peraturan Rektor</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/akademik/kalender-akademik') }}"><span
              class="nav-icon"></span>
            Kalender
            Akademik</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('dashboard/akademik/jadwal-perkuliahan') }}"><span
              class="nav-icon"></span>
            Jadwal
            Perkuliahan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/akademik/jadwal-ujian') }}"><span
              class="nav-icon"></span> Jadwal Ujian</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-group"></use>
        </svg>Mahasiswa & Alumni</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link"
            href="{{ url('/dashboard/mahasiswa-alumni/lembaga-kemahasiswaan') }}"><span class="nav-icon"></span>
            Lembaga Kemahasiswaan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/alumni/list-alumni') }}"><span
              class="nav-icon"></span>
            Registrasi Alumni</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-triangle">
          </use>
        </svg>Tridharma</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/tridharma/penelitian') }}"><span
              class="nav-icon"></span> Penelitian</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/tridharma/pengabdian') }}"><span
              class="nav-icon"></span> Pengabdian</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/tridharma/publikasi') }}"><span
              class="nav-icon"></span> Publikasi</a></li>
        <li class="nav-item"><a class="nav-link"
            href="{{ url('/dashboard/tridharma/hak-kekayaan-intelektual') }}"><span class="nav-icon"></span> Hak
            Kekayaan Intelektual</a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/jaminan-mutu') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
        </svg> Jaminan Mutu</a></li>

    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-newspaper">
          </use>
        </svg>Berita</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/berita/list-berita') }}"><span
              class="nav-icon"></span> List Berita</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/berita/kategori-berita') }}"><span
              class="nav-icon"></span> Kategori Berita</a></li>
      </ul>
    </li>

    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-newspaper">
          </use>
        </svg>Master Data</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/link-terkait') }}"><span
              class="nav-icon"></span> Link Terkait</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/visi-misi') }}"><span
              class="nav-icon"></span>Home Visi Misi</a></li>
      </ul>
    </li>

  </ul>
  <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
