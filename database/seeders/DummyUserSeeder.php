<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mas SPD',
                'username' => '12345',
                'role' => 'spd',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Mbak Mahasiswa',
                'username' => '23456',
                'role' => 'mahasiswa',
                'password' => bcrypt('23456')
            ],
            [
                'name' => 'Pak Pemonitor',
                'username' => '34567',
                'role' => 'pemonitor',
                'password' => bcrypt('34567')
            ]
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
