@extends('layouts.home')

@section('main-content')
  <!-- Service Start -->
  <div class="container-xxl py-5 pt-custom">
    <div class="container px-0 px-md-5">
      <div class="row justify-content-center">
        @if ($data == null)
          <h5 class="text-muted text-center">Silahkan input Sejarah Fakultas Hukum melalui halaman Admin</h5>
        @else
          <div class="col-md-10">
            <h5 class="text-center">{{ $data->judul }}</h5>
            <hr class="w-25 mx-auto my-5" style="height: 3px">
            <img src="https://www.uho.ac.id/fakultas/fhukum/wp-content/uploads/sites/7/2022/06/aa.png" class="img-fluid">

            <div class="isi mt-5">
              {!! $data->body !!}
            </div>

            <hr class="mx-auto my-5" style="height: 3px">

            <div class="text-center">
              <a href="#" class="btn btn-danger btn-sm">KEMBALI KE ATAS</a>
            </div>

            <img src="https://www.uho.ac.id/fakultas/fhukum/wp-content/uploads/sites/7/2019/04/UHO-BISA.png"
              class="img-fluid d-block mt-3 mx-auto">
          </div>
        @endif
      </div>
    </div>
  </div>
  <!-- Service End -->
@endsection
