@extends('layouts.admin')

@section('main-content')
    <div class="body px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col col-1">
                    <select name="batas" id="batas" class="form-select">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="col col-3" style="float: right !important">
                    <input type="text" name="keyword" id="keyword" class="form-control"
                        placeholder="Masukan Kata Kunci Pencarian">
                </div>
                <div class="col col-1">
                    <input type="submit" style="float: left !important" class="btn btn-primary" name="search"
                        value="Cari">
                </div>
                <div class="col col-7 align-right">
                    <button class="btn btn-primary" style="float: right !important" type="button"
                        data-coreui-toggle="modal" data-coreui-target="#modalAddKategori">Tambah</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">No</th>
                                <th>Aksi</th>
                                <th>Nama Kategori Informasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><button class="badge text-bg-info text-white border-0" data-coreui-toggle="modal"
                                        data-coreui-target="#modalDetailKategori">Detail</button> <button
                                        class="badge text-bg-warning text-white border-0" data-coreui-toggle="modal"
                                        data-coreui-target="#modalUpdateKategori">Update</button> <button
                                        class="badge text-bg-danger  text-white border-0">Hapus</button></td>
                                <td>Pengumuman</td>
                            </tr>
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
                                <form action="" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="kategori">Masukan Nama Kategori</label>
                                            <input type="text" name="kategori" id="kategori" class="form-control">
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
                    {{-- MODAL DETAIL --}}
                    <div class="modal fade" id="modalDetailKategori" tabindex="-1"
                        aria-labelledby="modalDetailKategoriLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalDetailKategoriLabel">Detail Kategori</h5>
                                    <button class="btn-close" type="button" data-coreui-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Kategori : Informasi</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-coreui-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ISI MODAL UPDATE --}}
                    <div class="modal fade" id="modalUpdateKategori" tabindex="-1"
                        aria-labelledby="modalUpdateKategoriLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalUpdateKategoriLabel">Update Kategori</h5>
                                    <button class="btn-close" type="button" data-coreui-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="kategori">Masukan Nama Kategori</label>
                                            <input type="text" name="kategori" id="kategori" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-coreui-dismiss="modal">Close</button>
                                        <input type="submit" name="updatekategori" class="btn btn-primary"
                                            value="Simpan">
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
@endsection