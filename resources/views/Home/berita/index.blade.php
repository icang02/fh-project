<style>
  .form-search form input {
    margin-top: 0 !important;
  }

  .card-container {
    position: relative;
  }

  @media screen and (min-width:767px) {
    .card-berita {
      position: absolute;
      right: 0;
    }
  }
</style>

@extends('layouts.home')

@section('main-content')
  <!-- Service Start -->
  <div class="container-xxl px-0 px-md-5 py-5 pt-custom overflow-hidden">
    <div class="container px-0 px-md-5">
      <div class="row">
        <div class="col">
          <h4 class="text-center">
            @if (request('search'))
              {{ $header }}
            @else
              {{ $header }}
            @endif
          </h4>

          <hr class="w-25 mx-auto my-5" style="height: 3px">

          @if (request('search'))
            <p class="text-muted text-center mt-4 mb-5">Hasil Pencarian : <i>{{ request('search') }}</i></p>
          @endif

          {{-- Start Ui Greenmetric --}}
          @if (str()->lower($header) == 'ui greenmetric')
            @php
              $fotoDekan = App\Models\Dosen::where('jabatan_id', 1)
                  ->get()
                  ->first();
            @endphp

            <div class="container">
              <div class="row">
                {{-- <div class="col-lg-4 d-flex justify-content-around">
                  @if ($fotoDekan->foto == null)
                    <img style="border-radius:39px" src="{{ asset('storage/img/1-default-img/foto-dosen.jpg') }}"
                      height="400">
                  @else
                    <img style="border-radius:39px" src="{{ asset("storage/$fotoDekan->foto") }}" height="400">
                  @endif
                </div> --}}
                <div class="col-lg-12 mt-lg-0 mt-3 mb-2" style="text-align: justify">
                  UI GreenMetric merupakan inovasi UI yang telah dikenal luas di dunia internasional sebagai
                  pemeringkatan perguruan tinggi pertama di dunia berbasis komitmen tinggi dalam pengelolaan lingkungan
                  hidup kampus. Kini, UI GreenMetric of World Universities semakin mendunia dan semakin banyak diikuti
                  oleh perguruan tinggi di berbagai negara. Pada 2020, jumlah peserta mencapai 912 universitas dari 84
                  negara di dunia, bertambah dari sebelumnya (2019) sebanyak 780 Perguruan Tinggi dari 85 negara.
                  Beberapa negara yang baru bergabung di tahun 2020 adalah Kuwait, Lithuania, dan Belarusia. Di
                  Indonesia, terdapat 88 Perguruan Tinggi yang telah berpartisipasi dalam UI GreenMetric. Penilaian UI
                  GreenMetric 2020 dilandasi atas tiga pilar, yakni Lingkungan hidup, Ekonomi, dan sosial dengan bobot
                  indikator penilaian yang terdiri atas Keadaan dan Infrastruktur Kampus (15%), Energi dan Perubahan
                  Iklim (21%), Pengelolaan Sampah (18%), Penggunaan Air (10%), Transportasi (18%), serta Pendidikan dan
                  Riset (18%).
                  </p>
                </div>
                <div class="col col-lg-4 col-sm-6 col-12 mb-3">
                  <img width="100%" src="{{ asset('home-assets/img/green/green1.jpg') }}" alt="">
                </div>
                <div class="col col-lg-4 col-sm-6 col-12 mb-3">
                  <img width="100%" src="{{ asset('home-assets/img/green/green2.jpg') }}" alt="">
                </div>
                <div class="col col-lg-4 col-sm-6 col-12 mb-3">
                  <img width="100%" src="{{ asset('home-assets/img/green/green3.jpg') }}" alt="">
                </div>
                <div class="col col-lg-4 col-sm-6 col-12 mb-3">
                  <img width="100%" src="{{ asset('home-assets/img/green/green4.jpg') }}" alt="">
                </div>
                <div class="col col-lg-4 col-sm-6 col-12 mb-3">
                  <img width="100%" src="{{ asset('home-assets/img/green/green5.jpg') }}" alt="">
                </div>
                <div class="col col-lg-4 col-sm-6 col-12 mb-3">
                  <img width="100%" src="{{ asset('home-assets/img/green/green6.jpg') }}" alt="">
                </div>
              </div>

              <div class="row mt-5" style="margin-bottom: -20px">
                <div class="col-lg 8">
                  <h2>Informasi Greenmetric
                    Terbaru
                  </h2>
                  <div class="d-flex justify-content-between mb-3">
                    <p>Kumpulan Informasi mengenai Greenmetric yang selalu up-to-date</p>
                  </div>
                </div>
              </div>

            </div>
            <hr class="mb-lg-4 mb-0">
          @endif
          {{-- End Ui Greenmetric --}}

          <div class="isi mt-3">

            <div class="row card-container">
              @if ($data->count() == 0)
                <h5 class="text-center text-muted">
                  {{ request('search') ? 'Judul berita tidak ditemukan' : 'Belum ada berita' }}
                </h5>
              @endif

              @foreach ($data as $index => $berita)
                <div class="col-md-8">
                  <div class="shadow p-3 mb-4 bg-body rounded-3">
                    <div class="card border border-white" style="width: 100%;">
                      @if ($berita->cover == null)
                        <img src="{{ asset('storage/img/1-default-img/cover-berita.png') }}" class="card-img-top"
                          alt="Image">
                      @else
                        <img src="{{ asset('storage/' . $berita->cover) }}" class="card-img-top" alt="Image">
                      @endif
                      <div class="card-body">
                        <h5 class="card-title">{{ $berita->judul }}</h5>
                        <p class="text-muted mt-3" style="font-size: 0.85rem">
                          <i class="fa-sharp fa-solid fa-calendar-days me-1"></i>
                          {{ \Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('d F Y') }}
                          <i class="fa-solid fa-eye ms-3"></i> <span class="fw-bold"> {{ $berita->views }}x
                            dilihat</span>

                          @if (str()->lower($berita->kategori_berita->nama) == 'event')
                            <span class="ms-2 badge btn btn-primary btn-sm rounded-3"
                              style="background-color: rgb(46, 182, 255); border-color: rgb(46, 182, 255);">{{ str()->title($berita->kategori_berita->nama) }}
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
                        <p class="card-text">
                          {{ Str::limit(strip_tags($berita->body), 150, '...') }}
                        </p>
                      </div>

                      <div class="card-body">
                        <a href="{{ url('/berita' . '/' . str()->lower($berita->kategori_berita->nama) . '/' . $berita->id) }}"
                          class="btn btn-danger card-link px-3 py-2"
                          style="border-radius: 6px; font-size: 0.8rem;">Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>

                @if ($index < 1)
                  @if ($data->count() <= 1)
                    <div class="col-md-4 order-1 order-md-0">
                    @else
                      <div class="col-md-4 order-1 order-md-0 card-berita">
                  @endif
                  <div class="shadow p-3 mb-5 bg-body rounded-3">
                    <div class="card border border-white" style="width: 100%;">
                      <div class="card-body">
                        <h5 class="card-title">Artikel Terbaru</h5>
                        <hr>
                      </div>
                      <div class="card-body">

                        @include('home.berita.components.card-latest', ['allBerita' => $allBerita])

                      </div>
                    </div>
                  </div>
            </div>
            @endif

            @if ($index + 1 == $data->count())
              <div class="row">
                <div class="col">
                  {{ $data->onEachSide(0)->withQueryString()->links() }}
                </div>
              </div>
            @endif
            @endforeach
          </div>

        </div>

        <hr class="mx-auto my-5" style="height: 3px">
        @include('home.components.jagad-uho')

      </div>
    </div>
  </div>
  </div>
  <!-- Service End -->
@endsection
