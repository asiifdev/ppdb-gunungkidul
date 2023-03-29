<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $siswa = User::create([
            'name' => 'Siswa',
            'email' => 'siswa@mail.com',
            'password' => bcrypt('10032023'),
            'nik' => 2929292929292929,
            'photo' => 'https://ui-avatars.com/api/?name=siswa&background=random',
        ]);
        $siswa->assignRole('siswa');
        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('10032023'),
            'nik' => 1919191919191919,
            'photo' => 'https://ui-avatars.com/api/?name=admin&background=random',
        ]);
        $admin->assignRole('admin');
        
        $kepala = User::create([
            'name' => 'Kepala Sekolah',
            'email' => 'kepala@mail.com',
            'password' => bcrypt('10032023'),
            'nik' => 3939393939393939,
            'photo' => 'https://ui-avatars.com/api/?name=kepala&background=random',
        ]);
        $kepala->assignRole('kepala');
    }
}
