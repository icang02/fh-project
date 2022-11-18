<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkTerkaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data link terkait
        Link::create([
            'judul' => 'Form Usulan Pembukaan Kelas Mata Kuliah',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLScFrfvL7bLwvYSbqQrH42ZhOh9N6bQ52gfR9LIVnHKFwwPp3g/viewform?embedded=true',
        ]);
        Link::create([
            'judul' => 'Form Usulan Pembuatan Akun Dosen dan Mahasiswa',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSdLPUHAw9qBw5eHQ3Phryduz8xAFcMML5NO2EMbCN3c49id9g/viewform?embedded=true',
        ]);
        Link::create([
            'judul' => 'Reset Akun SPADA Dosen dan Mahasiswa',
            'link' => '#',
        ]);
        Link::create([
            'judul' => 'Rencana Strategis Program Studi',
            'link' => 'https://drive.google.com/open?id=1K-I7OsY-dgEkfL43PqFsMOqfm8JtcvqD',
        ]);
        Link::create([
            'judul' => 'Rencana Operasional Program Studi',
            'link' => 'https://drive.google.com/open?id=1PPdb3J5viXnERcwYLVCUAcQRm4jLmLXK',
        ]);
        Link::create([
            'judul' => 'Panduan Akademik',
            'link' => 'https://drive.google.com/file/d/1NlrMD4TpqW3Oj5Dxf-ee9xsj8nKfBwZF/view',
        ]);
        Link::create([
            'judul' => 'Pendaftaran Mahasiswa Baru',
            'link' => 'https://uho.ac.id/search?q=SNMPTN+SBMPTN+SMMPTN',
        ]);
        Link::create([
            'judul' => 'Klinik Hukum UHO',
            'link' => 'http://www.klinikhukumuho.com/',
        ]);
        Link::create([
            'judul' => 'SIAKAD',
            'link' => 'https://siakadbeta.uho.ac.id/',
        ]);
        Link::create([
            'judul' => 'WISUDA',
            'link' => 'http://wisuda.uho.ac.id/',
        ]);
        Link::create([
            'judul' => 'SITEDI',
            'link' => 'http://sitedi.uho.ac.id/login.php?accesscheck=%2Findex.php',
        ]);
        Link::create([
            'judul' => 'HOLREV',
            'link' => 'http://ojs.uho.ac.id/index.php/holrev',
        ]);
        Link::create([
            'judul' => 'SIMLIBTABMAS',
            'link' => 'http://simlitabmas.dikti.go.id/',
        ]);
        Link::create([
            'judul' => 'SISTER',
            'link' => 'http://sister.uho.ac.id/auth/login',
        ]);
        Link::create([
            'judul' => 'SINTA',
            'link' => 'http://sinta2.ristekdikti.go.id/author/?mod=login',
        ]);
        Link::create([
            'judul' => 'E-LIBRARY',
            'link' => 'http://lib.uho.ac.id/library/',
        ]);
        Link::create([
            'judul' => 'SIPATUK',
            'link' => 'http://118.97.35.235/sipatuk',
        ]);
        Link::create([
            'judul' => 'Rencana Strategis Fakultas Hukum',
            'link' => 'https://drive.google.com/file/d/1vI4LKCO3PwWmKvw75Kh1WmWEVpXVfrFr/view',
        ]);
        Link::create([
            'judul' => 'Rencana Operasional Fakultas Hukum',
            'link' => 'https://drive.google.com/file/d/1DhD2eVILCI-_yy3jaQuGVRScgpM-Iudk/view',
        ]);
    }
}
