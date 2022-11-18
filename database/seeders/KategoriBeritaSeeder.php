<?php

namespace Database\Seeders;

use App\Models\KategoriBerita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kategori Berita
        $berita = ['Event', 'Informasi', 'Pengumuman', 'Ui Greenmetric'];
        foreach ($berita as $brt) {
            KategoriBerita::create([
                'nama' => $brt,
            ]);
        }
    }
}
