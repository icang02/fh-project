<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Berita
        // for ($i = 0; $i < 34; $i++) {
        //     $date = fake()->dateTimeBetween('-2 month');
        //     Berita::create([
        //         'judul' => fake()->sentence(),
        //         'kategori_berita_id' => rand(1, 4),
        //         'tanggal' => $date,
        //         'cover' => null,
        //         'body' => fake()->paragraph(rand(40, 90)),
        //         'updated_at' => $date,
        //     ]);
        // }
    }
}
