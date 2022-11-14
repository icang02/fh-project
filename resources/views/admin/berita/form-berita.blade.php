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
                        <label class="form-label" for="judul">Judul</label>
                        <input class="form-control @error('judul') is-invalid @enderror" id="judul" type="text"
                          name="judul" value="{{ old('judul', !isset($data) ? '' : $data->judul) }}">
                        @error('judul')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="kategori">Kategori Berita</label>
                        <select class="form-select @error('kategori') is-invalid @enderror" id="kategori"
                          name="kategori">
                          <option value="">Pilih Kategori Berita</option>
                          @foreach ($semuaKategori as $kategori)
                            <option value="{{ $kategori->id }}" @if ($kategori->id == !isset($data) ? '' : $data->kategori_berita_id) selected @endif
                              @if ($kategori->id == old('kategori')) selected @endif>
                              {{ $kategori->nama }}</option>
                          @endforeach
                        </select>
                        @error('kategori')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="tanggal">Tanggal Publikasi</label>
                        <input class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" type="date"
                          name="tanggal" value="{{ old('tanggal', !isset($data) ? '' : $data->tanggal) }}">
                        @error('tanggal')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="cover">Cover</label>
                        <img @if (isset($data)) src="{{ asset("storage/$data->cover") }}" @endif
                          alt="Cover berita" class="img-preview img-thumbnail mb-3"
                          @if (!isset($data)) style="display: none" @else style="display: block" @endif
                          width="300">
                        <input class="form-control @error('cover') is-invalid @enderror" type="file" name="cover"
                          id="image" onchange="previewImage()" accept="image/*">
                        @error('cover')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="editor" class="form-label">Isi Berita</label>
                        <textarea id="editor" name="body" class="@error('body') is-invalid @enderror">
                          {{ old('body', !isset($data) ? '' : $data->body) }}
                        </textarea>
                        @error('body')
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
