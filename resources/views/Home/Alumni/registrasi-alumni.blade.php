@extends('layouts.home')

@section('main-content')
  <!-- Service Start -->
  <div class="container-xxl px-0 px-md-5 py-5 pt-custom">
    <div class="container px-0 px-md-5">

      <div class="row">
        <div class="col">
          <h4 class="text-center">Form Registrasi Alumni</h4>
          <hr class="w-25 mx-auto my-5" style="height: 3px">

          <div class="container">
            @if (session('success'))
              <div class="mb-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>
            @endif

            <form action="{{ url('/dashboard/alumni/store') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="nama">Nama Lengkap Dan Gelar</label>
                <input class="form-control form-control-sm @error('nama') is-invalid @enderror" id="nama"
                  type="text" name="nama" value="{{ old('nama') }}">
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select form-select-sm @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                  name="jenis_kelamin">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="Laki Laki" {{ old('jenis_kelamin') == 'Laki Laki' ? 'selected' : '' }}>Laki Laki</option>
                  <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                    <input class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror"
                      id="tempat_lahir" type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                    @error('tempat_lahir')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="mb-3">
                    <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                    <input class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror"
                      id="tanggal_lahir" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="alamat">Alamat</label>
                <input class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat"
                  type="text" name="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label" for="email">Alamat Email</label>
                <input class="form-control form-control-sm @error('email') is-invalid @enderror" id="email"
                  type="email" name="email" value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label" for="hp">Nomor Handphone</label>
                <input class="form-control form-control-sm @error('hp') is-invalid @enderror" id="hp"
                  type="text" name="hp" value="{{ old('hp') }}">
                @error('hp')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="konsentrasi">Konsentrasi</label>
                    <select class="form-select form-select-sm @error('konsentrasi') is-invalid @enderror" id="konsentrasi"
                      name="konsentrasi">
                      <option value="">Pilih Bagian Konsentrasi Anda</option>
                      <option value="Hukum Pidana" {{ old('konsentrasi') == 'Hukum Pidana' ? 'selected' : '' }}>Hukum
                        Pidana</option>
                      <option value="Hukum Keperdataan"
                        {{ old('konsentrasi') == 'Hukum Keperdataan' ? 'selected' : '' }}>Hukum Keperdataan</option>
                      <option value="Hukum Tata Negara"
                        {{ old('konsentrasi') == 'Hukum Tata Negara ' ? 'selected' : '' }}>Hukum Tata Negara</option>
                    </select>
                    @error('konsentrasi')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="tanggal_masuk">Tanggal Masuk</label>
                    <input class="form-control form-control-sm @error('tanggal_masuk') is-invalid @enderror"
                      id="tanggal_masuk" type="input" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
                    @error('tanggal_masuk')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="bulan_tahun_lulus">Bulan Dan Tahun Lulus</label>
                    <input class="form-control form-control-sm @error('bulan_tahun_lulus') is-invalid @enderror"
                      id="bulan_tahun_lulus" type="text" name="bulan_tahun_lulus"
                      value="{{ old('bulan_tahun_lulus') }}">
                    @error('bulan_tahun_lulus')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="judul">Apakah Saat Ini Anda Sudah Bekerja ?</label>
                <div class="form-check">
                  <input class="form-check-input @error('status_kerja') is-invalid @enderror" id="kerja"
                    type="radio" name="status_kerja" value="Ya, Sudah"
                    {{ old('status_kerja') == 'Ya, Sudah' ? 'checked' : '' }}>
                  <label class="form-check-label" for="kerja">Ya, Sudah</label>
                  <br>

                  <input class="form-check-input @error('status_kerja') is-invalid @enderror" id="belum_kerja"
                    type="radio" name="status_kerja" value="Belum, Tidak Bekerja"
                    {{ old('status_kerja') == 'Belum, Tidak Bekerja' ? 'checked' : '' }}>
                  <label class="form-check-label" for="belum_kerja">Belum, Tidak Bekerja</label>
                  <br>
                  @error('status_kerja')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="judul">Status Berkerja Saat Ini ?</label>
                <div class="form-check">
                  <input class="form-check-input @error('is_pns') is-invalid @enderror" id="pns" type="radio"
                    name="is_pns" value="PNS" {{ old('is_pns') == 'PNS' ? 'checked' : '' }}>
                  <label class="form-check-label" for="pns">PNS</label>
                  <br>
                  <input class="form-check-input @error('is_pns') is-invalid @enderror" id="non-pns" type="radio"
                    name="is_pns" value="Non PNS" {{ old('is_pns') == 'Non PNS' ? 'checked' : '' }}>
                  <label class="form-check-label" for="non-pns">Non PNS</label>
                  <br>
                  @error('is_pns')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="judul">Apakah pekerjaan Anda saat ini sesuai dengan latar belakang
                  pendidikan Anda di FH-UHO?</label>
                <div class="form-check">
                  <input class="form-check-input @error('kesesuaian_pekerjaan') is-invalid @enderror" id="sesuai"
                    type="radio" name="kesesuaian_pekerjaan" value="Ya, Sesuai"
                    {{ old('kesesuaian_pekerjaan') == 'Ya, Sesuai' ? 'checked' : '' }}>
                  <label class="form-check-label" for="sesuai">Ya, Sesuai</label>
                  <br>

                  <input class="form-check-input @error('kesesuaian_pekerjaan') is-invalid @enderror" id="tidak-sesuai"
                    type="radio" name="kesesuaian_pekerjaan" value="Tidak, tidak sesuai"
                    {{ old('kesesuaian_pekerjaan') == 'Tidak, tidak sesuai' ? 'checked' : '' }}>
                  <label class="form-check-label" for="tidak-sesuai">Tidak, tidak sesuai</label>
                  <br>
                  @error('kesesuaian_pekerjaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="lama_menganggur"> Berapa lama Anda menunggu sejak lulus dari FH-UHO
                  hingga
                  mendapat pekerjaan pertama Anda?</label>
                <div class="form-check">
                  <input class="form-check-input @error('lama_menganggur') is-invalid @enderror" id="lama_menganggur1"
                    type="radio" name="lama_menganggur" value="Kurang dari 6 bulan"
                    {{ old('lama_menganggur') == 'Kurang dari 6 bulan' ? 'checked' : '' }}>
                  <label class="form-check-label" for="lama_menganggur1">Kurang dari 6 bulan</label>
                  <br>

                  <input class="form-check-input @error('lama_menganggur') is-invalid @enderror" id="lama_menganggur2"
                    type="radio" name="lama_menganggur" value="Antara 6 bulan sampai 1 tahun"
                    {{ old('lama_menganggur') == 'Antara 6 bulan sampai 1 tahun' ? 'checked' : '' }}>
                  <label class="form-check-label" for="lama_menganggur2">Antara 6 bulan sampai 1 tahun</label>
                  <br>

                  <input class="form-check-input @error('lama_menganggur') is-invalid @enderror" id="lama_menganggur3"
                    type="radio" name="lama_menganggur" value="Antara 1 tahun sampai 3 tahun"
                    {{ old('lama_menganggur') == 'Antara 1 tahun sampai 3 tahun' ? 'checked' : '' }}>
                  <label class="form-check-label" for="lama_menganggur3">Antara 1 tahun sampai 3 tahun</label>
                  <br>

                  <input class="form-check-input @error('lama_menganggur') is-invalid @enderror" id="lama_menganggur4"
                    type="radio" name="lama_menganggur" value="Lebih dari 3 tahun"
                    {{ old('lama_menganggur') == 'Lebih dari 3 tahun' ? 'checked' : '' }}>
                  <label class="form-check-label" for="lama_menganggur4">Lebih dari 3 tahun</label>
                  <br>
                  @error('lama_menganggur')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="saran">Saran/masukan Anda untuk pengembangan dan penguatan alumni
                  FH-UHO </label>
                <div>
                  <textarea name="saran" class="form-control" placeholder="Silahkan beri saran/masukan Anda" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                  <label for="floatingTextarea2"></label>
                </div>
              </div>

              <div>
                <button type="submit" class="btn btn-warning text-light">Simpan</button>
                <button type="reset" class="btn btn-danger text-light">Reset</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="mx-auto my-5" style="height: 3px">

  <div class="text-center">
    <a href="#" class="btn btn-danger btn-sm">KEMBALI KE ATAS</a>
  </div>

  <img src="https://www.uho.ac.id/fakultas/fhukum/wp-content/uploads/sites/7/2019/04/UHO-BISA.png"
    class="img-fluid d-block mt-3 mx-auto">
  </div>

  <!-- Service End -->
@endsection
