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

                    <form action="{{ url('/dashboard/berita/list-berita') }}" class="d-flex ms-2">
                        <input type="text" name="search" id="search" class="form-control me-1"
                            placeholder="Masukan Kata Kunci.." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary" autocomplete="off">Cari</button>
                    </form>
                </div>


                <div class="row mt-3">

                    <div class="col">
                        {{-- Start Flash Message --}}
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses</strong> — {{ session('success') }}
                                <button type="button" class="btn-close" data-coreui-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        {{-- End Flash Message --}}


                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="row" style="width: 5%">No</th>
                                        <th style="width:
                                            15%">Aksi</th>
                                        <th style="width: 20%">nama</th>
                                        <th style="width: 14%">Tahun Masuk</th>
                                        <th style="width: 20%"">Bulan Dan Tahun Lulus</th>
                                        <th style="width: 15%"">Nomor Hp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1</td>
                                        <td>
                                            <a href="{{ '/dashboard/alumni/detail-alumni' }}"
                                                class="badge text-bg-info text-white border-0">
                                                Detail
                                            </a>
                                            <form action=" " method="post" class="d-inline">
                                                {{-- @csrf
                                                @method('delete') --}}
                                                <button onclick="return confirm('Hapus berita?')" type="submit"
                                                    class="badge text-bg-danger text-white border-0"> Hapus
                                                </button>
                                            </form>
                                        </td>
                                        <td> bambang pramono</td>
                                        <td>2008</td>
                                        <td>mei 2001</td>
                                        <td>08532567891</td>
                                    </tr>

                                    {{-- @if ($data->count() == 0)
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
                                                    <form action="{{ url('/dashboard/berita/' . $berita->id) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('Hapus berita?')" type="submit"
                                                            class="badge text-bg-danger text-white border-0"> Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggal)->format('d F Y') }}
                                                </td>
                                                <td>{{ $berita->judul }}</td>
                                                <td>{{ $berita->kategori_berita->nama }}</td>
                                            </tr>
                                        @endforeach
                                    @endif --}}

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        {{-- {{ $data->onEachSide(0.5)->withQueryString()->links() }} --}}
                    </div>
                </div>
            </div>

        </div>
    @endsection
