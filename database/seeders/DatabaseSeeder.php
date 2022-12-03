<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Daftara;
use App\Models\Daftarb;
use App\Models\Materi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* Mahasiswa::factory(0)->create();
        User::factory(0)->create();
        Dosen::factory(0)->create();
        Matkul::factory(0)->create();
        Daftara::factory(0)->create();
        Daftarb::factory(0)->create();
        Materi::factory(5)->create();

        Kelas::create([
            'nama' =>'A'
        ]);

        Kelas::create([
            'nama' =>'B'
        ]);
        */
    }
}
