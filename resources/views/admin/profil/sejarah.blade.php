@extends('layouts.admin')

@section('main-content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Sejarah</strong>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-739">
                                        <div class="mb-3">
                                            <label class="form-label" for="menu">Menu</label>
                                            <input class="form-control" id="menu" type="text" value="Profil"
                                                placeholder="name@example.com" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="gambar">Gambar</label>
                                            <input class="form-control" id="gambar" type="file">
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
