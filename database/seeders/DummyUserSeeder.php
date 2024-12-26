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
                'name' => 'Baiq Qonita Firjatullah',
                'username' => '22100187',
                'role' => 'spd',
                'password' => bcrypt('ec52MuAy')
            ],
            [
                'name' => 'Celvin Keyla Alidra',
                'username' => '22100188',
                'role' => 'spd',
                'password' => bcrypt('fsXPp2Zz')
            ],
            [
                'name' => 'Dyah Puspitasari',
                'username' => '22100189',
                'role' => 'spd',
                'password' => bcrypt('5FndaTfR')
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
                'name' => 'Miftahur Rahim',
                'username' => '22100192',
                'role' => 'spd',
                'password' => bcrypt('Rwc2fap6')
            ],
            [
                'name' => 'Modesty Ulya Mora',
                'username' => '22100193',
                'role' => 'spd',
                'password' => bcrypt('j8QcVDnB')
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
                'name' => 'Reka Irfinalia B',
                'username' => '22100196',
                'role' => 'spd',
                'password' => bcrypt('UY9fAwfb')
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
                'name' => 'Ronaldo Keristanta Ginting',
                'username' => '22100199',
                'role' => 'spd',
                'password' => bcrypt('vzSby8AT')
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
                'name' => 'Anjelita Nabila Putri',
                'username' => '23110207',
                'role' => 'spd',
                'password' => bcrypt('aJbH3C93')
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
            ],

        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
