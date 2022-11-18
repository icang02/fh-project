<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $this->call([
            DosenSeeder::class,
            JabatanSeeder::class,
            LinkTerkaitSeeder::class,
            KategoriBeritaSeeder::class,
            BeritaSeeder::class,
            VisiMisiSeeder::class,
            DataHomeSeeder::class,
        ]);
    }
}
