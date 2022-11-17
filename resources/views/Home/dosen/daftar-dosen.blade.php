@extends('layouts.home')

@section('main-content')
  <!-- Service Start -->
  <div class="container-xxl px-0 px-md-5 py-5 pt-custom">
    <div class="container px-0 px-md-5">
      <div class="row">
        <div class="col">
          @if (request()->is('dosen'))
            <h4 class="text-center">DAFTAR TENAGA PENDIDIKAN/DOSEN</h4>
          @else
            <h4 class="text-center">DAFTAR TENAGA KEPENDIDIKAN</h4>
          @endif
          <hr class="w-25 mx-auto my-5" style="height: 3px">
          <img src="" class="img-fluid">

          <div class="isi mt-3">
            <div class="container">
              <div class="row">
                <div class="col-md-8">

                  @if (request()->is('dosen*'))
                    <h5 style="margin-bottom: 25px">Daftar Dosen Fakultas Hukum Universitas Halu Oleo</h5>
                  @else
                    <h5 style="margin-bottom: 25px">Daftar Tenaga Kependidikan Fakultas Hukum Universitas Halu Oleo</h5>
                  @endif

                  @if ($semuaDosen->count() == 0)
                    <p class="text-center text-muted">
                      @if (request('search'))
                        Data tidak ditemukan.
                      @else
                        Belum ada data.
                      @endif
                    </p>
                  @endif

                  @foreach ($semuaDosen as $dosen)
                    <button style="width: 100%; margin-bottom:7px; margin-top:7px;" class="btn btn-primary" type="button"
                      data-bs-toggle="collapse" data-bs-target="#dosen-{{ $dosen->id }}" aria-expanded="false"
                      aria-controls="collapseExample">
                      {{ $dosen->nama }}
                    </button>

                    <div class="collapse" id="dosen-{{ $dosen->id }}">
                      <div style="margin-top: 10px" class="card card-body">
                        <div class="card border border-white" style="width: 100%;">
                          <div class="card-body">
                            <h6>Profil Dosen</h6>
                          </div>
                          <div class="card-body">
                            <div class="card border border-white" style="max-width: 540px;">
                              <div class="row">
                                <div class="col-lg-3 col-3">
                                  @if ($dosen->foto == null)
                                    <img src="{{ asset('storage/img/foto-dosen/default.jpg') }}" alt="Image"
                                      width="110" style="border-radius: 6px">
                                  @else
                                    <img src="{{ asset("storage/$dosen->foto") }}" alt="Image" width="110"
                                      style="border-radius: 6px">
                                  @endif
                                </div>
                                <div class="col-lg-9 col-9">
                                  <h6>
                                    <a class="text-dark fw-bold">{{ $dosen->jabatan->nama }}</a>
                                  </h6>
                                  <h6>
                                    <a class="text-dark">NIP : {{ $dosen->nip ?? '' }}</a>
                                  </h6>

                                  @if (request()->is('dosen*'))
                                    <h6>
                                      <a class="text-dark">NIDN : {{ $dosen->nidn }}</a>
                                    </h6>
                                  @endif


                                  <p class="text-muted">
                                    <small>
                                      <i class="fa-solid fa-at"></i> <span
                                        class="fw-bold"><i>{{ $dosen->email }}</i></span>
                                    </small>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach

                  {{-- <nav style="margin-top: 10px" aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav> --}}

                  <div class="row mt-3">
                    <div class="col">
                      {{ $semuaDosen->onEachSide(0.5)->withQueryString()->links() }}
                    </div>
                  </div>
                </div>


                <div class="col-md-4 order-1 order-md-0">
                  <div class="shadow p-3 mb-3 bg-body rounded-3">
                    <div class="card border border-white" style="width: 100%;">
                      <div class="card-body">
                        <h5 class="card-title">Pencarian Data</h5>
                        <hr>
                      </div>
                      <div class="card-body">
                        <div class="card border border-white" style="max-width: 540px;">
                          <div class="row">
                            {{-- <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <span style="width: 90px" class="btn btn-secondary" id="basic-addon2">cari</span>
                            </div> --}}
                            @if (request()->is('dosen*'))
                              <form action="{{ url('/dosen/daftar-dosen') }}" class="d-flex">
                                <input type="text" name="search" id="search" class="form-control me-1"
                                  placeholder="Cari data.." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary" autocomplete="off">Cari</button>
                              </form>
                            @else
                              <form action="{{ url('/tenaga-kependidikan') }}" class="d-flex">
                                <input type="text" name="search" id="search" class="form-control me-1"
                                  placeholder="Cari data.." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary" autocomplete="off">Cari</button>
                              </form>
                            @endif
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>

          <hr class="mx-auto my-5" style="height: 3px">

          <div class="text-center">
            <a href="#" class="btn btn-danger btn-sm">KEMBALI KE ATAS</a>
          </div>

          <img src="https://www.uho.ac.id/fakultas/fhukum/wp-content/uploads/sites/7/2019/04/UHO-BISA.png"
            class="img-fluid d-block mt-3 mx-auto">
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->
@endsection
