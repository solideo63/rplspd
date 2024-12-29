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
            ['kodePelanggaran' => '09C00', 'namaPelanggaran' => 'Make Up', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09C01', 'namaPelanggaran' => 'Lipstik', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09C02', 'namaPelanggaran' => 'Bedak', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09C03', 'namaPelanggaran' => 'Blush on', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09C04', 'namaPelanggaran' => 'Pensil alis', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09C05', 'namaPelanggaran' => 'Maskara', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09C06', 'namaPelanggaran' => 'Bulu Mata Palsu', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09C07', 'namaPelanggaran' => 'Eyeliner', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09D00', 'namaPelanggaran' => 'Aksesoris', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09D01', 'namaPelanggaran' => 'Lensa Mata Tidak warna asli mata', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09D02', 'namaPelanggaran' => 'Kalung', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09D03', 'namaPelanggaran' => 'Gelang', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09D04', 'namaPelanggaran' => 'Cincin', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09E01', 'namaPelanggaran' => 'Rambut', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09E02', 'namaPelanggaran' => 'Kumis', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09E03', 'namaPelanggaran' => 'Jenggot', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09E04', 'namaPelanggaran' => 'Jambang', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '09E05', 'namaPelanggaran' => 'Cat rambut selain warna hitam', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '11B01', 'namaPelanggaran' => 'Menyalakan musik di ruang kelas', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '11C01', 'namaPelanggaran' => 'Terlambat Mengikuti Apel', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '11C02', 'namaPelanggaran' => 'Tidak Mengisi Presensi Apel', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '11C03', 'namaPelanggaran' => 'Offcam saat Apel Online', 'kategoriPelanggaran' => 'Ringan'],
            ['kodePelanggaran' => '11C05', 'namaPelanggaran' => 'Tidak Membuat Resume Kuliah Umum', 'kategoriPelanggaran' => 'Ringan'],
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
