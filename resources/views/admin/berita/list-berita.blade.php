@extends('layouts.admin')

@section('main-content')
  <div class="body px-1 px-md-3 mt-1">
    <div class="container-lg">

      <div class="row justify-content-between">
        <div class="col-md-10 d-flex">
          {{-- <form action="{{ url('/batas-kategori-berita') }}" method="post" id="formBatas">
            <select name="batas" id="batas" class="form-select">
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
          </form> --}}

          <form action="{{ url('/dashboard/berita/list-berita') }}" class="d-flex">
            <input type="text" name="search" id="search" class="form-control me-1" placeholder="Masukan Kata Kunci.."
              value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary" autocomplete="off">Cari</button>
          </form>
        </div>

        <div class="col-md-2 mt-3 mt-md-0">
          <a href="{{ url('/dashboard/berita/form-berita') }}" class="btn btn-primary"
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
                  <th scope="row">No</th>
                  <th style="width: 20%">Aksi</th>
                  <th style="width: 15%">Tanggal</th>
                  <th>Judul</th>
                  <th style="width: 20%">Kategori</th>
                </tr>
              </thead>
              <tbody>

                @if ($data->count() == 0)
                  <tr class="text-center">
                    <td colspan="7">
                      @if (request('search'))
                        Judul berita tidak ditemukan. <i>Keyword : {{ request('search') }}</i>
                      @else
                        Belum ada ada berita.
                      @endif
                    </td>
                  </tr>
                @else
                  @foreach ($data as $index => $berita)
                    <tr>
                      <th scope="row">{{ $index + $data->firstItem() }}</th>
                      <td>
                        <a href="{{ url('/dashboard/berita/' . $berita->id) }}"
                          class="badge text-bg-info text-white border-0">
                          Detail
                        </a>
                        <a href="{{ url('/dashboard/berita/edit/' . $berita->id) }}"
                          class="badge text-bg-warning text-white border-0">
                          Edit </a>
                        <form action="{{ url('/dashboard/berita/' . $berita->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('delete')
                          <button onclick="return confirm('Hapus berita?')" type="submit"
                            class="badge text-bg-danger text-white border-0"> Hapus
                          </button>
                        </form>
                      </td>
                      <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('d F Y') }}</td>
                      <td>{{ $berita->judul }}</td>
                      <td>{{ $berita->kategori_berita->nama }}</td>
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
