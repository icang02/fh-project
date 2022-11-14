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
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/tenaga-pendidikan') }}"><span
              class="nav-icon"></span> Tenaga Pendidikan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/tenaga-kependidikan') }}"><span
              class="nav-icon"></span> Tenaga
            Kependidikan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/rencana-strategis') }}"><span
              class="nav-icon"></span> Rencana Strategis</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/profil/rencana-operasional') }}"><span
              class="nav-icon"></span>
            Rencana Operasioanal</a></li>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/placeholders') }}"><span
              class="nav-icon"></span> Rencana Strategis</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/popovers') }}"><span
              class="nav-icon"></span> Rencana Operasioanal</a></li>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('/#') }}"><span class="nav-icon"></span>
            Panduan
            Akademik</a></li>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/accordion') }}"><span
              class="nav-icon"></span> Pendaftaran Mahasiswa Baru</a></li>
        <li class="nav-item"><a class="nav-link"
            href="{{ url('/dashboard/mahasiswa-alumni/lembaga-kemahasiswaan') }}"><span class="nav-icon"></span>
            Lembaga Kemahasiswaan</a></li>
        <li class="nav-item"><a class="nav-link"
            href="{{ url('/dashboard/mahasiswa-alumni/registrasi-alumni') }}"><span class="nav-icon"></span>
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
    <li class="nav-title">Theme</li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/colors') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
        </svg> Colors</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/typography') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
        </svg> Typography</a></li>
    <li class="nav-title">Components</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Base</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/accordion') }}"><span
              class="nav-icon"></span> Accordion</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/breadcrumb') }}"><span
              class="nav-icon"></span> Breadcrumb</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/cards') }}"><span
              class="nav-icon"></span> Cards</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/carousel') }}"><span
              class="nav-icon"></span> Carousel</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/collapse') }}"><span
              class="nav-icon"></span> Collapse</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/list-group') }}"><span
              class="nav-icon"></span> List group</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/navs-tabs') }}"><span
              class="nav-icon"></span> Navs &amp; Tabs</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/pagination') }}"><span
              class="nav-icon"></span> Pagination</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/placeholders') }}"><span
              class="nav-icon"></span> Placeholders</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/popovers') }}"><span
              class="nav-icon"></span> Popovers</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/progress') }}"><span
              class="nav-icon"></span> Progress</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/spinners') }}"><span
              class="nav-icon"></span> Spinners</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/tables') }}"><span
              class="nav-icon"></span> Tables</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/base/tooltips') }}"><span
              class="nav-icon"></span> Tooltips</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
        </svg> Buttons</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/buttons/buttons') }}"><span
              class="nav-icon"></span> Buttons</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/buttons/button-group') }}"><span
              class="nav-icon"></span> Buttons Group</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/buttons/dropdowns') }}"><span
              class="nav-icon"></span> Dropdowns</a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/charts') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-chart-pie">
          </use>
        </svg> Charts</a></li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
        </svg> Forms</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/form-control') }}"> Form
            Control</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/select') }}"> Select</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/checks-radios') }}"> Checks
            and radios</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/range') }}"> Range</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/input-group') }}"> Input
            group</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/floating-labels') }}">
            Floating labels</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/layout') }}"> Layout</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/forms/validation') }}">
            Validation</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-star"></use>
        </svg> Icons</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/icons/coreui-icons-free') }}">
            CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/icons/coreui-icons-brand') }}">
            CoreUI Icons - Brand</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/icons/coreui-icons-flag') }}">
            CoreUI Icons - Flag</a></li>
      </ul>
    </li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
        </svg> Notifications</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/notifications/alerts') }}"><span
              class="nav-icon"></span> Alerts</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/notifications/badge') }}"><span
              class="nav-icon"></span> Badge</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/notifications/modals') }}"><span
              class="nav-icon"></span> Modals</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/notifications/toasts') }}"><span
              class="nav-icon"></span> Toasts</a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/widgets') }}">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-calculator">
          </use>
        </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
    <li class="nav-divider"></li>
    <li class="nav-title">Extras</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-star"></use>
        </svg> Pages</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
              </use>
            </svg> Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
              </use>
            </svg> Register</a></li>
        <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-bug">
              </use>
            </svg> Error 404</a></li>
        <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-bug">
              </use>
            </svg> Error 500</a></li>
      </ul>
    </li>
    <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/"
        target="_blank">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-description">
          </use>
        </svg> Docs</a></li>
    <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
        <svg class="nav-icon">
          <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
        </svg> Try CoreUI
        <div class="fw-semibold">PRO</div>
      </a></li>
  </ul>
  <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
