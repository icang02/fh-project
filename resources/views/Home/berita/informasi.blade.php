@extends('layouts.home')

@section('main-content')
  <!-- Service Start -->
  <div class="container-xxl px-0 px-md-5 py-5 pt-custom">
    <div class="container px-0 px-md-5">
      <div class="row">
        <div class="col">
          <h5 class="text-center">PUSAT INFORMASI</h5>
          <hr class="w-25 mx-auto my-5" style="height: 3px">
          <img src="" class="img-fluid">

          <div class="isi mt-3">

            <div class="row">
              @if ($data->count() == 0)
                <h5 class="text-center">Belum ada berita</h5>
              @endif

              @foreach ($data as $index => $berita)
                <div class="col-md-8">
                  <div class="shadow p-3 mb-5 bg-body rounded-3">
                    <div class="card border border-white" style="width: 100%;">
                      <img
                        src="https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/2021/07/13/gambar-ilustrasi-bisa-memperjela-20210713123218.jpg"
                        class="card-img-top" alt="Image">
                      <div class="card-body">
                        <h5 class="card-title">{{ $berita->judul }}</h5>
                        <p class="text-muted mt-3" style="font-size: 0.85rem">{{ $berita->tanggal }}
                          <span class="fw-bold">@ 1x dilihat</span>

                          @if (str()->lower($berita->kategori_berita->nama) == 'event')
                            <span
                              class="ms-2 badge btn btn-danger btn-sm rounded-3">{{ str()->title($berita->kategori_berita->nama) }}
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
                          @endif
                        </p>
                        <p class="card-text">{!! $berita->body !!}</p>
                      </div>

                      <div class="card-body">
                        <a href="#" class="btn btn-danger card-link px-3 py-2"
                          style="border-radius: 6px; font-size: 0.8rem;">Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>

                @if ($index < 1)
                  <div class="col-md-4 order-1 order-md-0">
                    <div class="shadow p-3 mb-5 bg-body rounded-3">
                      <div class="card border border-white" style="width: 100%;">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Kategori</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Event</li>
                          <li class="list-group-item">Berita</li>
                          <li class="list-group-item">Pengumuman</li>
                          <li class="list-group-item">UI Greenmetric</li>
                        </ul>

                        <div class="card-body">
                          <div class="card" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img
                                  src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/27/e06af444-2e70-4f3e-b4d1-edfd3ed21d55.jpg"
                                  class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text.
                                  </p>
                                  <p class="card-text"><small class="text-muted">Last updated 3
                                      mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
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
