<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Wisnu',
                'no_hp' => '0987654321',
                'alamat' => 'semarang',
                'role' => 'pasien',
                'email' => 'wisnu@gmail.com',
                'password' => 'password',
            ],
            [
                'nama' => 'Rizal',
                'no_hp' => '0987654323',
                'alamat' => 'semarang',
                'role' => 'dokter',
                'email' => 'rizal@gmail.com',
                'password' => 'password',
            ],
            [
                'nama' => 'Dhika',
                'no_hp' => '0987654324',
                'alamat' => 'semarang',
                'role' => 'pasien',
                'email' => 'dhika@gmail.com',
                'password' => 'password',
            ],
            [
                'nama' => 'Tegar',
                'no_hp' => '0987654325',
                'alamat' => 'semarang',
                'role' => 'dokter',
                'email' => 'tegar@gmail.com',
                'password' => 'password',
            ],
            [
                'nama' => 'admin',
                'no_hp' => '0987654332',
                'alamat' => 'semarang kota',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '123456',
            ],
            
        ];
        foreach ($data as $d) {
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => $d['password'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
            ]);
        }
    }
}
