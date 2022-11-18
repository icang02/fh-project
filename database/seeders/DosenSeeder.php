<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
