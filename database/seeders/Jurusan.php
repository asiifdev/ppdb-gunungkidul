<?php

namespace Database\Seeders;

use App\Models\Jurusan as ModelsJurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jurusan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsJurusan::create([
            "name" => "RPL (Rekayasa Perangkat Lunak)"
        ]);
        ModelsJurusan::create([
            "name" => "TKRO (Tehnik Kendaraan Ringan Otomotif)"
        ]);
        ModelsJurusan::create([
            "name" => "Administrasi Perkantoran"
        ]);
    }
}
