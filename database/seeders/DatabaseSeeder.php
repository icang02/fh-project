<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\KategoriBerita;
use App\Models\Link;
use App\Models\TenagaKependidikan;
use App\Models\User;
use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Kategori Berita
        $berita = ['Event', 'Informasi', 'Pengumuman', 'Ui Greenmetric'];
        foreach ($berita as $brt) {
            KategoriBerita::create([
                'nama' => $brt,
            ]);
        }

        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        // Berita
        for ($i = 0; $i < 34; $i++) {
            $date = fake()->dateTimeBetween('-2 month');
            Berita::create([
                'judul' => fake()->sentence(),
                'kategori_berita_id' => rand(1, 4),
                'tanggal' => $date,
                'cover' => null,
                'body' => fake()->paragraph(rand(40, 90)),
                'updated_at' => $date,
            ]);
        }

        $jbt = [
            'Dekan',
            'Wakil Dekan Bidang Akademik',
            'Wakil Dekan Bidang Adm Umum, Perencanaan dan Keuangan',
            'Wakil Dekan Bidang Adm Umum, Perencanaan dan Keuangan',
            'Kepala Lektor',
            'Lektor',
            'Dosen',
            'Asisten Ahli',
        ];
        for ($i = 0; $i < count($jbt); $i++) {
            Jabatan::create([
                'nama' => $jbt[$i]
            ]);
        }

        // Dosen
        Dosen::create([
            'nama' => 'Dr. Herman, S.H., LL.M.',
            'foto' => null,
            'nip' => fake()->ean13(),
            'nidn' => fake()->ean8(),
            'email' => fake()->email(),
            'jabatan_id' => 1,
        ]);
        Dosen::create([
            'nama' => 'Dr. Guasman Tatawu, S.H., M.H.',
            'foto' => null,
            'nip' => fake()->ean13(),
            'nidn' => fake()->ean8(),
            'email' => fake()->email(),
            'jabatan_id' => 2,
        ]);
        Dosen::create([
            'nama' => 'Siti Aisah Abdullah, S.H., M.H.',
            'foto' => null,
            'nip' => fake()->ean13(),
            'nidn' => fake()->ean8(),
            'email' => fake()->email(),
            'jabatan_id' => 3,
        ]);
        Dosen::create([
            'nama' => 'Lade Sirjon, S.H., LL.M.',
            'foto' => null,
            'nip' => fake()->ean13(),
            'nidn' => fake()->ean8(),
            'email' => fake()->email(),
            'jabatan_id' => 4,
        ]);

        // for ($i = 0; $i < 54; $i++) {
        //     Dosen::create([
        //         'nama' => fake()->name(),
        //         'foto' => null,
        //         'nip' => fake()->ean13(),
        //         'nidn' => fake()->ean8(),
        //         'email' => fake()->email(),
        //         'jabatan_id' => rand(1, 6),
        //     ]);
        // }

        // $jbt = ['dekan', 'wakil dekan', 'kepala lektor', 'lektor', 'dosen', 'asisten ahli'];
        // for ($i = 0; $i < 15; $i++) {
        //     if (rand(1, 1000) % 2 == 0) {
        //         $dt_jbt = fake()->sentence(3);
        //     } else {
        //         $dt_jbt = null;
        //     }

        //     TenagaKependidikan::create([
        //         'nama' => fake()->name(),
        //         'foto' => null,
        //         'nip' => fake()->ean13(),
        //         'email' => fake()->email(),
        //         'jabatan_id' => rand(5, 6),
        //     ]);
        // }

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

        VisiMisi::create([
            'nama' => 'Visi',
            'body' => '<p>Menjadi Fakultas yang Unggul di Indonesia, Berbudaya Akademik dan Bermartabat untuk Membentuk Sumber Daya Manusia cerdas dalam pengembangan ilmu hukum, penegakan dan advokasi hukum bagi Pembangunan Kemaritiman dan Perdesaan</p>'
        ]);
        VisiMisi::create([
            'nama' => 'Misi',
            'body' => '<ol><li>Mengembangkan pendidikan dan pengajaran yang berbasis riset agar menghasilkan lulusan berkualitas dan berdaya saing dengan mengintegrasikan kemajuan teknologi dalam rangka pengembangan ilmu hukum.</li><li>Mengembangkan penelitian unggulan dan pengabdian kepada masyarakat dibidang ilmu hukum dan profesional sebagai yuris khususnya hukum kemarItiman dan keagrariaan yang berorientasi pada publikasi nasional dan internasional yang bereputasi serta HaKI.</li><li>Mengembangkan potensi kreatifitas mahasiswa dibidang kerohanian dan karakter, penalaran, olah raga, seni dan kewirausahaan, untuk membangun atmosfir akademik yang kondusif, bersih, indah, sejuk dan aman.</li><li>Menyelenggarakan tata kelola fakultas yang akuntabel, transparan dan terpercaya serta meningkatkan kualitas pelaksanaan sistem penjaminan mutu dan kerjasama fakultas agar menjamin kepastian layanan kepada&nbsp;stakeholders.</li></ol>'
        ]);
    }
}
