<?php

namespace Database\Seeders;

use App\Models\SPD;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SPDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama_anggota' => 'Achmad Fioren Jati Golo',
                'nas' => '22100181',
            ],
            [
                'nama_anggota' => 'Adrian Kesar Pratama Lubis',
                'nas' => '22100182',
            ],
            [
                'nama_anggota' => 'Anastasya Kunsita Dewi',
                'nas' => '22100183',
            ],
            [
                'nama_anggota' => 'Anindhita Ayu Ramadhani',
                'nas' => '22100184',
            ],
            [
                'nama_anggota' => 'Ardian Putra Wardana',
                'nas' => '22100185',
            ],
            [
                'nama_anggota' => 'Aulia Azzahra',
                'nas' => '22100186',
            ],
            [
                'nama_anggota' => 'Celvin Keyla Alidra',
                'nas' => '22100188',
            ],
            [
                'nama_anggota' => 'I Kadek Purna Widyarta',
                'nas' => '22100190',
            ],
            [
                'nama_anggota' => 'Imalia Rosyida',
                'nas' => '22100191',
            ],
            [
                'nama_anggota' => 'Muhammad Afnan Alfian',
                'nas' => '22100194',
            ],
            [
                'nama_anggota' => 'Muhammad Anil Aziz',
                'nas' => '22100195',
            ],
            [
                'nama_anggota' => 'Ricky Ardiyansyah Saputra',
                'nas' => '22100197',
            ],
            [
                'nama_anggota' => 'Riski Tommi Mardoni',
                'nas' => '22100198',
            ],
            [
                'nama_anggota' => 'Shafira Husna',
                'nas' => '22100200',
            ],
            [
                'nama_anggota' => 'Sonya Ananta Panjaitan',
                'nas' => '22100201',
            ],
            [
                'nama_anggota' => 'Sri Nurmala Ningsih',
                'nas' => '22100202',
            ],
            [
                'nama_anggota' => 'Teguh Priharyanto',
                'nas' => '22100203',
            ],
            [
                'nama_anggota' => 'Vanessa Vidia Meyriska',
                'nas' => '22100204',
            ],
            [
                'nama_anggota' => 'Aditya Hari Kurnia',
                'nas' => '23110205',
            ],
            [
                'nama_anggota' => 'Alif Hidayah Nur Rahmadani',
                'nas' => '23110206',
            ],
            [
                'nama_anggota' => 'Arikhza Saputri',
                'nas' => '23110208',
            ],
            [
                'nama_anggota' => 'Berlian Bagus Antonia',
                'nas' => '23110209',
            ],
            [
                'nama_anggota' => 'Davika Fathma Gusnindar',
                'nas' => '23110210',
            ],
            [
                'nama_anggota' => 'Fauzan Alfaraby Nirwan',
                'nas' => '23110211',
            ],
            [
                'nama_anggota' => 'Friska Novelia',
                'nas' => '23110212',
            ],
            [
                'nama_anggota' => 'Imam Fathoni Arufi',
                'nas' => '23110213',
            ],
            [
                'nama_anggota' => 'Iqbal Maulana',
                'nas' => '23110214',
            ],
            [
                'nama_anggota' => 'Ivan Syah Maulana',
                'nas' => '23110215',
            ],
            [
                'nama_anggota' => 'Jaisy Nurhasanah',
                'nas' => '23110216',
            ],
            [
                'nama_anggota' => 'Muhamad Choza Inul Muna',
                'nas' => '23110217',
            ],
            [
                'nama_anggota' => 'Muhammad Naufal Faras Saputra',
                'nas' => '23110218',
            ],
            [
                'nama_anggota' => 'Muhammad Zacky Arie',
                'nas' => '23110219',
            ],
            [
                'nama_anggota' => 'Nisriinaa Najlaa Jevon',
                'nas' => '23110220',
            ],
            [
                'nama_anggota' => 'Nur Faqih Ihsan',
                'nas' => '23110221',
            ],
            [
                'nama_anggota' => 'Putri Mulia Utami',
                'nas' => '23110222',
            ],
            [
                'nama_anggota' => 'Putu Dian Shinta Prativi',
                'nas' => '23110223',
            ],
            [
                'nama_anggota' => 'Radivan',
                'nas' => '23110224',
            ],
            [
                'nama_anggota' => 'Sabastian Alfons Bahy',
                'nas' => '23110225',
            ],
            [
                'nama_anggota' => 'Vhania Mutiara Sinaga',
                'nas' => '23110226',
            ],
            [
                'nama_anggota' => 'Wahyuningtyas Yudha Sarjani',
                'nas' => '23110227',
            ],
            [
                'nama_anggota' => 'Willy Sumbayak',
                'nas' => '23110228',
            ],
            [
                'nama_anggota' => 'Wisnu Aimariyadi',
                'nas' => '23110229',
            ],
            [
                'nama_anggota' => 'Alisha Islami Zukhruf',
                'nas' => '24120232',
            ],
            [
                'nama_anggota' => 'Angelia Oktavia Br Tampubolon',
                'nas' => '24120233',
            ],
            [
                'nama_anggota' => 'Jessica La Ercadiola Br Ginting',
                'nas' => '24120238',
            ],
            [
                'nama_anggota' => 'Moses Noel Estomihi Simanullang',
                'nas' => '24120241',
            ],
            [
                'nama_anggota' => 'Muhammad Zain Al Azhari',
                'nas' => '24120245',
            ],
            [
                'nama_anggota' => 'Nailis Sahila',
                'nas' => '24120246',
            ],
            [
                'nama_anggota' => 'Ardi Wirahman',
                'nas' => '24120234',
            ],
            [
                'nama_anggota' => 'Ahmad Aikun',
                'nas' => '24120231',
            ],
            [
                'nama_anggota' => 'Faruq Hadi Ramadhan',
                'nas' => '24120236',
            ],
            [
                'nama_anggota' => 'Nuraini Fauziah',
                'nas' => '24120249',
            ],
            [
                'nama_anggota' => 'Putri Yuli Yanti',
                'nas' => '24120251',
            ],
            [
                'nama_anggota' => 'Riani Br Ginting',
                'nas' => '24120252',
            ],
            [
                'nama_anggota' => 'Decapryo Rivian Belo',
                'nas' => '24120235',
            ],
            [
                'nama_anggota' => 'Ica Bali Tri Susmita',
                'nas' => '24120237',
            ],
            [
                'nama_anggota' => 'Michael Klington Hutapea',
                'nas' => '24120240',
            ],
            [
                'nama_anggota' => 'Muhamad Fadhlan Hendri',
                'nas' => '24120242',
            ],
            [
                'nama_anggota' => 'M. Faruq Hafidzullah Erfaringga',
                'nas' => '24120244',
            ],
            [
                'nama_anggota' => 'Ni Putu Karistya Paicha Maesi',
                'nas' => '24120247',
            ],
            [
                'nama_anggota' => 'Nur Hafizatun Nissa',
                'nas' => '24120248',
            ],
            [
                'nama_anggota' => 'Ade Irma',
                'nas' => '24120230',
            ],
            [
                'nama_anggota' => 'Juan Stevan Rehatta',
                'nas' => '24120239',
            ],
            [
                'nama_anggota' => 'Muhamad Zidan Kurnia Ahida',
                'nas' => '24120243',
            ],
            [
                'nama_anggota' => 'Putra Dafa Pratama',
                'nas' => '24120250',
            ],
            [
                'nama_anggota' => 'SPD',
                'nas' => '102030',
            ]
        ];
        foreach ($userData as $key => $val) {
            SPD::create($val);
        }
    }
}
