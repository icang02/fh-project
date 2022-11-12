@extends('layouts.home')

@section('main-content')
  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header"
    style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url({{ asset('home-assets/img/carousel-1.jpg') }});">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center" style="opacity: 0">
          <h1 class="display-3 text-white animated slideInDown">About Us</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Team Start -->
  <div class="container-xxl py-5">
    @if ($data == null)
      <h5 class="text-center text-muted">Silahkan lengkapi data melalui halaman admin</h5>
    @else
      <div>
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3 fs-5">{{ $data->judul }}</h6>
          <hr class="mx-auto w-25" style="height: 3px; margin-top: 40px; margin-bottom: 50px">
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative d-flex justify-content-center">
              <div class="bg-light p-md-5 p-3 shadow">
                <small>{!! $data->body !!}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
  </div>
  <!-- Team End -->

  <hr class="mx-auto my-5 w-50" style="height: 3px">

  <div class="text-center">
    <a href="#" class="btn btn-danger btn-sm">KEMBALI KE ATAS</a>
  </div>

  <img src="https://www.uho.ac.id/fakultas/fhukum/wp-content/uploads/sites/7/2019/04/UHO-BISA.png"
    class="img-fluid d-block mt-3 mx-auto">
  </div>
@endsection
