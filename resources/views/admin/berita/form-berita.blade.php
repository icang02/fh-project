@extends('layouts.admin')

@section('main-content')
  <div class="body flex-grow-1 px-3 mt-1">
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

                      <div class="mb-3">
                        <label class="form-label" for="judul">Judul</label>
                        <input class="form-control @error('judul') is-invalid @enderror" id="judul" type="text"
                          name="judul" value=" ">
                        @error('judul')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="kategori">Kategori Berita</label>
                        <select class="form-select form-select-lg-1 mb-3" aria-label=".form-select-lg example">
                          <option selected>Pilih Kategori Berita</option>
                          <option value="1">Pengumuman</option>
                          <option value="2">Event</option>
                          <option value="3">Informasi</option>
                          <option value="4">Ui Greenmetric</option>
                        </select>
                      </div>


                      <div class="mb-3">
                        <label class="form-label" for="tanggal">Tanggal Publikasi</label>
                        <input class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" type="date"
                          name="tanggal" value=" ">
                        @error('tanggal')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>


                      <div class="mb-3">
                        <label class="form-label" for="cover">Cover</label>

                        <img class="img-preview img-thumbnail mb-3" width="300" style="display: none">

                        <input class="form-control @error('cover') is-invalid @enderror" type="file" name="cover"
                          id="image" onchange="previewImage()" accept="image/*">
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
                        <a href="{{ '/dashboard/berita/list-berita' }}" id="reset" type="reset"
                          class="btn btn-danger text-light">Kembali</a>
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
