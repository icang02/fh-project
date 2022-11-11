@extends('layouts.admin')

@section('main-content')
  <div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Sejarah Fakultas Hukum</strong>
            </div>
            <div class="card-body">
              <div class="example">
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-739">

                    @if ($data == null)
                      <form action="/dashboard/profil/sejarah" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="judul">Judul</label>
                          <input class="form-control" id="judul" type="text" name="judul">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="cover">Cover</label>
                          <input class="form-control" id="cover" type="file" name="cover">
                        </div>

                        <div class="mb-3">
                          <label for="editor" class="form-label">Isi Konten</label>
                          <textarea id="editor" name="body"></textarea>
                        </div>

                        <div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <button type="reset" class="btn btn-danger text-light">Reset</button>
                        </div>
                      </form>
                    @else
                      <form action="/dashboard/profil/sejarah" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="judul">Judul</label>
                          <input class="form-control" id="judul" type="text" name="judul"
                            value="{{ old('judul', $data->judul) }}">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="cover">Cover</label>
                          <input class="form-control" id="cover" type="file" name="cover">
                        </div>

                        <div class="mb-3">
                          <label for="editor" class="form-label">Isi Konten</label>
                          <textarea id="editor" name="body">{{ old('body', $data->body) }}</textarea>
                        </div>

                        <div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <button type="reset" class="btn btn-danger text-light">Reset</button>
                        </div>
                      </form>
                    @endif

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
