<?php

namespace Database\Seeders;

use App\Models\Pemonitor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemonitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama_pemonitor' => 'BAAK',
                'pemonitor_id' => 'baak',
            ],
            [
                'nama_pemonitor' => 'Koordinator Kedisiplinan',
                'pemonitor_id' => 'dis',
            ],
            [
                'nama_pemonitor' => 'Pembina SPD',
                'pemonitor_id' => 'pembina',
            ]
        ];
        foreach ($userData as $key => $val) {
            Pemonitor::create($val);
        }
    }
}
