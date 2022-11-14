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

                    <form action="" class="d-flex ms-2">
                        <input type="text" name="keyword" id="keyword" class="form-control me-1"
                            placeholder="Masukan Kata Kunci..">
                        <button type="submit" class="btn btn-primary" name="search">Cari</button>
                    </form>
                </div>

                <div class="col-md-2 mt-3 mt-md-0">
                    <a href="{{ url('/dashboard/dosen/form-dosen') }}" class="btn btn-primary"
                        style="float: right !important">Tambah</a>
                </div>
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

                                @foreach ($data as $berita)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            <a href="{{ url('/dashboard/dosen/form-dosen') }}"
                                                class="badge text-bg-warning text-white border-0">
                                                Edit </a>
                                            <form action="{{ url('/dashboard/berita/' . $berita->id) }}" method="post"
                                                class="d-inline">
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
                                        <td>admin@gmail.com</td>
                                        <td>aaa</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
