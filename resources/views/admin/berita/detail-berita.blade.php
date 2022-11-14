@extends('layouts.admin')

@section('main-content')
  <div class="body px-1 px-md-3 px-md-3">
    <div class="container-lg">
      <div class="row mt-1">
        <div class="col">
          <div class="card" style="width: 100%;">
            <div class="row">
              <div class="col-md-8">
                <div class="card-body">
                  <h6 class="card-title fw-bold">Judul</h6>
                  <p class="card-text">{{ $data->judul }}</p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card-body">
                  <h6 class="card-title fw-bold">Kategori</h6>
                  <p class="btn btn-success badge">{{ $data->kategori_berita->nama }}</p>
                </div>
              </div>
            </div>

            <hr>

            <div class="card-body d-flex">
              <div>
                <h6 class="card-title fw-bold">Tanggal post</h6>
                <p class="card-text">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal)->format('d F Y') }}</p>
              </div>
              <div class="ms-5">
                <h6 class="card-title fw-bold">Terakhir diupdate pada</h6>
                <p class="card-text">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal)->format('d F Y') }}</p>
                </p>
              </div>

            </div>

            <hr>

            <div class="card-body">
              <h6 class="card-title fw-bold">Isi Berita</h6>
              <p class="card-text">{!! $data->body !!}</p>
            </div>

            <div class="card-body">

              <a href="{{ url('/dashboard/berita/list-berita') }}" class="btn btn-danger text-light">Kembali</a>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
@endsection
