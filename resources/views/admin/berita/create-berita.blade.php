@extends('layouts.admin')

@section('main-content')
    {{-- @php
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
    @endphp --}}

    <div class="body flex-grow-1 px-3">
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

                                        <form action="/dashboard/profil/{{ $id }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-3">
                                                <label class="form-label" for="judul">Judul</label>
                                                <input class="form-control @error('judul') is-invalid @enderror"
                                                    id="judul" type="text" name="judul" value=" ">
                                                @error('judul')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="kategori">Kategori Berita</label>
                                                <select class="form-select form-select-lg-1 mb-3"
                                                    aria-label=".form-select-lg example">
                                                    <option selected>Pilih Kategori Berita</option>
                                                    <option value="1">Pengumuman</option>
                                                    <option value="2">Event</option>
                                                    <option value="3">Informasi</option>
                                                    <option value="4">Ui Greenmetric</option>
                                                </select>
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label" for="tanggal">Tanggal Publikasi</label>
                                                <input class="form-control @error('tanggal') is-invalid @enderror"
                                                    id="tanggal" type="date" name="tanggal" value=" ">
                                                @error('tanggal')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label" for="cover">Cover</label>

                                                <img class="img-preview img-thumbnail mb-3" width="300"
                                                    style="display: none">

                                                <input class="form-control @error('cover') is-invalid @enderror"
                                                    type="file" name="cover" id="image" onchange="previewImage()"
                                                    accept="image/*">
                                                @error('cover')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="editor" class="form-label">Isi Berita</label>
                                                <textarea id="editor" name="body" class="@error('body') is-invalid @enderror"> </textarea>
                                                @error('body')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a href="{{ '/dashboard/berita/list-berita' }}" id="reset"
                                                    type="reset" class="btn btn-danger text-light">Kembali</a>
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

    <script>
        const btnReset = document.querySelector('#reset');
        const editor = document.querySelector('#editor');
        const judul = document.querySelector('#judul');
        btnReset.addEventListener('click', function() {
            judul.value = "Fifth Avenue, New York City";
        });
    </script>
@endsection
