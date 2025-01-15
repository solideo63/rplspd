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
                'name' => 'Achmad Fioren Jati Golo',
                'username' => '22100181',
                'role' => 'spd',
                'password' => bcrypt('7zDj3kar')
            ],
            [
                'name' => 'Adrian Kesar Pratama Lubis',
                'username' => '22100182',
                'role' => 'spd',
                'password' => bcrypt('29rPWV3S')
            ],
            [
                'name' => 'Anastasya Kunsita Dewi',
                'username' => '22100183',
                'role' => 'spd',
                'password' => bcrypt('CAhJbj46')
            ],
            [
                'name' => 'Anindhita Ayu Ramadhani',
                'username' => '22100184',
                'role' => 'spd',
                'password' => bcrypt('qZzLd7Nz')
            ],
            [
                'name' => 'Ardian Putra Wardana',
                'username' => '22100185',
                'role' => 'spd',
                'password' => bcrypt('2GhAPp3z')
            ],
            [
                'name' => 'Aulia Azzahra',
                'username' => '22100186',
                'role' => 'spd',
                'password' => bcrypt('bEYVZgD2')
            ],
            [
                'name' => 'Celvin Keyla Alidra',
                'username' => '22100188',
                'role' => 'spd',
                'password' => bcrypt('fsXPp2Zz')
            ],
            [
                'name' => 'I Kadek Purna Widyarta',
                'username' => '22100190',
                'role' => 'spd',
                'password' => bcrypt('L2w9Ywba')
            ],
            [
                'name' => 'Imalia Rosyida',
                'username' => '22100191',
                'role' => 'spd',
                'password' => bcrypt('S3YGLpkf')
            ],
            [
                'name' => 'Muhammad Afnan Alfian',
                'username' => '22100194',
                'role' => 'spd',
                'password' => bcrypt('d5Y9suF5')
            ],
            [
                'name' => 'Muhammad Anil Aziz',
                'username' => '22100195',
                'role' => 'spd',
                'password' => bcrypt('DAu5FCcL')
            ],
            [
                'name' => 'Ricky Ardiyansyah Saputra',
                'username' => '22100197',
                'role' => 'spd',
                'password' => bcrypt('6Mujp6DT')
            ],
            [
                'name' => 'Riski Tommi Mardoni',
                'username' => '22100198',
                'role' => 'spd',
                'password' => bcrypt('hrq7DafV')
            ],
            [
                'name' => 'Shafira Husna',
                'username' => '22100200',
                'role' => 'spd',
                'password' => bcrypt('3kHWpPVb')
            ],
            [
                'name' => 'Sonya Ananta Panjaitan',
                'username' => '22100201',
                'role' => 'spd',
                'password' => bcrypt('VnRzTEf4')
            ],
            [
                'name' => 'Sri Nurmala Ningsih',
                'username' => '22100202',
                'role' => 'spd',
                'password' => bcrypt('zEvcgaw7')
            ],
            [
                'name' => 'Teguh Priharyanto',
                'username' => '22100203',
                'role' => 'spd',
                'password' => bcrypt('2pjh58WN')
            ],
            [
                'name' => 'Vanessa Vidia Meyriska',
                'username' => '22100204',
                'role' => 'spd',
                'password' => bcrypt('EJ46D9zZ')
            ],
            [
                'name' => 'Aditya Hari Kurnia',
                'username' => '23110205',
                'role' => 'spd',
                'password' => bcrypt('wVvkpa42')
            ],
            [
                'name' => 'Alif Hidayah Nur Rahmadani',
                'username' => '23110206',
                'role' => 'spd',
                'password' => bcrypt('yYuEH6vb')
            ],
            [
                'name' => 'Arikhza Saputri',
                'username' => '23110208',
                'role' => 'spd',
                'password' => bcrypt('2LyVZ8kr')
            ],
            [
                'name' => 'Berlian Bagus Antonia',
                'username' => '23110209',
                'role' => 'spd',
                'password' => bcrypt('CMYu47aA')
            ],
            [
                'name' => 'Davika Fathma Gusnindar',
                'username' => '23110210',
                'role' => 'spd',
                'password' => bcrypt('4vuGExUs')
            ],
            [
                'name' => 'Fauzan Alfaraby Nirwan',
                'username' => '23110211',
                'role' => 'spd',
                'password' => bcrypt('SfFrB2qv')
            ],
            [
                'name' => 'Friska Novelia',
                'username' => '23110212',
                'role' => 'spd',
                'password' => bcrypt('ZC8NwNgA')
            ],
            [
                'name' => 'Imam Fathoni Arufi',
                'username' => '23110213',
                'role' => 'spd',
                'password' => bcrypt('w2cSJfDt')
            ],
            [
                'name' => 'Iqbal Maulana',
                'username' => '23110214',
                'role' => 'spd',
                'password' => bcrypt('Gyvmy6Hf')
            ],
            [
                'name' => 'Ivan Syah Maulana',
                'username' => '23110215',
                'role' => 'spd',
                'password' => bcrypt('whVSDf2u')
            ],
            [
                'name' => 'Jaisy Nurhasanah',
                'username' => '23110216',
                'role' => 'spd',
                'password' => bcrypt('X4uMuwfS')
            ],
            [
                'name' => 'Muhamad Choza Inul Muna',
                'username' => '23110217',
                'role' => 'spd',
                'password' => bcrypt('sJYJj8QA')
            ],
            [
                'name' => 'Muhammad Naufal Faras Saputra',
                'username' => '23110218',
                'role' => 'spd',
                'password' => bcrypt('Z2q7mYwZ')
            ],
            [
                'name' => 'Muhammad Zacky Arie',
                'username' => '23110219',
                'role' => 'spd',
                'password' => bcrypt('G94yQFzj')
            ],
            [
                'name' => 'Nisriinaa Najlaa Jevon',
                'username' => '23110220',
                'role' => 'spd',
                'password' => bcrypt('qRbNPY7a')
            ],
            [
                'name' => 'Nur Faqih Ihsan',
                'username' => '23110221',
                'role' => 'spd',
                'password' => bcrypt('MnR894V9')
            ],
            [
                'name' => 'Putri Mulia Utami',
                'username' => '23110222',
                'role' => 'spd',
                'password' => bcrypt('T88ztNWQ')
            ],
            [
                'name' => 'Putu Dian Shinta Prativi',
                'username' => '23110223',
                'role' => 'spd',
                'password' => bcrypt('vE6bYdJL')
            ],
            [
                'name' => 'Radivan',
                'username' => '23110224',
                'role' => 'spd',
                'password' => bcrypt('qH8zVkAk')
            ],
            [
                'name' => 'Sabastian Alfons Bahy',
                'username' => '23110225',
                'role' => 'spd',
                'password' => bcrypt('FrYGFbU3')
            ],
            [
                'name' => 'Vhania Mutiara Sinaga',
                'username' => '23110226',
                'role' => 'spd',
                'password' => bcrypt('hM37fsva')
            ],
            [
                'name' => 'Wahyuningtyas Yudha Sarjani',
                'username' => '23110227',
                'role' => 'spd',
                'password' => bcrypt('Tp2M25ZE')
            ],
            [
                'name' => 'Willy Sumbayak',
                'username' => '23110228',
                'role' => 'spd',
                'password' => bcrypt('5mtP8ssm')
            ],
            [
                'name' => 'Wisnu Aimariyadi',
                'username' => '23110229',
                'role' => 'spd',
                'password' => bcrypt('Bp3W6VNu')
            ],
            [
                'name' => 'Alisha Islami Zukhruf',
                'username' => '24120232',
                'role' => 'spd',
                'password' => bcrypt('VtzdEmP3')
            ],
            [
                'name' => 'Angelia Oktavia Br Tampubolon',
                'username' => '24120233',
                'role' => 'spd',
                'password' => bcrypt('6sY2c6Cc')
            ],
            [
                'name' => 'Jessica La Ercadiola Br Ginting',
                'username' => '24120238',
                'role' => 'spd',
                'password' => bcrypt('e9kQZy9P')
            ],
            [
                'name' => 'Moses Noel Estomihi Simanullang',
                'username' => '24120241',
                'role' => 'spd',
                'password' => bcrypt('WaQgcNn4')
            ],
            [
                'name' => 'Muhammad Zain Al Azhari',
                'username' => '24120245',
                'role' => 'spd',
                'password' => bcrypt('EdJqp9nf')
            ],
            [
                'name' => 'Nailis Sahila',
                'username' => '24120246',
                'role' => 'spd',
                'password' => bcrypt('qUPtzKc4')
            ],
            [
                'name' => 'Ardi Wirahman',
                'username' => '24120234',
                'role' => 'spd',
                'password' => bcrypt('6eNZQLYz')
            ],
            [
                'name' => 'Ahmad Aikun',
                'username' => '24120231',
                'role' => 'spd',
                'password' => bcrypt('nbVqk9QM')
            ],
            [
                'name' => 'Faruq Hadi Ramadhan',
                'username' => '24120236',
                'role' => 'spd',
                'password' => bcrypt('BjQnPdW9')
            ],
            [
                'name' => 'Nuraini Fauziah',
                'username' => '24120249',
                'role' => 'spd',
                'password' => bcrypt('dhut3pV5')
            ],
            [
                'name' => 'Putri Yuli Yanti',
                'username' => '24120251',
                'role' => 'spd',
                'password' => bcrypt('j9n9nySb')
            ],
            [
                'name' => 'Riani Br Ginting',
                'username' => '24120252',
                'role' => 'spd',
                'password' => bcrypt('zqkMk2nF')
            ],
            [
                'name' => 'Decapryo Rivian Belo',
                'username' => '24120235',
                'role' => 'spd',
                'password' => bcrypt('a2yyTFJY')
            ],
            [
                'name' => 'Ica Bali Tri Susmita',
                'username' => '24120237',
                'role' => 'spd',
                'password' => bcrypt('DmXXK6g8')
            ],
            [
                'name' => 'Michael Klington Hutapea',
                'username' => '24120240',
                'role' => 'spd',
                'password' => bcrypt('7Hqs5nVt')
            ],
            [
                'name' => 'Muhamad Fadhlan Hendri',
                'username' => '24120242',
                'role' => 'spd',
                'password' => bcrypt('JrJx6y7x')
            ],
            [
                'name' => 'M. Faruq Hafidzullah Erfaringga',
                'username' => '24120244',
                'role' => 'spd',
                'password' => bcrypt('xp3AyGnY')
            ],
            [
                'name' => 'Ni Putu Karistya Paicha Maesi',
                'username' => '24120247',
                'role' => 'spd',
                'password' => bcrypt('E4nZ5aRN')
            ],
            [
                'name' => 'Nur Hafizatun Nissa',
                'username' => '24120248',
                'role' => 'spd',
                'password' => bcrypt('qm8dPEG5')
            ],
            [
                'name' => 'Ade Irma',
                'username' => '24120230',
                'role' => 'spd',
                'password' => bcrypt('DDvuPq89')
            ],
            [
                'name' => 'Juan Stevan Rehatta',
                'username' => '24120239',
                'role' => 'spd',
                'password' => bcrypt('DW8kq6QM')
            ],
            [
                'name' => 'Muhamad Zidan Kurnia Ahida',
                'username' => '24120243',
                'role' => 'spd',
                'password' => bcrypt('auH9AYnL')
            ],
            [
                'name' => 'Putra Dafa Pratama',
                'username' => '24120250',
                'role' => 'spd',
                'password' => bcrypt('8ZRUWrNk')
            ],
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
