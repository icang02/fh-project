@extends('layouts.home')

@section('main-content')
  <!-- Header Start -->
  @php
    if (!isset($data)) {
        $img = 'storage/img/1-default-img/cover-berita.png';
    } else {
        $img = "storage/$data->cover";
        if ($data->cover == null) {
            $img = 'storage/img/1-default-img/cover-berita.png';
        }
    }
  @endphp

  <div class="container-fluid bg-primary py-5 mb-5 page-header"
    style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url({{ asset($img) }});">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center" style="opacity: 0">
          <h1 class="display-3 text-white animated slideInDown">About </h1>
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
              <div class="bg-light p-md-5 p-3 shadow w-100">
                <small>{!! $data->body !!}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
  <!-- Team End -->

  <hr class="mx-auto my-5 w-50" style="height: 3px">
  @include('home.components.jagad-uho')
@endsection
