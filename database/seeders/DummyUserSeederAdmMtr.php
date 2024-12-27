<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeederAdmMtr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [

            [
                'name' => 'Admin',
                'username' => '12345',
                'role' => 'admin',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Pemonitor',
                'username' => '54321',
                'role' => 'pemonitor',
                'password' => bcrypt('54321')
            ]

        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
