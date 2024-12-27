<?php

namespace Database\Seeders;

use App\Models\peraturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyPeraturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peraturanData = [
            [
                'nama' => 'Peraturan Direktur Politeknik Statistika Nomor 003 Tahun',
                'deskripsi' => 'Tentang Kode Etik dan Tata Tertib Mahasiswa Politeknik Statistika STIS',
                'link' => 'https://drive.google.com/file/d/187H0ji_Rn0sYYO2yfx_NgQTN5Yetb14I/view'
            ],
            [
                'nama' => 'Keputusan Direktur Politeknik Statistika STIS Nomor 031318 Tahun 2023',
                'deskripsi' => 'Tentang Pedoman Operasional Penegakan Disiplin dan Tata Tertib Mahasiswa Politeknik Statistika STIS',
                'link' => 'https://drive.google.com/file/d/1E0O29DG-u7dd16fLYChyvXxBfR7i4aHD/view?usp=sharing'
            ],
        ];
        foreach ($peraturanData as $key => $val) {
            peraturan::create($val);
        }
    }
}
