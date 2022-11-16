@extends('layouts.admin')

@section('main-content')
  <div class="body px-1 px-md-3 mt-1">
    <div class="container-lg">

      <div class="row justify-content-between">
        <div class="col-md-8 d-flex">
          {{-- <form action="{{ url('/batas-kategori-berita') }}" method="post" id="formBatas">
            <select name="batas" id="batas" class="form-select">
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
          </form> --}}

          @if (request()->is('dashboard/dosen/list-dosen'))
            <form action="{{ url('/dashboard/dosen/list-dosen') }}" class="d-flex">
            @else
              <form action="{{ url('/dashboard/tenaga-kependidikan') }}" class="d-flex">
          @endif
          <input type="text" name="search" id="search" class="form-control me-1" placeholder="Masukan Kata Kunci.."
            value="{{ request('search') }}">
          <button type="submit" class="btn btn-primary" autocomplete="off">Cari</button>
          </form>
        </div>

        <div class="col-md-4 mt-3 mt-md-0">
          @if (request()->is('dashboard/dosen/list-dosen'))
            <a href="{{ url('/dashboard/dosen/form-dosen') }}" class="btn btn-primary"
              style="float: right !important">Tambah Dosen</a>
          @else
            <a href="{{ url('/dashboard/form-tenaga-kependidikan') }}" class="btn btn-primary"
              style="float: right !important">Tambah Data</a>
          @endif
          <a href="{{ url('/dashboard/daftar-jabatan') }}" class="btn btn-warning me-1"
            style="float: right !important">Daftar Jabatan</a>
        </div>
      </div>

      <div class="row mt-3">

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
                  <th style="width: 3%" scope="row">No</th>
                  <th style="width: 8%">Aksi</th>
                  <th style="width: 13%">Nama Dosen</th>
                  <th style="width: 7%">NIP</th>
                  @if (request()->is('dashboard/dosen/list-dosen*'))
                    <th style="width: 7%">NIDN</th>
                  @endif
                  <th style="width: 9%">Jabatan</th>
                </tr>
              </thead>
              <tbody>

                @if ($data->count() == 0)
                  <tr class="text-center">
                    <td colspan="7">
                      @if (request('search'))
                        Data dosen tidak ditemukan. <i>Keyword : {{ request('search') }}</i>
                      @else
                        Belum ada data dosen.
                      @endif
                    </td>
                  </tr>
                @else
                  @foreach ($data as $index => $dosen)
                    <tr>
                      <th scope="row">{{ $index + $data->firstItem() }}</th>
                      <td>
                        @if (request()->is('dashboard/dosen/list-dosen*'))
                          <a href="{{ url('/dashboard/dosen/edit/' . $dosen->id) }}"
                            class="badge text-bg-warning text-white border-0">
                            Edit </a>
                          <form action="{{ url('/dashboard/dosen/' . $dosen->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Hapus data dosen?')" type="submit"
                              class="badge text-bg-danger text-white border-0"> Hapus
                            </button>
                          </form>
                        @else
                          <a href="{{ url('/dashboard/tenaga-kependidikan/edit/' . $dosen->id) }}"
                            class="badge text-bg-warning text-white border-0">
                            Edit </a>
                          <form action="{{ url('/dashboard/tenaga-kependidikan/' . $dosen->id) }}" method="post"
                            class="d-inline">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Hapus data tenaga kependidikan?')" type="submit"
                              class="badge text-bg-danger text-white border-0"> Hapus
                            </button>
                          </form>
                        @endif

                      </td>
                      <td>{{ $dosen->nama }}</td>
                      <td>{{ $dosen->nip ?? '-' }}</td>
                      @if (request()->is('dashboard/dosen/list-dosen*'))
                        <td>{{ $dosen->nidn ?? '-' }}</td>
                      @endif
                      <td>{{ $dosen->jabatan->nama }}</td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          {{ $data->onEachSide(0)->withQueryString()->links() }}
        </div>
      </div>
    </div>

  </div>
@endsection
