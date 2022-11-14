@extends('layouts.admin')

@section('main-content')
    <div class="body px-3 mt-1">
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
                    <button class="btn btn-primary" style="float: right !important" type="button"
                        data-coreui-toggle="modal" data-coreui-target="#modalAddKategori">Tambah</button>
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

                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">No</th>
                                <th>Aksi</th>
                                <th>Nama Kategori Informasi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($data->count() == 0)
                                <tr class="text-center">
                                    <td colspan="3">Belum ada kategori berita.</td>
                                </tr>
                            @else
                                @foreach ($data as $kategori)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            <button class="badge text-bg-info text-white border-0"
                                                data-coreui-toggle="modal"
                                                data-coreui-target="#modalDetailKategori-{{ $kategori->id }}"> Detail
                                            </button>
                                            <button class="badge text-bg-warning text-white border-0"
                                                data-coreui-toggle="modal"
                                                data-coreui-target="#modalUpdateKategori-{{ $kategori->id }}"> Update
                                            </button>
                                            <form action="{{ url("/dashboard/berita/kategori-berita/$kategori->id") }}"
                                                method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Hapus kategori {{ $kategori->nama }}?')"
                                                    type="submit" class="badge text-bg-danger text-white border-0"> Hapus
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ $kategori->nama }}</td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>

                    {{-- ISI MODAL TAMBAH --}}
                    <div class="modal fade" id="modalAddKategori" tabindex="-1" aria-labelledby="modalAddKategoriLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalAddKategoriLabel">Tambah Kategori</h5>
                                    <button class="btn-close" type="button" data-coreui-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ url('/dashboard/berita/kategori-berita') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Masukan Nama Kategori</label>
                                            <input type="text" name="nama" id="nama"
                                                class="form-control @error('nama') is-invalid @enderror">
                                            @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-coreui-dismiss="modal">Close</button>
                                        <input type="submit" name="tambahkategori" class="btn btn-primary" value="Simpan">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @foreach ($data as $kategori)
                        {{-- MODAL DETAIL --}}
                        <div class="modal fade" id="modalDetailKategori-{{ $kategori->id }}" tabindex="-1"
                            aria-labelledby="modalDetailKategoriLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalDetailKategoriLabel">Detail Kategori</h5>
                                        <button class="btn-close" type="button" data-coreui-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Kategori : <span class="fw-bold">{{ $kategori->nama }}</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-coreui-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ISI MODAL UPDATE --}}
                        <div class="modal fade" id="modalUpdateKategori-{{ $kategori->id }}" tabindex="-1"
                            aria-labelledby="modalUpdateKategoriLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalUpdateKategoriLabel">Update Kategori</h5>
                                        <button class="btn-close" type="button" data-coreui-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <form action="{{ url("/dashboard/berita/kategori-berita/$kategori->id") }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Masukan Nama Kategori</label>
                                                <input type="text" name="nama" id="nama"
                                                    class="form-control @error('nama') is-invalid @enderror"
                                                    value="{{ old('nama', $kategori->nama) }}">
                                                @error('nama')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                data-coreui-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
