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
        Berita::create([
            'judul' => "Judul Berita 1",
            'kategori_berita_id' => 2,
            'tanggal' => now(),
            'cover' => 'default.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque unde aliquam debitis consectetur libero cum laborum deleniti, id voluptas tenetur',
        ]);
        Berita::create([
            'judul' => "Judul Berita 2",
            'kategori_berita_id' => 2,
            'tanggal' => now(),
            'cover' => 'default.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque unde aliquam debitis consectetur libero cum laborum deleniti, id voluptas tenetur',
        ]);
        Berita::create([
            'judul' => "Judul Berita 3",
            'kategori_berita_id' => 2,
            'tanggal' => now(),
            'cover' => 'default.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque unde aliquam debitis consectetur libero cum laborum deleniti, id voluptas tenetur',
        ]);

        Berita::create([
            'judul' => "Judul Berita 21",
            'kategori_berita_id' => 1,
            'tanggal' => now(),
            'cover' => 'default.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque unde aliquam debitis consectetur libero cum laborum deleniti, id voluptas tenetur',
        ]);
        Berita::create([
            'judul' => "Judul Berita 24",
            'kategori_berita_id' => 1,
            'tanggal' => now(),
            'cover' => 'default.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque unde aliquam debitis consectetur libero cum laborum deleniti, id voluptas tenetur',
        ]);
    }
}
