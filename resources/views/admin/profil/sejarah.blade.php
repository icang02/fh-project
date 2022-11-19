@extends('layouts.admin')

@section('main-content')
  @php
    // Menu Profil
    request()->is('dashboard/profil/sejarah') ? ($id = 'sejarah') : '';
    request()->is('dashboard/profil/visi-misi') ? ($id = 'visi-misi') : '';
    request()->is('dashboard/profil/tujuan') ? ($id = 'tujuan') : '';
    request()->is('dashboard/profil/sasaran-strategis') ? ($id = 'sasaran-strategis') : '';
    request()->is('dashboard/profil/personalia') ? ($id = 'personalia') : '';
    request()->is('dashboard/profil/struktur-organisasi') ? ($id = 'struktur-organisasi') : '';
    request()->is('dashboard/profil/tenaga-pendidikan') ? ($id = 'tenaga-pendidikan') : '';
    request()->is('dashboard/profil/tenaga-kependidikan') ? ($id = 'tenaga-kependidikan') : '';
    request()->is('dashboard/profil/rencana-strategis') ? ($id = 'rencana-strategis') : '';
    request()->is('dashboard/profil/rencana-operasional') ? ($id = 'rencana-operasional') : '';
    // Menu Program Studi
    request()->is('dashboard/program-studi/sejarah-prodi') ? ($id = 'sejarah-prodi') : '';
    request()->is('dashboard/program-studi/visi-misi-prodi') ? ($id = 'visi-misi-prodi') : '';
    request()->is('dashboard/program-studi/tujuan-prodi') ? ($id = 'tujuan-prodi') : '';
    request()->is('dashboard/program-studi/sasaran-strategis-prodi') ? ($id = 'sasaran-strategis-prodi') : '';
    // Menu Akademik
    request()->is('dashboard/akademik/peraturan-rektor-tentang-akademik') ? ($id = 'peraturan-rektor-tentang-akademik') : '';
    request()->is('dashboard/akademik/kalender-akademik') ? ($id = 'kalender-akademik') : '';
    request()->is('dashboard/akademik/jadwal-perkuliahan') ? ($id = 'jadwal-perkuliahan') : '';
    request()->is('dashboard/akademik/jadwal-ujian') ? ($id = 'jadwal-ujian') : '';
    // Menu Mahasiswa & Alumni
    request()->is('dashboard/mahasiswa-alumni/lembaga-kemahasiswaan') ? ($id = 'lembaga-kemahasiswaan') : '';
    request()->is('dashboard/mahasiswa-alumni/registrasi-alumni') ? ($id = 'registrasi-alumni') : '';
    // Menu Tridharma
    request()->is('dashboard/tridharma/penelitian') ? ($id = 'penelitian') : '';
    request()->is('dashboard/tridharma/pengabdian') ? ($id = 'pengabdian') : '';
    request()->is('dashboard/tridharma/publikasi') ? ($id = 'publikasi') : '';
    request()->is('dashboard/tridharma/hak-kekayaan-intelektual') ? ($id = 'hak-kekayaan-intelektual') : '';
    // Menu Layanan | Fasilitas
    request()->is('dashboard/layanan/fasilitas/kriminologi') ? ($id = 'kriminologi') : '';
    request()->is('dashboard/layanan/fasilitas/konstitusi') ? ($id = 'konstitusi') : '';
    request()->is('dashboard/layanan/fasilitas/ruang-baca') ? ($id = 'ruang-baca') : '';
    // Menu Layanan Mutu
    request()->is('dashboard/jaminan-mutu') ? ($id = 'jaminan-mutu') : '';
  @endphp

  <div class="body flex-grow-1 px-1 px-md-3 mt-1">
    <div class="container-lg">
      {{-- Start Flash Message --}}
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses</strong> — {{ session('success') }}
          <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      {{-- End Flash Message --}}

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>{{ $header }} Fakultas Hukum</strong>
            </div>
            <div class="card-body">
              <div class="example">
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-739">

                    <form action="/dashboard/profil/{{ $id }}" method="POST" enctype="multipart/form-data">
                      @csrf

                      @if ($data !== null)
                        @method('PUT')
                      @endif

                      <div class="mb-3">
                        <label class="form-label" for="judul">Judul</label>
                        <input class="form-control @error('judul') is-invalid @enderror" id="judul" type="text"
                          name="judul" value="{{ old('judul', $data != null ? $data->judul : '') }}">
                        @error('judul')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="cover">Cover</label>

                        @if ($data != null && $data->cover)
                          <img src="{{ asset("storage/$data->cover") }}" class="img-preview img-thumbnail mb-3 d-block"
                            width="300">
                        @else
                          <img class="img-preview img-thumbnail mb-3" width="300" style="display: none">
                        @endif

                        <input class="form-control @error('cover') is-invalid @enderror" type="file" name="cover"
                          id="image" onchange="previewImage()" accept="image/*">
                        @error('cover')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="editor" class="form-label d-block">Body</label>
                        <textarea id="editor1" name="body" class="@error('body') is-invalid @enderror">{{ old('body', $data != null ? $data->body : '') }}</textarea>
                        @error('body')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        {{-- <button id="reset" type="button" class="btn btn-danger text-light">Reset</button> --}}
                        <a href="{{ url('/dashboard/dosen/list-dosen') }}" class="btn btn-danger text-light">Kembali</a>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
