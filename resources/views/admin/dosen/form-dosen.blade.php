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

                    <form
                      @if (isset($data)) action="{{ url('dashboard/dosen/' . $data->id) }}"@else action="{{ url('dashboard/dosen/form-dosen') }}" @endif
                      method="POST" enctype="multipart/form-data">
                      @csrf

                      @if (isset($data))
                        @method('PUT')
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
                        <img
                          @if (isset($data)) @if ($data->foto != null) src="{{ asset("storage/$data->foto") }}" @else src="{{ asset('storage/img/foto-dosen/default.jpg') }}" @endif
                        @else src="{{ asset('storage/img/foto-dosen/default.jpg') }}" @endif
                        alt="foto dosen" class="img-preview img-thumbnail mb-3 d-block" width="150">
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
                        <label class="form-label" for="jabatan">Jabatan</label>
                        <select class="form-select @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan">
                          <option value="">Pilih Jabatan</option>
                          @foreach ($semuaJabatan as $jabatan)
                            <option value="{{ $jabatan->id }}" @if (!isset($data) ? '' : $data->jabatan_id == $jabatan->id) selected @endif
                              @if ($jabatan->id == old('jabatan')) selected @endif>
                              {{ $jabatan->nama }}
                            </option>
                          @endforeach
                        </select>
                        @error('jabatan')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        {{-- <button id="reset" type="reset" class="btn btn-danger text-light">Reset</button> --}}
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
