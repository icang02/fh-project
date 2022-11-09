<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
  <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
      <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
      <a href="courses.html" class="nav-item nav-link {{ request()->is('courses') ? 'active' : '' }}">Courses</a>
      <div class="nav-item dropdown ">
        <a href="#"
          class="nav-link dropdown-toggle txt-utama {{ request()->is('team') || request()->is('testimonial') || request()->is('404') ? 'active' : '' }}"
          data-bs-toggle="dropdown">Pages</a>
        <div class="dropdown-menu fade-down m-0">
          <a href="{{ url('team') }}" class="dropdown-item {{ request()->is('team') ? 'active bg-utama' : '' }}">Our
            Team</a>
          <a href="{{ url('testimonial') }}"
            class="dropdown-item {{ request()->is('testimonial') ? 'active bg-utama' : '' }}">Testimonial</a>
          <a href="{{ url('404') }}" class="dropdown-item {{ request()->is('404') ? 'active bg-utama' : '' }}">404
            Page</a>
        </div>
      </div>
      <a href="{{ url('contact') }}"
        class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </div>
    <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block bg-utama">Join Now<i
        class="fa fa-arrow-right ms-3"></i></a>
  </div>
</nav>
