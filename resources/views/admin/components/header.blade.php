<header class="header header-sticky mb-4 mt-1">
  <div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button"
      onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
      <svg class="icon icon-lg">
        <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
      </svg>
    </button><a class="header-brand d-md-none" href="#">
      <svg width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#full"></use>
      </svg></a>
    <ul class="header-nav d-none d-md-flex">
      <li class="nav-item"><a class="nav-link" href="#">Fakultas Hukum</a></li>
    </ul>
    <ul class="header-nav ms-auto"></ul>
    <ul class="header-nav ms-3">
      <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
          aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('home-assets/img/logo-uho.png') }}"
              alt="admin"></div>
        </a>
        <div class="dropdown-menu dropdown-menu-end pt-0">
          <div class="dropdown-header bg-light py-2">
            <div class="fw-semibold">Administrator</div>
          </div>

          <form action="{{ url('auth/logout') }}" method="POST">
            @csrf
            <button class="dropdown-item" type="submit">
              <svg class="icon me-2">
                <use xlink:href="{{ asset('admin-assets') }}/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                </use>
              </svg> Logout
            </button>
          </form>

        </div>
      </li>
    </ul>
  </div>

  {{-- <div class="header-divider"></div> --}}

  {{-- <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
          <span>Home</span>
        </li>
        <li class="breadcrumb-item active"><span>Dashboard</span></li>
      </ol>
    </nav>
  </div> --}}

</header>
