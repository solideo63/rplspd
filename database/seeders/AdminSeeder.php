<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama_admin' => 'Admin 1',
                'admin_id' => '12345',
            ],
            [
                'nama_admin' => 'Admin 2',
                'admin_id' => '23456',
            ]
        ];
        foreach ($userData as $key => $val) {
            Admin::create($val);
        }
    }
}
