@extends('layouts.admin')

@section('main-content')
    <div class="body px-1 px-md-3 mt-1">
        <div class="container-lg">

            <div class="row justify-content-between">
                <div class="row">
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
                                        <th style="width:10%">Aksi</th>
                                        <th scope="row" style="width: 30%">Kategori</th>
                                        <th style="width: 60">isi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <button class="badge text-bg-warning text-white border-0"
                                                data-coreui-toggle="modal" data-coreui-target="#modalUpdateKategori-"> Edit
                                            </button>
                                        </td>
                                        <td>Visi</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sit eos id
                                            provident a inventore aut, nesciunt fuga eaque iure tempora quasi voluptatum at
                                            amet excepturi blanditiis cum esse reprehenderit?</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="badge text-bg-warning text-white border-0"
                                                data-coreui-toggle="modal" data-coreui-target="#modalUpdateKategori-2"> Edit
                                            </button>
                                        </td>
                                        <td>Misi</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sit eos id
                                            provident a inventore aut, nesciunt fuga eaque iure tempora quasi voluptatum at
                                            amet excepturi blanditiis cum esse reprehenderit?</td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>
                    </div>




                    <div class="modal fade" id="modalUpdateKategori-" tabindex="-1"
                        aria-labelledby="modalUpdateKategoriLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalUpdateKategoriLabel">Update Kategori</h5>
                                    <button class="btn-close" type="button" data-coreui-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ url('/dashboard/visi-misi') }}" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="visi" class="form-label">Edit Visi</label>
                                            <textarea class="form-control" name="visi" id="visi" rows="3"></textarea>
                                            <div class="invalid-feedback"></div>

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



                    <div class="modal fade" id="modalUpdateKategori-2" tabindex="-1"
                        aria-labelledby="modalUpdateKategoriLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalUpdateKategoriLabel">Update Kategori</h5>
                                    <button class="btn-close" type="button" data-coreui-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ url('/dashboard/visi-misi') }}" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="misi" class="form-label">Edit Misi</label>
                                            <textarea class="form-control" name="misi" id="misi" rows="3"></textarea>
                                            <div class="invalid-feedback"></div>

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
                </div>

                <div class="row">
                    <div class="col">
                        {{-- {{ $data->onEachSide(0.5)->withQueryString()->links() }} --}}
                    </div>
                </div>
            </div>

        </div>
    @endsection
