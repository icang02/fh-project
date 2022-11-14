@extends('layouts.admin')

@section('main-content')
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

                    <form action="{{ url('/dashboard/berita/form-berita') }}" method="POST"
                      enctype="multipart/form-data">
                      @csrf
                      @if (isset($data))
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ !isset($data) ? '' : $data->id }}">
                      @endif

                      <div class="mb-3">
                        <label class="form-label" for="nama">Nama Dosen</label>
                        <input class="form-control @error('nama') is-invalid @enderror" id="nama" type="text"
                          name="nama" value="{{ old('nama', !isset($data) ? '' : $data->nama) }}">
                        @error('nama')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="foto">Foto Dosen</label>
                        <img src="{{ asset('storage/img/foto-dosen/default.png') }}" alt="foto dosen"
                          class="img-preview img-thumbnail mb-3 d-block" width="150">
                        <label class="text-muted form-label">Upload foto dengan rasio 3:4 dan tidak lebih dari
                          4Mb.</label>
                        <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto"
                          id="image" onchange="previewImage()" accept="image/*">
                        @error('foto')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="nip">NIP</label>
                        <input class="form-control @error('nip') is-invalid @enderror" id="nip" type="text"
                          name="nip" value="{{ old('nip', !isset($data) ? '' : $data->nip) }}">
                        @error('nip')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="nidn">NIDN</label>
                        <input class="form-control @error('nidn') is-invalid @enderror" id="nidn" type="text"
                          name="nidn" value="{{ old('nidn', !isset($data) ? '' : $data->nidn) }}">
                        @error('nidn')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="text"
                          name="email" value="{{ old('email', !isset($data) ? '' : $data->email) }}">
                        @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="kategori">Jabatan</label>
                        <select class="form-select @error('kategori') is-invalid @enderror" id="kategori"
                          name="kategori">
                          <option>Pilih Jabatan</option>
                          <option value="dekan" @if (!isset($data) ? '' : $data->jabatan == 'dekan') selected @endif>Dekan</option>
                          <option value="wakil dekan" @if (!isset($data) ? '' : $data->jabatan == 'wakil dekan') selected @endif>Wakil Dekan
                          </option>
                          <option value="kepala lektor" @if (!isset($data) ? '' : $data->jabatan == 'kepala lektor') selected @endif>Kepala Lektor
                          </option>
                          <option value="lektor" @if (!isset($data) ? '' : $data->jabatan == 'lektor') selected @endif>Lektor</option>
                          <option value="dosen" @if (!isset($data) ? '' : $data->jabatan == 'dosen') selected @endif>Dosen</option>
                          <option value="asisten ahli" @if (!isset($data) ? '' : $data->jabatan == 'asisten ahli') selected @endif>Asisten Ahli
                          </option>
                        </select>
                        @error('kategori')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="detail_jabatan">Detail Jabatan</label>
                        <input class="form-control @error('detail_jabatan') is-invalid @enderror" id="detail_jabatan"
                          type="text" name="detail_jabatan"
                          value="{{ old('detail_jabatan', !isset($data) ? '' : $data->detail_jabatan) }}">
                        @error('detail_jabatan')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button id="reset" type="reset" class="btn btn-danger text-light">Reset</button>
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
