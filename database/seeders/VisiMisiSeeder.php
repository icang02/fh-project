<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
