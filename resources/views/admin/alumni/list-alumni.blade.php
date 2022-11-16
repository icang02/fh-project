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

          <form action="{{ url('/dashboard/alumni/list-alumni') }}" class="d-flex">
            <input type="text" name="search" id="search" class="form-control me-1" placeholder="Masukan Kata Kunci.."
              value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary" autocomplete="off">Cari</button>
          </form>
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
                    <th scope="row" style="width: 5%">No</th>
                    <th style="width: 15%">Aksi</th>
                    <th style="width: 20%">Nama</th>
                    <th style="width: 14%">Tahun Masuk</th>
                    <th style="width: 20%">Bulan Dan Tahun Lulus</th>
                    <th style="width: 15%">Nomor Hp</th>
                  </tr>
                </thead>
                <tbody>

                  @if ($data->count() == 0)
                    <tr class="text-center">
                      <td colspan="7">
                        @if (request('search'))
                          Data alumni tidak ditemukan. <i>Keyword : {{ request('search') }}</i>
                        @else
                          Belum ada data alumni.
                        @endif
                      </td>
                    </tr>
                  @else
                    @foreach ($data as $index => $alumni)
                      <tr>
                        <td>{{ $index + $data->firstItem() }}</td>
                        <td>
                          <a href="{{ url("/dashboard/alumni/$alumni->id") }}"
                            class="badge text-bg-info text-white border-0">
                            Detail
                          </a>
                          <form action="{{ url("/dashboard/alumni/$alumni->id") }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Hapus data alumni?')" type="submit"
                              class="badge text-bg-danger text-white border-0"> Hapus
                            </button>
                          </form>
                        </td>
                        <td>{{ $alumni->nama }}</td>
                        <td>{{ str()->title($alumni->tanggal_masuk) }}</td>
                        <td>{{ str()->title($alumni->bulan_tahun_lulus) }}</td>
                        <td>{{ $alumni->hp }}</td>
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
