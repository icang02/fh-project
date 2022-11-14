@extends('layouts.admin')

@section('main-content')
    <div class="body px-3">
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
                    <a href="{{ '/dashboard/berita/create-berita' }}" class="btn btn-primary"
                        style="float: right !important">Tambah</a>
                </div>


                <div class="row mt-3">
                    <div class="col">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="row">No</th>
                                    <th style="width: 20%">Aksi</th>
                                    <th>tanggal</th>
                                    <th style="width: 40%">Title</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td> <a href="{{ '/dashboard/berita/detail' }}"
                                            class="badge text-bg-info text-white border-0">Detail</a>
                                        <a href="{{ '/dashboard/berita/create-berita' }}"
                                            class="badge text-bg-warning text-white border-0">Update</a>


                                        <button class="badge text-bg-danger  text-white border-0">Hapus</button>
                                    </td>
                                    <td>21-05-2002</td>
                                    <td> isi</td>
                                    <td>Pengumuman</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><button class="badge text-bg-info text-white border-0" data-coreui-toggle="modal"
                                            data-coreui-target="#modalDetailKategori">Detail</button> <button
                                            class="badge text-bg-warning text-white border-0" data-coreui-toggle="modal"
                                            data-coreui-target="#modalUpdateKategori">Update</button> <button
                                            class="badge text-bg-danger  text-white border-0">Hapus</button></td>
                                    <td>21-05-2002</td>
                                    <td></td>
                                    <td>Pengumuman</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection
