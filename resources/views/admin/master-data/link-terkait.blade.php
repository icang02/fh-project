@extends('layouts.admin')

@section('main-content')
  <div class="body px-1 px-md-3 mt-1">
    <div class="container-lg">

      {{-- <div class="row justify-content-between"> --}}
      {{-- <div class="col-md-4"> --}}
      {{-- <form action="{{ url('/batas-kategori-berita') }}" method="post" id="formBatas" class="me-2">
        <select name="batas" id="batas" class="form-select">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
        </form> --}}

      {{-- <form action="/dashboard/daftar-jabatan" class="d-flex">
            <input type="text" name="search" id="search" class="form-control me-1" placeholder="Masukan Kata Kunci.."
              value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Cari</button>
          </form> --}}
      {{-- </div> --}}

      {{-- <div class="col-md-3 mt-3 mt-md-0">
          <button class="btn btn-primary" style="float: right !important" type="button" data-coreui-toggle="modal"
            data-coreui-target="#modalAddKategori">Tambah</button>
          <a href="{{ url('/dashboard/dosen/list-dosen') }}" class="btn btn-danger text-light me-1"
            style="float: right !important">Kembali</a>
        </div> --}}
      {{-- </div> --}}

      <div class="row">

        <div class="col">
          {{-- Start Flash Message --}}
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Sukses</strong> — {!! session('success') !!}
              <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          {{-- End Flash Message --}}

          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead class="table-dark">
                <tr>
                  <th>>No</th>
                  <th>Aksi</th>
                  <th>Judul</th>
                  <th>Link</th>
                </tr>
              </thead>
              <tbody>

                @if ($data->count() == 0)
                  <tr class="text-center">
                    <td colspan="7">
                      @if (request('search'))
                        Nama jabatan tidak ditemukan. <i>Keyword : {{ request('search') }}</i>
                      @else
                        Belum ada data link terkait.
                      @endif
                    </td>
                  </tr>
                @else
                  @foreach ($data as $index => $link)
                    <tr>
                      <th>{{ $index + $data->firstItem() }}</th>
                      <td>
                        <button class="badge text-bg-warning text-white border-0" data-coreui-toggle="modal"
                          data-coreui-target="#modalUpdateKategori-{{ $link->id }}"> Edit
                        </button>
                        {{-- <form action="{{ url("/dashboard/link-terkait/$link->id") }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Hapus {{ $link->id }}?')" type="submit"
                          class="badge text-bg-danger text-white border-0"> Hapus
                        </button>
                      </form> --}}
                      </td>
                      <td>{{ $link->judul }}</td>
                      <td><a href="{{ $link->link }}" target="_blank">{{ $link->link }}</a></td>
                    </tr>
                  @endforeach
                @endif

              </tbody>
            </table>
          </div>

          {{-- ISI MODAL TAMBAH --}}
          {{-- <div class="modal fade" id="modalAddKategori" tabindex="-1" aria-labelledby="modalAddKategoriLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalAddKategoriLabel">Tambah Jabatan</h5>
                  <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/dashboard/daftar-jabatan') }}" method="POST">
                  @csrf
                  <div class="modal-body">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Masukan Nama Jabatan</label>
                      <input type="text" name="nama" id="nama"
                        class="form-control @error('nama') is-invalid @enderror">
                      @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div> --}}

          @foreach ($data as $link)
            {{-- ISI MODAL UPDATE --}}
            <div class="modal fade" id="modalUpdateKategori-{{ $link->id }}" tabindex="-1"
              aria-labelledby="modalUpdateKategoriLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalUpdateKategoriLabel">Update Kategori</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <form action="{{ url("/dashboard/link-terkait/$link->id") }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="link" class="form-label">Masukan Link</label>
                        <input type="url" name="link" id="link"
                          class="form-control @error('link') is-invalid @enderror" value="{{ old('link', $link->link) }}">
                        @error('link')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>

      <div class="row">
        <div class="col">
          {{ $data->onEachSide(0.5)->withQueryString()->links() }}
        </div>
      </div>

    </div>
  </div>
@endsection
