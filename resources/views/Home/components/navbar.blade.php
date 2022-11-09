<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="overflow: hidden">
  <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 txt-utama"><i class="fa fa-book me-3"></i>eLEARNING</h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
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
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Visi dan Misi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Tujuan</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Sasaran Strategis</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Personalia</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Struktur Organisasi</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Tenaga Pendidikan/Dosen</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Tenaga Kependidikan</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Rencana Strategis</a>
          <a href="{{ url('404') }}"
            class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">Rencana Operasional</a>
        </div>
      </div>
      <a href="{{ url('contact') }}"
        class="nav-item nav-link {{ request()->is('contact') ? 'active txt-utama' : '' }}">Contact</a>
      {{-- <a href="{{ url('/') }}" class="btn py-4 px-lg-5 d-none d-lg-block ">Link</a> --}}
    </div>
  </div>
</nav>
