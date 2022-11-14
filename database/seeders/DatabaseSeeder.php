<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\User;
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
        for ($i = 0; $i < 24; $i++) {
            $date = fake()->dateTimeBetween('-7 days', '+2 months');
            Berita::create([
                'judul' => fake()->sentence(),
                'kategori_berita_id' => rand(1, 4),
                'tanggal' => $date,
                'cover' => 'default.jpg',
                'body' => fake()->paragraph(10),
                'updated_at' => $date,
            ]);
        }
    }
}
