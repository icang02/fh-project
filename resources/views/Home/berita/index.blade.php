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
            <div class="container">
              <div class="row">
                <div class="col-lg-4 d-flex justify-content-around">
                  <img style="border-radius:39px"
                    src="https://kedokteran.uho.ac.id/upload/content/content-20220915173409.jpeg" height="400">
                </div>
                <div class="col-lg-8 mt-lg-0 mt-3">
                  <p style="text-align:justify"><span style="font-size:16px"><strong>Fakultas Kedokteran Universitas Halu
                        Oleo</strong></span></p>
                  <p style="text-align:justify">Fakultas Kedokteran Universitas Halu Oleo diawali dengan berdirinya
                    Program
                    Studi Pendidikan Dokter Universitas Halu Oleo pada tahun 2009 berdasarkan Surat Keputusan Ijin
                    Operasional PSPD UHO dari Dirjen Dikti No. 4687/D/T/2008 tanggal 31 Desember 2008.</p>
                  <p style="text-align:justify">Secara definitif Fakultas Kedokteran UHO berdiri pada tahun 2011
                    berdasarkan
                    SK Rektor No. 413/SK/UN29/PP/2011 tanggal 30 September 2011 tentang berdirinya Fakultas Kedokteran
                    internal dalam lingkungan Universitas Halu Oleo. Pendirian Fakultas Kedokteran UHO bekerjasama dengan
                    Rumah Sakit Umum Daerah (RSUD) Propinsi Sulawesi Tenggara berdasarkan Perjanjian Kerja Sama (MOU)
                    antara
                    RSUD Propinsi Sulawesi Tenggara dengan Universitas Halu Oleo Nomor : 75/J29/KS/2005 dan Nomor :
                    17/1.3/RSUD/I/2005 tanggal 10 Januari 2005.</p>
                  <p style="text-align:justify">Selanjutnya sebagai bentuk dukungan Pemerintah Daerah Propinsi Sulawesi
                    Tenggara terhadap Program Pendidikan Profesi Dokter adalah ditetapkannya RSUD Bahteramas Kendari
                    sebagai
                    Rumah Sakit Pendidikan Utama Fakultas Kedokteran Universitas Halu Oleo dengan SK Menteri Kesehatan
                    Republik Indonesia nomor HK.02.03/I/1929/2013. Dalam rangka pelaksanaan kepaniteraan klinik profesi
                    dokter dibentuk Badan Koordinasi Pendidikan berdasarkan Surat Keputusan Bersama Direktur RSU
                    Bahteramas
                    Kendari No: 13/Tahun 2014 dengan Dekan FK UHO No: 06a/UN29.36/PP/2014. Berdasarkan SK tersebut jika
                    mahasiswa yang mengikuti kepaniteraan klinik melebihi jumlah yang telah ditentukan maka kegiatan
                    kepaniteraan klinik dapat dialihkan ke RS satelit. Badan Koordinasi Pendidikan (Bakordik) berkedudukan
                    di RS Pendidikan Utama.</p>
                  <p style="text-align:justify">Surat Keputusan BAN-PT Nomor: 024/BAN-PT/Ak-XV/S1/VIII/2012 tanggal 10
                    Agustus 2012 menetapkan bahwa PSPD di&nbsp; FK UHO dengan akreditasi C yang berlaku sampai 10 Agustus
                    2017. Kemajuan FK UHO sangat pesat terbukti dengan penilaian akreditasi kedua program studi di FK UHO
                    pada bulan Juli 2017 meningkat menjadi akreditasi B sesuai penilaian LamPTKes.</p>
                </div>
              </div>

              <div class="row mt-5" style="margin-bottom: -20px">
                <div class="col-lg 8">
                  <h2 class="font-weight-bolder mb-3" style="font-family: 'Playfair', serif;">Informasi Greenmetric
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

            <div class="row">
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
                          <i class="fa-solid fa-eye ms-3"></i> <span class="fw-bold"> {{ $berita->views }}x dilihat</span>

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

                @if ($index + 1 == $data->count())
                  <div class="row">
                    <div class="col">
                      {{ $data->onEachSide(0)->withQueryString()->links() }}
                    </div>
                  </div>
                @endif

                @if ($index < 1)
                  <div class="col-md-4 order-1 order-md-0">
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
