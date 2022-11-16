@extends('layouts.home')

@section('main-content')
  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div>
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3 fs-5">Sistem Pembelajaran Dalam Jaringan (SPADA)
        </h6>
        <hr class="mx-auto w-25" style="height: 3px; margin-top: 40px; margin-bottom: 50px">
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12 mb-3 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor"
                class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                <path
                  d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                <path
                  d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                <path
                  d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z" />
              </svg>
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn  btn-primary mx-1" href="{{ $links[0]->link }}" target="_blank">Klik di Sini</a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Form Usulan Pembukaan Kelas Mata Kuliah</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-3 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg>
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn  btn-primary mx-1" href="{{ $links[1]->link }}" target="_blank">Klik di Sini</a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Form Usulan Pembuatan Akun Dosen dan Mahasiswa</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12  mb-3 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor"
                class="bi bi-key-fill" viewBox="0 0 16 16">
                <path
                  d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              </svg>
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn  btn-primary mx-1" href="{{ $links[2]->link }}" target="_blank">Klik di Sini</a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Reset Akun Spada Dosen dan Mahasiswa</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!-- Team End -->
@endsection
