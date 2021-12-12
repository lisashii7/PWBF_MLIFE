<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;
use App\Models\Santri;
use App\Models\Pengurus;
use App\Models\Buku;
use App\Models\DetailPeran;
use App\Models\Peran;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Santri::factory(20)->create();

        $password = Hash::make("pengurus123");
        Pengurus::create([
            "nama_pengurus" => "admin",
            "gender" => "Laki-Laki",
            "hp" => "08231457897",
            "email" => "admin@gmail.com",
            "password" => $password,
            "aktif" => "Aktif"

        ]);
        Buku::factory(20)->create();
        Peran::factory(5)->create();

        $pengurus = Pengurus::first();
        $perans = Peran::all();

        foreach ($perans as $peran) {
            DetailPeran::firstOrCreate([
                'id_peran' => $peran->id_peran,
                'id_pengurus' => $pengurus->id_pengurus
            ]);
        }
    }
}
