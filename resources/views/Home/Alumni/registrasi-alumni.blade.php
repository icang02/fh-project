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

                        <form action="" method="POST">


                            <div class="mb-3">
                                <label class="form-label" for="judul">Nama Lengkap Dan Gelar</label>
                                <input class="form-control form-control-sm" id="judul" type="text" name="judul"
                                    value=" ">
                                <div class="invalid-feedback"></div>
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="jk">Jenis Kelamin</label>
                                <select class="form-select form-select-sm" id="jk" name="jk">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="">Laki Laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="judul">Tempat Lahir</label>
                                        <input class="form-control form-control-sm" id="tempat" type="text"
                                            name="tempat" value=" ">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="tanggal">Tanggal Lahir</label>
                                        <input class="form-control form-control-sm" id="tanggal" type="date"
                                            name="tanggal">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input class="form-control form-control-sm" id="alamat" type="text" name="alamat"
                                    value=" ">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Alamat Email</label>
                                <input class="form-control form-control-sm" id="email" type="text" name="email"
                                    value=" ">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="no_hp">Nomor Handphone</label>
                                <input class="form-control form-control-sm" id="no_hp" type="text" name="no_hp"
                                    value=" ">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="jurusan">Konsentrasi</label>
                                        <select class="form-select form-select-sm" id="jurusan" name="jurusan">
                                            <option value="">Pilih Bagian Konsentrasi Anda</option>
                                            <option value="">Hukum pidana</option>
                                            <option value="">Hukum Keperdataan</option>
                                            <option value="">Hukum Tata Negara</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="tanggal_masuk">Tanggal Masuk</label>
                                        <input class="form-control form-control-sm" id="tanggal_masuk" type="input"
                                            name="tanggal_masuk">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="judul">Bulan Dan Tahun Lulus</label>
                                        <input class="form-control form-control-sm" id="tempat" type="text"
                                            name="tempat" value=" ">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="judul">Apakah Saat Ini Anda Sudah Berkerja ?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kerja">
                                    <label class="form-check-label" for="kerja">Ya, Sudah</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="kerja">
                                    <label class="form-check-label" for="kerja">Belum, Tidak Berkerja</label>
                                    <br>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="judul">Status Berkerja Saat Ini ?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status">
                                    <label class="form-check-label" for="status">PNS</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="status">
                                    <label class="form-check-label" for="status">Non PNS</label>
                                    <br>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="judul">Apakah pekerjaan Anda saat ini sesuai dengan
                                    latar
                                    belakang pendidikan Anda di FH-UHO?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="latarbelakang">
                                    <label class="form-check-label" for="latarbelakang">Ya, Sesuai</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="latarbelakang">
                                    <label class="form-check-label" for="latarbelakang">Tidak, tidak sesuai</label>
                                    <br>
                                </div>
                            </div>



                            <div class="mb-3">
                                <label class="form-label" for="judul"> Berapa lama Anda menunggu sejak lulus dari
                                    FH-UHO
                                    hingga mendapat pekerjaan pertama Anda?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="waktu_kerja">
                                    <label class="form-check-label" for="waktu_kerja">Kurang dari 6 bulan</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="waktu_kerja">
                                    <label class="form-check-label" for="waktu_kerja">Antara 6 bulan sampai 1
                                        tahun</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="waktu_kerja">
                                    <label class="form-check-label" for="waktu_kerja">Antara 1 tahun sampai 3
                                        tahun</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="waktu_kerja">
                                    <label class="form-check-label" for="waktu_kerja"> Lebih dari 3 tahun</label>
                                    <br>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="saran">Saran/masukan Anda untuk
                                    pengembangan dan
                                    penguatan
                                    alumni FH-UHO </label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2"></label>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-warning text-light">Simpan</button>
                                <button id="reset" type="reset" class="btn btn-danger text-light">Reset</button>

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
