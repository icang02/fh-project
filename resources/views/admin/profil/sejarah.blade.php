@extends('layouts.admin')

@section('main-content')
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

                    {{-- Set ID --}}
                    @php
                      if (request()->is('dashboard/profil/sejarah')) {
                          $id = 1;
                      }
                      if (request()->is('dashboard/profil/visi-misi')) {
                          $id = 2;
                      }
                    @endphp

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
                          <img src="{{ asset('admin-assets/img/data-home/' . $data->cover) }}"
                            class="img-preview img-thumbnail mb-3 d-block" width="200">
                        @else
                          <img class="img-preview img-thumbnail mb-3 d-block" width="200">
                        @endif

                        <input class="form-control @error('cover') is-invalid @enderror" type="file" name="cover"
                          id="image" onchange="previewImage()" accept="image/*">
                        @error('cover')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="editor" class="form-label">Body</label>
                        <textarea id="editor" name="body" class="@error('body') is-invalid @enderror">{{ old('body', $data != null ? $data->body : '') }}</textarea>
                        @error('body')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger text-light">Reset</button>
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
