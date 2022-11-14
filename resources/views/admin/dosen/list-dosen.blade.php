@extends('layouts.admin')

@section('main-content')
  <div class="body px-1 px-md-3 mt-1">
    <div class="container-lg">

      <div class="row justify-content-between">
        <div class="col-md-10 d-flex">
          <form action="{{ url('/batas-kategori-berita') }}" method="post" id="formBatas">
            <select name="batas" id="batas" class="form-select">
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
          </form>

          <form action="{{ url('/dashboard/dosen/list-dosen') }}" class="d-flex ms-2">
            <input type="text" name="search" id="search" class="form-control me-1"
              placeholder="Masukan Kata Kunci.." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary" autocomplete="off">Cari</button>
          </form>
        </div>

        <div class="col-md-2 mt-3 mt-md-0">
          <a href="{{ url('/dashboard/dosem/form-dosen') }}" class="btn btn-primary"
            style="float: right !important">Tambah</a>
        </div>
      </div>

      <div class="row mt-3">

        <div class="col">
          {{-- Start Flash Message --}}
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Sukses</strong> — {{ session('success') }}
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
                  <th style="width: 7%">NIDN</th>
                  <th style="width: 5%">Jabatan</th>
                  <th style="width: 10%">Detail Jabatan</th>
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
                      </td>
                      <td>{{ $dosen->nama }}</td>
                      <td>{{ $dosen->nip }}</td>
                      <td>{{ $dosen->nidn }}</td>
                      <td>{{ str()->title($dosen->jabatan) }}</td>
                      <td>{{ $dosen->detail_jabatan ?? '-' }}</td>
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
          {{ $data->onEachSide(0.5)->withQueryString()->links() }}
        </div>
      </div>
    </div>

  </div>
@endsection
