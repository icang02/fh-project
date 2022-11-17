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
                  <h6 class="card-title fw-bold">Nama Alumni</h6>
                  <p class="card-text">{{ ucfirst($data->nama) }}</p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card-body">
                  <h6 class="card-title fw-bold">Konsentrasi</h6>
                  <p class="btn btn-success badge">{{ $data->konsentrasi }}</p>
                </div>
              </div>
            </div>

            <hr>

            <div class="card-body">
              <div class="d-flex">
                <div>
                  <h6 class="card-title fw-bold">Tempat Lahir</h6>
                  <p class="card-text">{{ str()->title($data->tempat_lahir) }}</p>
                </div>
                <div class="ms-5">
                  <h6 class="card-title fw-bold">Tanggal Lahir</h6>
                  <p class="card-text">
                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal_lahir)->format('d F Y') }}</p>
                  </p>
                </div>

              </div>

              <div class="mt-4">
                <h6 class="card-title fw-bold">Jenis Kelamin</h6>
                <p class="card-text">{{ str()->title($data->jenis_kelamin) }}</p>
              </div>

              <div class="mt-4">
                <h6 class="card-title fw-bold">Alamat</h6>
                <p class="card-text">{{ str()->title($data->alamat) }}</p>
              </div>

              <div class="mt-4">
                <h6 class="card-title fw-bold">No Handphone</h6>
                <p class="card-text">{{ $data->hp }}</p>
              </div>

              <div class="mt-4">
                <h6 class="card-title fw-bold">Email</h6>
                <p class="card-text">{{ $data->email }}</p>
              </div>
            </div>

            <hr>

            <div class="card-body d-flex">
              <div>
                <h6 class="card-title fw-bold">Tahun Masuk</h6>
                <p class="card-text">
                  {{ \Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal_masuk)->format('d F Y') }}</p>
              </div>
              <div class="ms-5">
                <h6 class="card-title fw-bold">Bulan dan Tahun Lulus</h6>
                <p class="card-text">
                  {{ date($data->bulan_tahun_lulus) }}</p>
                </p>
              </div>

            </div>

            <hr>

            <div class="card-body">
              <h6 class="card-title fw-bold">Isi Survei</h6>
              <div class="mt-4">
                <h6 class="card-title fw-bold">Apakah Saat Ini Anda Sudah Berkerja ?</h6>
                <p class="card-text">{{ str()->title($data->status_kerja) }}</p>
              </div>

              <div class="mt-4">
                <h6 class="card-title fw-bold">Status Bekerja Saat Ini ?</h6>
                <p class="card-text">{{ $data->is_pns }}</p>
              </div>

              <div class="mt-4">
                <h6 class="card-title fw-bold">Apakah pekerjaan Anda saat ini sesuai dengan latar belakang
                  pendidikan Anda di FH-UHO?</h6>
                <p class="card-text">{{ str()->title($data->kesesuaian_pekerjaan) }}</p>
              </div>

              <div class="mt-4">
                <h6 class="card-title fw-bold">Berapa lama Anda menunggu sejak lulus dari FH-UHO hingga
                  mendapat pekerjaan pertama Anda?</h6>
                <p class="card-text">{{ $data->lama_menganggur }}</p>
              </div>
            </div>

            <hr>

            <div class="card-body">
              <h6 class="card-title fw-bold">Saran</h6>
              <p class="card-text">
                {{ $data->saran ?? '-' }}
              </p>
            </div>

            <div class="card-body">
              <a href="{{ url('/dashboard/alumni/list-alumni') }}" class="btn btn-danger text-light">Kembali</a>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
@endsection
