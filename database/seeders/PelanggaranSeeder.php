<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggarans')->insert([
            // Kategori Ringan
            ['kodePelanggaran' => '09A01', 'namaPelanggaran' => 'Kerudung', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A02', 'namaPelanggaran' => 'Seragam PDA', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A03', 'namaPelanggaran' => 'Seragam Batik', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A04', 'namaPelanggaran' => 'Seragam PDH', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A05', 'namaPelanggaran' => 'Pangkat', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A06', 'namaPelanggaran' => 'Bivakmut', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A07', 'namaPelanggaran' => 'Kaos Dalam', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A08', 'namaPelanggaran' => 'Tanda Jabatan', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A09', 'namaPelanggaran' => 'Nametag', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A10', 'namaPelanggaran' => 'Badge', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A11', 'namaPelanggaran' => 'Tas', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A12', 'namaPelanggaran' => 'Ikat Pinggang', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A13', 'namaPelanggaran' => 'Celana PDA', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A14', 'namaPelanggaran' => 'Kaos Kaki', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09A15', 'namaPelanggaran' => 'Sepatu', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '11C04', 'namaPelanggaran' => 'Tidak mengikuti Apel', 'kategoriPelanggaran' => 'Sedang'],
            ['kodePelanggaran' => '11C06', 'namaPelanggaran' => 'Tidak Hadir Kuliah Umum', 'kategoriPelanggaran' => 'Sedang'],
            ['kodePelanggaran' => '11C07', 'namaPelanggaran' => 'Tidak Hadir Upacara', 'kategoriPelanggaran' => 'Sedang'],
            ['kodePelanggaran' => '18D01', 'namaPelanggaran' => 'Ujaran Tidak Pantas dan Pencemaran Nama Baik', 'kategoriPelanggaran' => 'Berat'],
            ['kodePelanggaran' => '18G01', 'namaPelanggaran' => 'Bullying', 'kategoriPelanggaran' => 'Berat'],
            ['kodePelanggaran' => '21D01', 'namaPelanggaran' => 'Menyontek ketika ujian', 'kategoriPelanggaran' => 'Berat'],
            ['kodePelanggaran' => '22A01', 'namaPelanggaran' => 'Pelanggaran IT', 'kategoriPelanggaran' => 'Berat'],
        ]);
    }
}
