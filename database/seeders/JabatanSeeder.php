<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
