<?php

namespace Database\Seeders;

use App\Models\faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqData = [
            [
                'tanya' => 'Apa itu SPD?',
                'jawab' => 'SPD (Satuan Penegak Disiplin) adalah UKK (Unit Kegiatan Khusus) yang 
                membantu menegakkan disiplin mahasiswa di Polstat STIS yang anggotanya direkrut
                dengan syarat-syarat tertentu.'
            ],
            [
                'tanya' => 'Apa tugas utama SPD?',
                'jawab' => 'Tugas utama SPD meliputi penegakan dan edukasi kedisiplinan,
                pelaksanaan apel tingkat, operasi rutin, pengawasan terhadap pelaksanaan peraturan, 
                dan membantu menindak pelanggaran peraturan.'
            ],
            [
                'tanya' => 'Siapa saja yang bisa menjadi anggota SPD?',
                'jawab' => 'Mahasiswa aktif tingkat I yang memiliki integritas tinggi, 
                mampu bekerja dalam tim, dan memiliki komitmen terhadap kedisiplinan dapat mendaftar menjadi anggota SPD.'
            ],
            [
                'tanya' => 'Apakah SPD memberikan pelatihan untuk anggotanya?',
                'jawab' => 'Ya, SPD secara rutin mengadakan pelatihan untuk meningkatkan 
                kemampuan anggotanya dalam menjalankan tugas dan tanggung jawabnya dalam menjaga kedisiplinan dan menegakkan peraturan di kampus.'
            ],
            [
                'tanya' => 'Apakah boleh memakai make-up bagi perempuan?',
                'jawab' => 'Make-up tidak diperbolehkan, hanya bedak yang sama dengan warna wajah yang diperbolehkan
                dan tidak mencolok.'
            ],
            [
                'tanya' => 'Apakah wajib memakai bivakmut saat menggunakan PDA?',
                'jawab' => 'Ya, wajib memakai bivakmut yang disematkan di pundak sebelah kiri.'
            ],
            [
                'tanya' => 'Apakah boleh memakai jaket di kampus?',
                'jawab' => 'Tidak boleh memakai jaket di kampus kecuali jaket pkl atau jaket 
                almamater pada saat diperlukan.'
            ],
            [
                'tanya' => 'Bagaimana jika sepatu pemberian kampus telah rusak dan membeli sepatu dari luar?',
                'jawab' => 'Diperbolehkan membeli sepatu dari luar dengan syarat sesuai dengan
                pemberian awal kampus.'
            ],

        ];
        foreach ($faqData as $key => $val) {
            faq::create($val);
        }
    }
}
