@extends('layouts.home')

@section('main-content')
  <!-- Service Start -->
  <div class="container-xxl px-0 px-md-5 py-5 pt-custom">
    <div class="container px-0 px-md-5">
      <div class="row">
        <div class="col">
          <h4 class="text-center">{{ $berita->judul }}</h4>
          <hr class="w-25 mx-auto my-5" style="height: 3px">
          <img src="" class="img-fluid">

          <div class="isi mt-3">

            <div class="row">

              <div class="col-md-8">
                <div class="shadow p-3 mb-5 bg-body rounded-3">
                  <div class="card border border-white" style="width: 100%;">
                    <img
                      src="https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/2021/07/13/gambar-ilustrasi-bisa-memperjela-20210713123218.jpg"
                      class="card-img-top" alt="Image">
                    <div class="card-body">
                      <h5 class="card-title">{{ $berita->judul }}</h5>
                      <p class="text-muted mt-3" style="font-size: 0.85rem">
                        <i class="fa-sharp fa-solid fa-calendar-days me-1"></i>
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('d F Y') }}
                        <i class="fa-solid fa-eye ms-3"></i> <span class="fw-bold"> {{ $berita->views }}x dilihat</span>

                        @if (str()->lower($berita->kategori_berita->nama) == 'event')
                          <span class="ms-2 badge btn btn-primary btn-sm rounded-3"
                            style="background-color: blue; border-color: blue;">{{ str()->title($berita->kategori_berita->nama) }}
                          </span>
                        @elseif (str()->lower($berita->kategori_berita->nama) == 'informasi')
                          <span
                            class="ms-2 badge btn btn-secondary btn-sm rounded-3">{{ str()->title($berita->kategori_berita->nama) }}
                          </span>
                        @elseif (str()->lower($berita->kategori_berita->nama) == 'pengumuman')
                          <span
                            class="ms-2 badge btn btn-warning btn-sm rounded-3">{{ str()->title($berita->kategori_berita->nama) }}
                          </span>
                        @elseif (str()->lower($berita->kategori_berita->nama) == 'ui greenmetric')
                          <span
                            class="ms-2 badge btn btn-success btn-sm rounded-3">{{ str()->title($berita->kategori_berita->nama) }}
                          </span>
                        @else
                          <span
                            class="ms-2 badge btn btn-secondary btn-sm rounded-3">{{ str()->title($berita->kategori_berita->nama) }}
                          </span>
                        @endif
                      </p>
                      <p class="card-text">{!! $berita->body !!}</p>
                    </div>

                    <div class="card-body ms-auto">
                      <div class="btn btn-primary">Icon</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 order-1 order-md-0">
                <div class="shadow p-3 mb-5 bg-body rounded-3">
                  <div class="card border border-white" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">Artikel Terbaru</h5>
                      <hr>
                    </div>
                    <div class="card-body">

                      @foreach ($allBerita as $berita)
                        <div class="card border border-white" style="max-width: 540px;">
                          <div class="row">
                            <div class="col-lg-3 col-3">
                              <img src="{{ asset('storage/img/data-home/carousel-1.jpg') }}" alt="Image" width="70"
                                height="70" style="border-radius: 6px">
                            </div>
                            <div class="col-lg-9 col-9">
                              <h6>
                                <a href="{{ url('/berita' . '/' . str()->lower($berita->kategori_berita->nama) . '/' . $berita->id) }}"
                                  class="text-dark">{{ $berita->judul }}</a>
                              </h6>
                              <p class="text-muted">
                                <small>
                                  <i class="fa-solid fa-eye"></i> <span class="fw-bold"><i>{{ $berita->views }}x
                                      dilihat</i></span>
                                </small>
                              </p>
                            </div>
                          </div>

                        </div>
                        <hr>
                      @endforeach

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
