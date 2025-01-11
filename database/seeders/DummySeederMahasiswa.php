<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeederMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswaData = [
            [
                'nim' => '222011335',
                'nama' => 'Gibson Daniel Andrianto Nainggolan',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111874',
                'nama' => 'ALIF FITRIATUL KHASANAH',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111908',
                'nama' => 'ANNISA RAHMA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111925',
                'nama' => 'ARSYKA LAILA OKTALIA SIREGAR',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111933',
                'nama' => 'AULIA AZZAHRA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111938',
                'nama' => 'AZHARI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111943',
                'nama' => 'AZZAHRA RAMADHANI WIDYANTI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111955',
                'nama' => 'BERTOLOMEUS LAKSANA JAYADRI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111964',
                'nama' => 'CECILIA PUTRI DIANTI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111988',
                'nama' => 'DHYMAS ADHYZA RAYHAN',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111995',
                'nama' => 'DIVA PUTRA PRATAMA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111997',
                'nama' => 'DUTATAMA ROSEWIKA TAUFIQ HADIHARDAYA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112009',
                'nama' => 'ELFINA DEA ROSALITA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112039',
                'nama' => 'FAQIH INDRA LESMANA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112042',
                'nama' => 'FARDHI DZAKWAN FAUZAN',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112083',
                'nama' => 'HALA MUTIARA PUTRI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112103',
                'nama' => 'IBNU GATA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112131',
                'nama' => 'KEN REGAR RIDLO TAFSIROH',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112143',
                'nama' => 'KUNTUM KHAIRANI ASELIA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112155',
                'nama' => 'LINDA MONICA SARI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112167',
                'nama' => 'M. YANDRE FEBRIAN',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112171',
                'nama' => 'MARCHADHA SANTI WILDA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112179',
                'nama' => 'MARSHELA ALYA KUSUMA WARDANI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112219',
                'nama' => 'MUHAMMAD RAFI TASRIF',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112222',
                'nama' => 'MUHAMMAD RESTU ILAHI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112229',
                'nama' => 'MUTIARA FRISKA AMALIA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112241',
                'nama' => 'NASYA ZAHIRA PUTRI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112245',
                'nama' => 'NAUFAL FADLI MUZAKKI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112268',
                'nama' => 'NUR AMALIYATUR ROHMAH',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112273',
                'nama' => 'NUR YUDHA JATI PRAKOSO',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112305',
                'nama' => 'RAKANINDA INDAH KUSWARDANI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112376',
                'nama' => 'SOFI ZAMZANAH',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112379',
                'nama' => 'SRI NURMALA NINGSIH',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112380',
                'nama' => 'STENISLAUS ANGGA APRIANTO',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112382',
                'nama' => 'SUHENDRA WIDI PRAYOGA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112386',
                'nama' => 'SURYA MARULI',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112402',
                'nama' => 'TSABIT BINTANG HERINDRA',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222112418',
                'nama' => 'YANUAR NURUL HILAL',
                'kelas' => '4SD1',
            ],
            [
                'nim' => '222111850',
                'nama' => 'AFIED AKHMAD',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111853',
                'nama' => 'AGNES REGITA BERLIANNI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111877',
                'nama' => 'ALMIRA UTAMI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111894',
                'nama' => 'ANDREW MARULI TUA TAMPUBOLON',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111902',
                'nama' => 'ANISA NUR OKTAVIANI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111907',
                'nama' => 'ANNISA NURUL AZMI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111929',
                'nama' => 'ATANASIUS ALFANDI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111940',
                'nama' => 'AZMI ZULFANI PUTRI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111961',
                'nama' => 'BRIGITTA AURELIA PUTRI SUHENDI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111987',
                'nama' => 'DHEVRI LEONARDO HUTAJULU',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111993',
                'nama' => 'DINDA ALFIRA ILMAYANTI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222111998',
                'nama' => 'DWI INTAN SULISTIANA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112022',
                'nama' => 'ERIKA AZIZAH KHOIRUNNISA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112028',
                'nama' => 'EZRA ZIA IZDIHARA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112043',
                'nama' => 'FARHAN MAULANA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112058',
                'nama' => 'FEZA RAFFA ARNANDA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112071',
                'nama' => 'GHAFFAR ISMAIL',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112096',
                'nama' => 'I BAGUS PUTU SWARDANASUTA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112129',
                'nama' => 'KATRINA LAVENIA ELVARETTA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112135',
                'nama' => 'KHESYA BELINDA MELA ISAPUTRI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112169',
                'nama' => 'MAFITROH PANGASTUTI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112195',
                'nama' => 'MUHAMMAD FARHAN',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112207',
                'nama' => 'MUHAMMAD ASFAR ASWIN',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112212',
                'nama' => 'MUHAMMAD FAUZAN AZIMA. A',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112224',
                'nama' => 'MUHAMMAD SULTAN HAFIZ',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112227',
                'nama' => 'MUKHAMAD DINDA MANIS YULIANTO',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112236',
                'nama' => 'NABILA WIDYA PUTRI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112260',
                'nama' => 'NICHOLAS RAHARDIAN KURNIA SANDY',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112261',
                'nama' => 'NINDY NUR SETIAWATI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112262',
                'nama' => 'NISA FATHARANI HASNA',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112286',
                'nama' => 'PRATIWI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112300',
                'nama' => 'RAHADIAN EKA BAGUS INDRA RINANGKU',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112310',
                'nama' => 'RECHTIANA PUTRI ARINI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112332',
                'nama' => 'RIZKY RAHMADANI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112336',
                'nama' => 'ROHMAD ALI FATUR RIZKI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112351',
                'nama' => 'SANIYYAH SRI NURHAYATI',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112372',
                'nama' => 'SISILIA AGUSTINA MANALU',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222112423',
                'nama' => 'YULI ARINDAH',
                'kelas' => '4SD2',
            ],
            [
                'nim' => '222011732',
                'nama' => 'Hanny Nur Rahma',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111843',
                'nama' => 'ADINDA AYU PRAMESTHI',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111849',
                'nama' => 'AFI DWI AMINURRAHMAH',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111878',
                'nama' => 'ALVANDI SYUKUR RAHMAT ZEGA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111883',
                'nama' => 'AMELIA RAHAYU',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111886',
                'nama' => 'ANANG KURNIA HIDAYAT',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111890',
                'nama' => 'ANDI ARDIANSYAH NASIR',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111893',
                'nama' => 'ANDIKA RAHMAT SAIFUDIN',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111896',
                'nama' => 'ANGGA FAJAR KURNIA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111912',
                'nama' => 'ANUGERAH SURYA ATMAJA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111928',
                'nama' => 'ASTRI NUR INNAYAH',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111947',
                'nama' => 'BAGAS SETYAWAN',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222111978',
                'nama' => 'DARADINANTI AULIA REVANADILLA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112010',
                'nama' => 'ELGRESIA EGITA BR PERANGIN-ANGIN',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112030',
                'nama' => 'FADIAH FARADINAH NASIR',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112047',
                'nama' => 'FATHIMAH AZ-ZAHRA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112048',
                'nama' => "FAT'HUL MUBIN GUFRON",
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112076',
                'nama' => 'GILANG ABDUL JABBAR',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112085',
                'nama' => 'HAMDANI',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112086',
                'nama' => 'HANIF CHOIRUNNISA HIBATULLAH',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112091',
                'nama' => 'HASAN BAHTIAR HABIBI',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112099',
                'nama' => 'I KADEK PURNA WIDYARTA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112112',
                'nama' => 'INNAS KHOIRUN CHISAN',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112118',
                'nama' => 'IZHAR AMAL PRAMUDITYA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112137',
                'nama' => 'KHUZAIMAH PUTRI',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112142',
                'nama' => 'KRISTIAN ERNALA WICAKSONO',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112251',
                'nama' => 'NAZWA THORIQUL JANNAH',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112290',
                'nama' => 'PUTRI AYSYAH',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112296',
                'nama' => 'R.FARAS ROIHAN ARMEL',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112303',
                'nama' => 'RAIHAN RAHMANDA JUNIANTO',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112324',
                'nama' => 'RIO MANUPPAK SIAHAAN',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112325',
                'nama' => 'RISKA FAZILLA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112344',
                'nama' => 'SABILLA HAMDA SYAHPUTRI',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112359',
                'nama' => 'SHABRINA ALFIRA NISA',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112368',
                'nama' => 'SILVI AJENG LARASATI',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112377',
                'nama' => 'SONYA ANANTA PANJAITAN',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112378',
                'nama' => 'SORAYA AFKARINA MUMTAZAH',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222112434',
                'nama' => 'ZULFAA DWI OKTAVIAN',
                'kelas' => '4SD3',
            ],
            [
                'nim' => '222011255',
                'nama' => 'Adrian Muhammad Rafi',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222111840',
                'nama' => 'ADIB SULTHON MUAMMAL',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222111914',
                'nama' => 'ARCHANGELA RENATA PATRICIA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222111956',
                'nama' => 'BIMO ADE BUDIMAN FIKRI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222111967',
                'nama' => 'CHARINA HURUL FATHONAH',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222111971',
                'nama' => 'CINDY SEPTIA TRIONITA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222111992',
                'nama' => 'DINA YANTI NAINGGOLAN',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112004',
                'nama' => 'EGI NAWWAR SUKMA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112016',
                'nama' => 'ELVINA GAMAYANTI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112055',
                'nama' => 'FAUZIAH FILDA MUFARRIHATI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112063',
                'nama' => 'FITRIA NUR RAHMAWATI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112066',
                'nama' => 'FRIDA OKTAFIANA ARIANTI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112074',
                'nama' => 'GHOLIDHO HERDA PRILASAKLY',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112082',
                'nama' => 'GUSWANA ADVENTUS',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112089',
                'nama' => 'HANS TIKYNARO MANURUNG',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112090',
                'nama' => 'HANUN NABILA AZIS',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112094',
                'nama' => 'HIMAWAN WAHID IKHWANSYAH',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112102',
                'nama' => 'I MADE YOGA ANDIKA PUTRA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112111',
                'nama' => 'INGGID UTAMI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112116',
                'nama' => 'IRSYAD FADHIL ASYRAF',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112122',
                'nama' => 'JIHAN MAISAROH',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112127',
                'nama' => 'KARTIKA AMANDASARI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112162',
                'nama' => 'LUTHFIANI NUR AISYAH',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112164',
                'nama' => 'M. KHUSEN ALI AL ANJABI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112177',
                'nama' => 'MARSAY FEBRIANTO',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112197',
                'nama' => 'MUHAMAD IQBAL PUTRA PRATAMA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112205',
                'nama' => 'MUHAMMAD ANJA TAUFANI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112218',
                'nama' => 'MUHAMMAD NUR ALFIAN SYARIF',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112265',
                'nama' => 'NISYWA ZAHRA INDRASIWI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112280',
                'nama' => 'OKTAFIANTO ASSET PERDANA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112282',
                'nama' => 'PATRICK FARKHANUDIN',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112294',
                'nama' => 'PUTRI SEKAR AYU',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112311',
                'nama' => 'REGITA PRAMISWARI HADI MAHARANI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112348',
                'nama' => 'SAMUEL MARUBA MANIK',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112350',
                'nama' => 'SANDRA FATIMAH ICHWANI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112355',
                'nama' => 'SEIZRA AULIA SALSABILA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112388',
                'nama' => 'SYAKIRA RIZKY ANDINI',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112417',
                'nama' => 'YAHYA ABDURROHMAN',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222112419',
                'nama' => 'YOGA PRATAMA',
                'kelas' => '4SI1',
            ],
            [
                'nim' => '222011294',
                'nama' => 'Ihsan Surahman',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111844',
                'nama' => 'ADINDA SHAKILLA PUTERI MUSLIMAH',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111852',
                'nama' => 'AGHNIA AMALIA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111864',
                'nama' => 'AIFA HAMIDAH',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111871',
                'nama' => 'AKMA BATRISYIA JAZIMA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111873',
                'nama' => 'ALIEFTA ZULVANSYAH BAHYPERDANA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111888',
                'nama' => 'ANASTASYA KUNSITA DEWI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111900',
                'nama' => 'ANGGY DISTRIA MANIK',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111910',
                'nama' => 'ANSELMUS ANWAR SITANGGANG',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111919',
                'nama' => 'ARI MULYADI ABERSON SILALAHI SIDEBANG',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111926',
                'nama' => 'ARZUDA QOLBIN MULYA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111939',
                'nama' => 'AZKAS SALAM',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111969',
                'nama' => 'CHELSEA AZISHIAH VICTORY',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111975',
                'nama' => 'DANANG WISNU PRABOWO',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222111979',
                'nama' => 'DEANIS CAMELIA ANUGRAH PUTRI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112011',
                'nama' => 'ELIANA MARDIYANINGTYAS',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112044',
                'nama' => 'FARID AKBAR ARIFANDI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112057',
                'nama' => 'FERLINDA NOVIA ARDHITASARI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112069',
                'nama' => 'GAVIN ATHA WISESA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112070',
                'nama' => 'GERY NASTIAR',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112110',
                'nama' => 'INAFIANTI KLARISTANIA RILANO',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112141',
                'nama' => 'KRISTHYNE PANJAITAN',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112156',
                'nama' => 'LINDA PUSPITA SARI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112201',
                'nama' => 'MUHAMMAD AFNAN ALFIAN',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112217',
                'nama' => 'MUHAMMAD JULIAN FIRDAUS',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112243',
                'nama' => 'NATALIE MERRY ANGELINA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112299',
                'nama' => 'RAFI RIZHA SYAKHARI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112319',
                'nama' => 'RIDHO PANGESTU',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112353',
                'nama' => 'SARIYYANTI HIKMAH PAULUS',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112354',
                'nama' => 'SATRIO PUTYO DANENDRA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112358',
                'nama' => 'SETYA HADI NUGROHO',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112369',
                'nama' => 'SILVIE KRISTYA ARDEARISTA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112384',
                'nama' => 'SULTAN HADI PRABOWO',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112393',
                'nama' => 'SYIFA NOVDHY SALSABILA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112404',
                'nama' => 'UMAR HADI PRANOTO',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112410',
                'nama' => 'VENNY SEPTIA HARTONO',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112426',
                'nama' => 'YULINDA AGRESTINA',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112427',
                'nama' => 'YULIUS RESTU KRISNA ADI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222112433',
                'nama' => 'ZIDAN AL AZIZI',
                'kelas' => '4SI2',
            ],
            [
                'nim' => '222011407',
                'nama' => 'Rafel Ilham Febrian',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111841',
                'nama' => 'ADIEN ILMA MUTAFAILA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111845',
                'nama' => 'ADITYA WIDIYANTO NUGROHO',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111848',
                'nama' => 'AFDATUL CHOFIDAH',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111855',
                'nama' => 'AGUS RIYANTO',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111858',
                'nama' => 'AHMAD DIAZ HAYKAL',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111862',
                'nama' => 'AHMAD ZEIN HADDAD',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111869',
                'nama' => 'AISYAH DEVYTA MAHARANI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111904',
                'nama' => 'ANNA ADELIA DEWANTA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111924',
                'nama' => 'ARON ZYODE KAXANCA HASIBUAN',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111930',
                'nama' => 'ATHA JULI RIEKAWATY',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111937',
                'nama' => 'AYU WULAN SARI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111948',
                'nama' => 'BAGINDA SINAGA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111966',
                'nama' => 'CHAINUR AR RASYID NASUTION',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222111991',
                'nama' => 'DILLA LEONYKA PUTRI DEWAYANI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112038',
                'nama' => 'FALANA ROFAKO HAKAM',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112045',
                'nama' => 'FARIS IQBAL MAULANA SUSANTO',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112078',
                'nama' => 'GITA KIRANA APRILLIA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112114',
                'nama' => 'IRGI FAHROZI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112154',
                'nama' => 'LILIS DWIYANTI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112173',
                'nama' => 'MARETTA TIARINDA WIDYANTARI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112184',
                'nama' => 'MEISCHA ZAHRA NUR ADHELIA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112210',
                'nama' => 'MUHAMMAD DIVA AMRULLAH',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112225',
                'nama' => 'MUHAMMAD ZABBAR FALIHIN',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112246',
                'nama' => 'NAUFAL IHSAN PUTRA MARLIN',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112258',
                'nama' => 'NI PUTU SANCITA MAHARANI ARDANA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112263',
                'nama' => 'NISA WAHIDATUL HIDAYAH',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112266',
                'nama' => 'NUR AFIFAH',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112272',
                'nama' => 'NUR SHIFA DANI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112281',
                'nama' => 'PANDU WAHYU AJI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112321',
                'nama' => 'RIFKA HUMAIRA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112322',
                'nama' => 'RIFKY MAULANA PUTRA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112339',
                'nama' => 'ROSALIA KRISTANTY MANURUNG',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112364',
                'nama' => 'SHAWA ZAHMA AZ-ZAHARA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112365',
                'nama' => 'SHELA ALFIYANI AMALIA',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112366',
                'nama' => 'SHOFIATUL NAJMI',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112370',
                'nama' => 'SINDU DINAR BANGUN LEKSONO',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112385',
                'nama' => 'SULTHON LUBIS ZIDAN KURNIAWAN',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '222112430',
                'nama' => 'ZAHRA SAFIRA HARYONO',
                'kelas' => '4SI3',
            ],
            [
                'nim' => '212111847',
                'nama' => 'ADRIAN KESAR PRATAMA LUBIS',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212111899',
                'nama' => 'ANGGIE DWI NUGRAHA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212111936',
                'nama' => 'AWIKA YULIATI ZUKHRUFAH',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212111944',
                'nama' => 'BAFINATUL UMAMI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212111965',
                'nama' => 'CELVIN KEYLA ALIDRA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212111974',
                'nama' => 'CLAUDIA JANEFER ROMORA SITANGGANG',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212111985',
                'nama' => 'DEWI SITORESMI CAHYANINGTYAS',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112003',
                'nama' => 'DYAH WIDYASTUTI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112008',
                'nama' => 'EKSIS AULIYA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112015',
                'nama' => 'ELVIKA NANDA NURDIANA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112027',
                'nama' => 'EZRA ERIC SANTOSO',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112033',
                'nama' => 'FAHRI AZIS SIBAGARIANG',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112062',
                'nama' => 'FIRMAN EMMANUEL DECLARANTIUS PARULIAN',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112064',
                'nama' => 'FITRISIA TARIDIPA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112073',
                'nama' => 'GHINA ANANDHIA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112075',
                'nama' => 'GHULAM AN-NABALAH BANI SYAFII',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112092',
                'nama' => 'HASNA ARIFAH NUR FATIH',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112105',
                'nama' => "IKHLASUL A'MAL",
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112138',
                'nama' => 'KINTAN AYU RIZQI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112148',
                'nama' => 'LAILA VANIA EVELYNA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112151',
                'nama' => 'LANDHA PRATIWI SHALEH',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112161',
                'nama' => 'LUQMAN ABDUL WAHID MUHAMMAD',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112186',
                'nama' => 'MICHAEL ANGANDOWA BOEAYA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112203',
                'nama' => 'MUHAMMAD ALFA RISXI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112248',
                'nama' => 'NAUFAL RAFFIE ABIOGA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112257',
                'nama' => 'NI PUTU LIDYA PRAMESTY',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112264',
                'nama' => 'NISRINA SEKAR HARUM',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112283',
                'nama' => 'PATRICK NOEL SIMAMORA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112306',
                'nama' => 'RANDY DAFFA ADITYA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112326',
                'nama' => 'RISKA MEYLIANA SARI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112333',
                'nama' => 'RIZQUNA NAZALAL RIZAL PRIATNA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112342',
                'nama' => 'RUMMANA LABISTA SYAHLA DEWI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112407',
                'nama' => 'VANESSA VIDIA MEYRISKA',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112409',
                'nama' => 'VELLICIA LAYLA QAMIRAT SUBEKTI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212112414',
                'nama' => 'WAHYU WIDURI ANDOKO SAPUTRI',
                'kelas' => '4SE1',
            ],
            [
                'nim' => '212111837',
                'nama' => 'ACHMAD FIOREN JATI GOLO',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111861',
                'nama' => 'AHMAD NADIFA AL AGUNG',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111880',
                'nama' => 'AMALIA ISTI WIDIYASARI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111881',
                'nama' => 'AMARA PUTRI SHABRINA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111897',
                'nama' => 'ANGGA PRAYOGA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111915',
                'nama' => 'ARDIAN PUTRA WARDANA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111923',
                'nama' => 'ARLITA DWINA FIRLANA SARI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111934',
                'nama' => 'AULIA HAYUNINGTYAS',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111963',
                'nama' => 'CALIVI KEZIA LAKSMANA PUTRI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111968',
                'nama' => 'CHARISA DYAH AYU KUSWARA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212111973',
                'nama' => 'CLARISSA AZARINE',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112018',
                'nama' => 'EMILY AZIZAIDA BUDIKUSUMA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112024',
                'nama' => 'ERIS GIRASTO',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112026',
                'nama' => 'ERWIN AGUNG NUR ROHMAT',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112029',
                'nama' => 'Fachrol A. Mocht Tanjung',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112049',
                'nama' => 'FATIMA AZZAHRO BINTI FATIHAH',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112053',
                'nama' => 'FAUZAN BAYU HERA SUDIANTO',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112054',
                'nama' => 'FAUZANA AFININNAS',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112108',
                'nama' => 'IMELLA MENDITA SANDI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112109',
                'nama' => 'IMMANUEL NICHOLAS FRANSEPTA SAMOSIR',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112157',
                'nama' => 'LINIERTI AJENG AULIA PUTRI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112158',
                'nama' => 'LISDA OKTAVIANA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112168',
                'nama' => 'MUHAMMAD ABDUL AZIZ HABIBI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112191',
                'nama' => 'MOHAMMAD ANNAM',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112208',
                'nama' => 'MUHAMMAD ASWAN AZIZ',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112214',
                'nama' => 'MUHAMMAD HAFIZ ALBAB',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112228',
                'nama' => 'MUTHIA ULINNUHA PRABANDARI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112267',
                'nama' => 'NUR AISYA AURELLIA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112287',
                'nama' => 'PRETTY MELATI PARDEDE',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112295',
                'nama' => 'R. RR APRIANI SOFIANA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112323',
                'nama' => 'RIKA LUSIANA SIMBOLON',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112331',
                'nama' => 'RIZKI HARDINATA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112361',
                'nama' => 'SHAFIRA HUSNA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112383',
                'nama' => 'SUKMA AYU KUSUMAWARDANI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112425',
                'nama' => 'YULIA NAWANG WULANDARI',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212112432',
                'nama' => 'ZIDAN AKBAR AL AQSHA',
                'kelas' => '4SE2',
            ],
            [
                'nim' => '212011431',
                'nama' => 'MITA FEBRIANTI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111836',
                'nama' => 'ABIGAIL BRENDA PADHANG PASORONG RANDA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111868',
                'nama' => 'AISYAH ANJANI PUTRI SIREGAR',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111901',
                'nama' => 'ANINDITA AYU RAMADHANI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111903',
                'nama' => 'ANITA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111906',
                'nama' => 'ANNISA MUTHI ZAJIDAH',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111941',
                'nama' => 'AZMIRA CANDRA VIDIASARI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111946',
                'nama' => 'BAGAS ASHARI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111976',
                'nama' => 'DANARDANA MUHAMMAD',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111996',
                'nama' => 'DOLLY FERNANDO',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112025',
                'nama' => 'ERLITA REDINA PUTRI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112081',
                'nama' => 'GUNTUR FAIZAL MAJID',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112084',
                'nama' => 'HALIM NUR JAMALUDDIN',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112101',
                'nama' => 'I MADE JOEL JAYA DILAGA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112124',
                'nama' => 'KADEK AGUS DWI CANDRA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112134',
                'nama' => 'KEVIN RIZKIKA SETIAWAN',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112170',
                'nama' => 'MAHIRA FACHRUNNISA LUBIS',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112189',
                'nama' => 'MIRA OCTAVIA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112216',
                'nama' => 'MUHAMMAD ILZAM FALAHUDDIN',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112223',
                'nama' => 'MUHAMMAD RIZQI ABDULQUDDUS',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112242',
                'nama' => 'NASYWA NUR AMALIA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112247',
                'nama' => 'NAUFAL MUHAMMAD IQBAL',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112254',
                'nama' => 'NI MADE WULAN PUSPITA DEWI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112256',
                'nama' => 'NI PUTU ESTI UTAMI BARSUA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112279',
                'nama' => 'OKKY RIZKY SAPUTRA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112284',
                'nama' => 'PEMBAYUN OTSU INDIANA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112298',
                'nama' => 'RAFAEL AGINTHA TARIGAN',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112314',
                'nama' => 'RENY DYAH KURNIAWATI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112316',
                'nama' => 'RIA DINI HANIFAH',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112320',
                'nama' => 'RIDWAN NURFIRMAN KUNCORO',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112330',
                'nama' => 'RIZKA SABRINA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112335',
                'nama' => 'ROHIMMA ARISANTI',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112346',
                'nama' => 'SALMA NABILA ASRIZAL',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112416',
                'nama' => 'WIMBI UELSAN GURUSINGA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212112428',
                'nama' => 'YUNIAR YUDHI TIRANA',
                'kelas' => '4SE3',
            ],
            [
                'nim' => '212111839',
                'nama' => 'ADHILLAH AZIZ',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212111876',
                'nama' => 'ALIFIAN WAHYU PRAKHOSO',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212111879',
                'nama' => 'ALWAN NABIL HANIF',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212111920',
                'nama' => 'ARIEL PATAR JONATHAN SIMANJUNTAK',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212111958',
                'nama' => 'BINTANG AFLAH ADHIKA RAMADHAN',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212111981',
                'nama' => 'DESTI FITRIANI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112012',
                'nama' => 'ELISA NUR RAHMAWATI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112013',
                'nama' => 'ELSA OKTAVIA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112014',
                'nama' => 'ELSA SABILA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112041',
                'nama' => 'FARAH FADHILAH HUSAIN',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112072',
                'nama' => "GHASSANI FATHIN 'ADANI",
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112130',
                'nama' => 'KAYLA AZKA DHIYA TSABITHAH',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112136',
                'nama' => 'KHRISNA AJI PAMUNGKAS',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112140',
                'nama' => 'KRISNA INDERA WASPADA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112144',
                'nama' => 'KURNIANTY INDAH HAFSARI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112159',
                'nama' => 'LISMA DINAYANTI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112160',
                'nama' => 'LOURNA MARISKA MAUBOY',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112178',
                'nama' => 'MARSHA RIFANY',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112180',
                'nama' => "MARTHA MAR'ATU MUFIDA",
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112187',
                'nama' => 'MIFROTUN AINI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112198',
                'nama' => 'MUHAMAD RADITYA DANU CARITA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112200',
                'nama' => 'MUHAMMAD',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112202',
                'nama' => 'MUHAMMAD AKBAR',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112204',
                'nama' => "MUHAMMAD 'ANIL 'AZIZ",
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112231',
                'nama' => 'MUTIARA NUR TSANI HELFIANA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112237',
                'nama' => 'NADAA ZHAFARINA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112239',
                'nama' => 'NAILA KAMILIA HASNA SAFITRI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112293',
                'nama' => 'PUTRI SAFIRA SHALSABILA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112308',
                'nama' => 'RATIH RESTIANI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112343',
                'nama' => 'RUTH MAHARANI AQUILIA HUTAGAOL',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112347',
                'nama' => 'SALSABILA RAHADATUL AISY',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112363',
                'nama' => 'SHAVIRA RACHMAWATI',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112405',
                'nama' => 'USWATUN ALIFAH',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212112412',
                'nama' => 'VILANATA TESALONIKA LANA',
                'kelas' => '4SK1',
            ],
            [
                'nim' => '212111842',
                'nama' => 'ADILLA KHOIRUNNISA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111867',
                'nama' => 'AISHA MAHARANI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111872',
                'nama' => 'ALDILLA PRAMUDITA CAESAR',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111887',
                'nama' => 'ANASTASIA LAURNT',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111922',
                'nama' => 'ARIZQA SHAFA SALSABILA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111957',
                'nama' => 'BINTANA TAJMALA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111959',
                'nama' => 'BINTANG PUTRI AULIA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111960',
                'nama' => 'BOB LOUIS MANURUNG',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111962',
                'nama' => 'CAHYA VIANTI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111980',
                'nama' => 'DEBBY CYNTHIA NINGRUM',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212111994',
                'nama' => 'DIVA MAHARANI BASUKI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112036',
                'nama' => 'FAJAR HARDIANSYAH',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112046',
                'nama' => 'FATHANIA RUSMA HAMIDAH',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112051',
                'nama' => 'FATIMAH RAHMASARI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112077',
                'nama' => 'GINA AMALIA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112100',
                'nama' => 'I KETUT ADI CHANDRA WIGUNA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112104',
                'nama' => 'IFTINA IKA RAHMAWATI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112119',
                'nama' => 'IZUMI CITRA AMELIA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112132',
                'nama' => 'KENNY MARSELL VENEZIA RAIQHAN',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112152',
                'nama' => 'LANGKAH PRIYA KALOKA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112192',
                'nama' => 'MOHAMMAD ILHAM MAHFUD',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112211',
                'nama' => 'MUHAMMAD FAJAR SIDDIQ',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112215',
                'nama' => 'MUHAMMAD HANIF PERMANA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112240',
                'nama' => 'NAILU ROKHMAH',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112252',
                'nama' => 'NI KOMANG AYU MITA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112313',
                'nama' => 'RENI PRATAMAWATI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112317',
                'nama' => 'RIA SEPTIANA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112327',
                'nama' => 'RISKI TOMMI MARDONI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112389',
                'nama' => 'SYARIFA SALSABILA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112394',
                'nama' => 'SYOFMARLIANISYAH PUTRI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112403',
                'nama' => 'TYAS KURNIA WIJAYANTI',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112411',
                'nama' => 'VIA YUANISA AULIA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112424',
                'nama' => 'YULIA ARIZKA',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212112431',
                'nama' => 'ZENA AZZAHRA DZUNNURAIN',
                'kelas' => '4SK2',
            ],
            [
                'nim' => '212011264',
                'nama' => 'Muhammad Yusuf ',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212111846',
                'nama' => 'ADIVA INTAN AULIA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212111882',
                'nama' => 'AMELIA DYAH SAFITRI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212111927',
                'nama' => 'ASRUL RAZI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212111942',
                'nama' => 'AZWAR MUHTAR',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112017',
                'nama' => 'ELYSIA PUTRI LINDA TRIANA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112040',
                'nama' => 'FARADILLA CHAIRIN NINDA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112050',
                'nama' => 'FATIMAH AZZAHRAH',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112061',
                'nama' => 'FIRDA AZZAHROTUNNISA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112068',
                'nama' => 'GALUH RETNO UTAMI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112080',
                'nama' => 'GRAHANI SWITAMY BR MANIK',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112088',
                'nama' => 'HANNA SAJIDHA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112113',
                'nama' => 'INSAN DIENUARI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112146',
                'nama' => 'LAILA FAKARISMA AGUSTIN',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112166',
                'nama' => 'M. TORIQ AL HIJRAH',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112181',
                'nama' => 'MAULANA KUSUMA RAMADHAN',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112221',
                'nama' => 'MUHAMMAD RAIHAN ABHIRAMA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112233',
                'nama' => 'NABILA FATMA PUTRI YUNARDI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112235',
                'nama' => 'NABILA RANDRIKA PUTRI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112244',
                'nama' => 'NATASYA YUNITA PUTRI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112255',
                'nama' => 'NI PUTU AYU DENISHA KARTIKA SARASWATI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112270',
                'nama' => 'NUR HANIFAH MIFTAHUL JANNAH',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112274',
                'nama' => 'NURIN SALSABILA ISHAK',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112292',
                'nama' => 'PUTRI FEBIYANTI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112318',
                'nama' => 'RICKY ARDIYANSAH SAPUTRA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112328',
                'nama' => 'RISSA ERVIANA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112340',
                'nama' => 'ROSELINA PUTRI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112341',
                'nama' => 'RULLY FIRMANSYAH SURYO ANDRIYANTO',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112352',
                'nama' => 'SARI INTAN LATIFAH BR. HUTAGAOL',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112381',
                'nama' => 'SUFI NUR SHAFIRA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112391',
                'nama' => 'SYAWALGI WAHYU IMANI',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112395',
                'nama' => 'TEGUH PRIHARYANTO',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112398',
                'nama' => 'TIARA CHAIRUNNISA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '212112399',
                'nama' => 'TIARA PUTRI SETIA PUSPITA',
                'kelas' => '4SK3',
            ],
            [
                'nim' => '112212438',
                'nama' => 'ABEDNEGO SILABAN',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212443',
                'nama' => 'ADHA ASY SYIFA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212454',
                'nama' => 'AFRI YADI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212463',
                'nama' => 'AHMAD RAMDANI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212465',
                'nama' => 'AHMAD WAHYU FEBRIAN',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212491',
                'nama' => 'AMELIA CALISTA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212519',
                'nama' => 'ARYA SAMUEL MANDY',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212521',
                'nama' => 'ASYIFA CHOIRUNNISA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212527',
                'nama' => 'AWANGGA WISENA AJI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212549',
                'nama' => 'CLARA DIVA VERIANINTA LAGUM',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212552',
                'nama' => 'DAFA RIYANDIKA MAHENDRA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212561',
                'nama' => 'DEFFRY CHAIRUACHSA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212611',
                'nama' => 'FIKRI SURAHMAN',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212630',
                'nama' => 'HADISHA SHAFA ANASYA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212634',
                'nama' => 'HAMIDA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212648',
                'nama' => 'HOTTON JONATAN',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212660',
                'nama' => 'ILHAM DWI KUNCORO',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212661',
                'nama' => 'ILHAM KHALIQ',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212667',
                'nama' => 'INDI PRILISTIANA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212727',
                'nama' => 'MAYLINA SAFITRI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212731',
                'nama' => 'MIFTAH AULIA RAMADANTI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212807',
                'nama' => 'NUR QALBI. MR',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212817',
                'nama' => 'PRATAMA RHOMDONI PUTRA ISMAIL',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212821',
                'nama' => 'PUTRI REHULINA DAMANIK',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212823',
                'nama' => 'RADDIN AQILAH',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212837',
                'nama' => 'RATNA JUWITA SALENSEHE',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212841',
                'nama' => 'RESKY AMALIA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212842',
                'nama' => 'RESTI YULIANDA PUTRI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212846',
                'nama' => 'REZKY MAHARANI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212866',
                'nama' => 'SADIYYAH MAHARDIKA SETYO PUTRI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212886',
                'nama' => 'SITTI NURHASANA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212903',
                'nama' => 'VALENCIA FEBIOLA SAPUTRI',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112212908',
                'nama' => 'VHANIA MUTIARA INDAH SINAGA',
                'kelas' => '3D31',
            ],
            [
                'nim' => '112112199',
                'nama' => 'MUHAMAD TAUFIK ARDIANSYAH',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212456',
                'nama' => 'AGNES R.K. SILALAHI',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212466',
                'nama' => 'AILSA CANTIKA PUTRI',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212471',
                'nama' => 'AKBARRULLAH YUSMAN',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212482',
                'nama' => 'ALIFAH SUHAILA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212492',
                'nama' => 'AMELIA RAHEL SIGALINGGING',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212494',
                'nama' => 'AMRISANY SEKTORA DAUD',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212496',
                'nama' => 'ANANDA GALUH INTAN PRASETYA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212503',
                'nama' => 'ANGGRA DWI PRASETYA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212563',
                'nama' => 'DEVINA SALSABIILA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212607',
                'nama' => 'FEBI YULITA TELUPERE',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212609',
                'nama' => 'FERDINANDUS BATA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212637',
                'nama' => 'HANY FEBRIANTY',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212640',
                'nama' => 'HERSA MAULINA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212672',
                'nama' => "ISNATUL MU'ANISSAH",
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212688',
                'nama' => 'KAMARETA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212699',
                'nama' => 'LAILATUL AMRI',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212705',
                'nama' => 'LINDA RAHMAWATI',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212725',
                'nama' => 'MAY ANNA LAURA NAINGGOLAN',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212732',
                'nama' => 'MIKHAEL GAMALIEL PADE',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212740',
                'nama' => 'MUHAMAD IZZAT MUTTAQIN',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212770',
                'nama' => 'MUHAMMAD RUHUL IKHSAN',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212791',
                'nama' => 'NI KOMANG DIVA AMALIA PUTRI NANDITA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212801',
                'nama' => 'NITO SUDINATA',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212804',
                'nama' => 'NUGRAHA WAHYU PUTRA SUPIADI',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212819',
                'nama' => 'PUTRI MOELINDA FITRIANI',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212830',
                'nama' => 'RAIHAN AINURRAHIM FALAH',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212848',
                'nama' => 'RIA INDRIANI',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212858',
                'nama' => 'RIZKY IR.SIHOMBING',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212906',
                'nama' => 'VENDREDY P. LUCASIO SIAHAAN',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212928',
                'nama' => 'YULISMAH',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212931',
                'nama' => 'ZAHRA KHAIRUNNISAK',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212933',
                'nama' => 'ZAHWA ZALZABILA PARHAS',
                'kelas' => '3D32',
            ],
            [
                'nim' => '112212437',
                'nama' => 'ABDUROQY ALIMARWAN DUNDA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212441',
                'nama' => 'ADE OCTARINA PAKPAHAN',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212450',
                'nama' => 'ADWA SAWALIAH',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212475',
                'nama' => 'ALFIAN SABASTYA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212478',
                'nama' => 'ALIEF RADITIA ALI',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212502',
                'nama' => 'ANGGIA SARI SIREGAR',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212504',
                'nama' => 'ANI NGALEMISA SIMBOLON',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212513',
                'nama' => 'ARIKHZA SAPUTRI',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212524',
                'nama' => 'AULIA ZAHRA RAHMAH',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212547',
                'nama' => 'CICI NURHALIZA AMANAH',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212604',
                'nama' => 'FATIMATUZZUHRA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212623',
                'nama' => 'GALANG BAYU DAMAR YUDHISTIRA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212639',
                'nama' => 'HENDRIKUS MOYA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212643',
                'nama' => 'HESEKIEL KRISTIADE RAJAGUKGUK',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212653',
                'nama' => 'I WAYAN DIVANDRA MAHARESANDYA SUKAJAYA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212654',
                'nama' => 'I WAYAN RENDI PRATAMA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212657',
                'nama' => 'IJAZATUL LABIBAH AL BARIZAH',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212728',
                'nama' => 'MELINA ZATI IZZAH',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212737',
                'nama' => 'MUH. DZULRIAN',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212765',
                'nama' => 'MUHAMMAD RAIHAN',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212769',
                'nama' => 'MUHAMMAD ROIHAN ABADI',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212790',
                'nama' => 'NI KETUT PEBRIANTINI',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212793',
                'nama' => 'NI MADE WIDYA PARAMITA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212835',
                'nama' => 'RANA ISRANAENI INHAR',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212843',
                'nama' => 'REVINA SIREGAR',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212860',
                'nama' => 'RIZQE PUTRI ROSALIA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212862',
                'nama' => 'ROMARIO  DESOUZA DANIEL MANGIWA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212867',
                'nama' => 'SALMA ANIDA',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212875',
                'nama' => 'SELI DELIMA SARI',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212882',
                'nama' => 'SINDY ALOIYA BR MANULLANG',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212883',
                'nama' => 'SINTYA RIAGUSTY DZAKIYYAH IRAWAN',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212891',
                'nama' => 'SUSI AMBARWULAN',
                'kelas' => '3D33',
            ],
            [
                'nim' => '112212929',
                'nama' => 'YUSITA OCTINA BUDIYANTI',
                'kelas' => '3D33',
            ],
            [
                'nim' => '212212442',
                'nama' => 'ADELINA ARIQOH KHAIRUNNISAH',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212458',
                'nama' => 'AHMAD EXCELL RAMADHAN TAMPUBOLON',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212459',
                'nama' => 'AHMAD FAIZ HABIBI',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212473',
                'nama' => 'ALFARIZI REHAN MAULANA',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212479',
                'nama' => 'ALIF HIDAYAH NUR RAHMADANI',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212486',
                'nama' => 'ALLYSA SANDHIVA SALSABILA',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212548',
                'nama' => 'CICIK NURBIYANTI',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212558',
                'nama' => 'DAVIKA FATHMA GUSNINDAR',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212566',
                'nama' => 'DIAH MAWARNI',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212567',
                'nama' => 'DIAN ASTI PRAMESWARI',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212577',
                'nama' => 'DYATMIKA ARDAYA INDRIYA JATI',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212584',
                'nama' => 'ENRIQUE ABIZAID NAINGGOLAN',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212597',
                'nama' => 'FARHAN NGKAL ALSALSABIL',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212666',
                'nama' => 'INDHIRA PUTRI RAMA',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212670',
                'nama' => 'IRA SALSABILA',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212684',
                'nama' => 'JOSEPHIN PIRDINANSIUS HUTABARAT',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212719',
                'nama' => 'MAHARANI NUR HALIZAH',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212726',
                'nama' => 'MAYANG AYUSTINA RIZKI',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212747',
                'nama' => 'MUHAMMAD AKBAR HASLEY HOSSEIN',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212749',
                'nama' => 'MUHAMMAD FAISAL HARAHAP',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212768',
                'nama' => 'MUHAMMAD RIVAN GHOZZY ABDULLAH',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212805',
                'nama' => 'NUGROHO TESLA ARIANTO',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212814',
                'nama' => 'PANDAHAYU MEYGA TSABITAH',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212825',
                'nama' => 'RADIVAN',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212834',
                'nama' => 'RAMONA SAVA ELYSIA',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212850',
                'nama' => 'RIFKI SYAUQI ARISYAHPUTRA HSB',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212873',
                'nama' => 'SARAH NURUL AINI LUBIS',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212881',
                'nama' => 'SHOFA MAULIDA ZAHRAA',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212895',
                'nama' => 'TEGAR NABIL HAKIM',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212900',
                'nama' => 'ULLY PRISCA MAWADAH',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212930',
                'nama' => 'YUSUF NATANAEL ARITONANG',
                'kelas' => '3SE1',
            ],
            [
                'nim' => '212212440',
                'nama' => 'ADE AYU FITRIANA ABDILLAH',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212495',
                'nama' => 'ANAK AGUNG ISTRI ANGGITA KESUMAWIJAYA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212500',
                'nama' => 'ANGGI DWI PUSPITA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212505',
                'nama' => 'ANIS LATIFAH',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212529',
                'nama' => 'AZ ZIKRI REZA PAHLEVI',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212530',
                'nama' => 'AZIZAH HEMILTON',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212544',
                'nama' => 'CHEW MYKY SYLVYANA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212568',
                'nama' => 'DICKY AULIA SEPTIAN',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212574',
                'nama' => 'DUSTIN RAKA WIDIANANTA ASLAM',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212579',
                'nama' => 'ELFIRA ELSA DAMAYANTI',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212588',
                'nama' => 'FADIAH YAHYA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212590',
                'nama' => 'FADILAH',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212629',
                'nama' => 'HABIB AL HAKIM',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212641',
                'nama' => 'HERU ARYO PRASETIO',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212655',
                'nama' => 'IBEN SEBASTIAN',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212669',
                'nama' => 'IQBAL MAULANA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212689',
                'nama' => 'KARINA RETNO YANWARI',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212704',
                'nama' => 'LIA DEVITA MALEM SEMBIRING',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212716',
                'nama' => 'M. TAUFIQUR RAHMAN',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212717',
                'nama' => 'M.HAKIM PRAMANAJATI',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212735',
                'nama' => 'MUCHAMMAD LUTHFI AFFANDY',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212753',
                'nama' => 'MUHAMMAD GILANG PERMADI',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212763',
                'nama' => 'MUHAMMAD RAFA ARIANTO',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212780',
                'nama' => 'NADITA KHAIRANI',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212818',
                'nama' => 'PUJI LAILA MAHARNI',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212829',
                'nama' => 'RAHMAT HIDAYAT',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212831',
                'nama' => 'RAIHAN SOFIA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212832',
                'nama' => 'RAIHAN SURYA SAPUTRA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212855',
                'nama' => 'RIZAL DWI SYAHPUTRA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212869',
                'nama' => 'SALSA MUTIA SANDY',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212871',
                'nama' => 'SALWA FAUZA NAFISA',
                'kelas' => '3SE2',
            ],
            [
                'nim' => '212212436',
                'nama' => 'A. FAIDHUL MUSTAGFIR USMAN',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212449',
                'nama' => 'ADNAN DAHIYA ADDARUQUTNI',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212451',
                'nama' => 'AFIFAH DAYAN SYAHARANI',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212460',
                'nama' => 'AHMAD FARHAN ANUGRAH',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212462',
                'nama' => 'AHMAD MUJAMIL NURFARISI',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212467',
                'nama' => 'AINA SUROYYA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212506',
                'nama' => 'ANJELITA NABILA PUTRI',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212514',
                'nama' => 'ARIL HISYAM',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212516',
                'nama' => 'ARISTA IKA CAHYARANI',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212621',
                'nama' => 'GABRIELLA ELISABETH SIMANUNGKALIT',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212636',
                'nama' => 'HANIF SABILLAH',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212642',
                'nama' => 'HERVIRA NUR SHAFIRA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212645',
                'nama' => 'HIKMAL MARDIAN IRIANTO',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212646',
                'nama' => 'HILDA PRISKILIA BARUTU',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212652',
                'nama' => 'I WAYAN BAYU DIVA YANA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212675',
                'nama' => 'IVANSYAH CYNDU PRAHESTIAWAN',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212679',
                'nama' => 'JAUZIE FALSON',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212687',
                'nama' => 'KADEK DODY KUSUMA HERMAWAN',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212702',
                'nama' => 'LASTRI RAMADANI SIBURIAN',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212711',
                'nama' => 'MAYZA HANIF ABBAD MAHARDIKA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212739',
                'nama' => 'MUHAMAD CHOZA INUL MUNA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212803',
                'nama' => 'NOVRIAN MARIA PURBA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212826',
                'nama' => 'RAFI ARIQ HAKIM',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212840',
                'nama' => 'RENDY DWI AGATHA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212877',
                'nama' => 'SERLY AGUSTINA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212885',
                'nama' => 'SITI TESYA MUNIFA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212889',
                'nama' => 'SRI RAHAYU HASIBUAN',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212897',
                'nama' => 'TIARA KHORIJAH HAMID SIREGAR',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212913',
                'nama' => 'WANDA HAFIZAH HARAHAP',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212922',
                'nama' => 'YENI THALIA',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212935',
                'nama' => 'ZIVEN RINTIS AMZARI',
                'kelas' => '3SE3',
            ],
            [
                'nim' => '212212445',
                'nama' => 'ADINDA SAFIRA SANTOSO AYUNINGRUM',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212457',
                'nama' => 'AGUSTIN KURNIASARI',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212461',
                'nama' => 'AHMAD FEBRIAN MUHAROM',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212469',
                'nama' => 'AINURAHMA DILLA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212474',
                'nama' => 'ALFI HIDAYATULLAH',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212477',
                'nama' => 'ALICIA RAMADHANI PUTRI SUWARNO',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212498',
                'nama' => 'ANDI MUH. ZULFADHIL ZAREKA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212541',
                'nama' => 'BUNGA MUSVA COTVA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212556',
                'nama' => 'DARA SAKINA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212622',
                'nama' => 'GALANG ALI FAZRAL PRATAMA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212631',
                'nama' => 'HAFIDH REAN PUTRA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212649',
                'nama' => 'I GEDE CAKRA PRATAMA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212650',
                'nama' => 'I KADEK SURYA WISESA ADNYANA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212681',
                'nama' => 'JESSICA E. MARXARIOS PANGARIBUAN',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212709',
                'nama' => 'M. AL FARISI',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212710',
                'nama' => 'M. HAFIDZ HABIBULLAH',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212723',
                'nama' => 'MAURA BINTANG POTENZA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212745',
                'nama' => 'MUHAMMAD AFIF ELSANDA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212746',
                'nama' => 'MUHAMMAD AFIF WIRDIYAN ZALDI',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212754',
                'nama' => 'MUHAMMAD HARIADDIN',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212762',
                'nama' => 'MUHAMMAD OMAR ZUDAN FAHRIZAL',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212797',
                'nama' => 'NINDY CANDRA AYU PUSPA SARI',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212806',
                'nama' => 'NUR FAQIH IHSAN',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212852',
                'nama' => "RIHHADATUL AISY'",
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212859',
                'nama' => 'RIZKY SAPUTRA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212864',
                'nama' => 'RUTH NATASYA SEPBRINA BR. LUMBAN GAOL',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212876',
                'nama' => 'SELLY DIAN FADILA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212890',
                'nama' => 'SUN ASI GABRIELLA SINAGA',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212905',
                'nama' => 'VANIA SALSALBILA GUSNI',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212912',
                'nama' => 'WAHYUNINGTYAS YUDHA SARJANI',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212927',
                'nama' => 'YULIANA KARTIKA PERMADANI',
                'kelas' => '3SE4',
            ],
            [
                'nim' => '212212483',
                'nama' => 'ALIFFIA FITRI INDRIANI',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212487',
                'nama' => 'ALTYTAN MARZHEREGA ASMORO',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212518',
                'nama' => 'ARNETA DIVA RAMADHANTI SUMANTRI',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212520',
                'nama' => 'ASTRI MELATI MANIK',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212543',
                'nama' => 'CESYA CLAUDIA SIRAIT',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212546',
                'nama' => 'CHULIA RACHMA NABILA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212559',
                'nama' => 'DEA MALAIKA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212581',
                'nama' => 'ELSA NOVITA PASARIBU',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212582',
                'nama' => 'ELSYA NABILA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212583',
                'nama' => 'ELVERDA ASTRID RAISSA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212592',
                'nama' => 'FAIRUZ AZIZAH NURFAYZA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212594',
                'nama' => 'FAJAR FITHRA RAMADHAN',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212619',
                'nama' => 'FRYSKA  MAHARANI',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212659',
                'nama' => 'ILHAM ARYA DHUTA ZAIN',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212664',
                'nama' => 'INDAH MARATUSH SHOLIKHAH',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212692',
                'nama' => 'KEVIN SIMAMORA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212693',
                'nama' => 'KILAT TRI PRASETYO',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212701',
                'nama' => 'LARAS FEBRIANA MANURUNG',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212706',
                'nama' => 'LISTYA MAWARNI',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212713',
                'nama' => 'M. IRSYAD ABIMANYU',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212741',
                'nama' => 'MUHAMAD RIVALDI TAMIM',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212758',
                'nama' => 'MUHAMMAD IRFAN CHUDLORI',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212778',
                'nama' => "NABILAH 'ADAWIYAH",
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212782',
                'nama' => 'NAFDIKA RIYANDA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212784',
                'nama' => 'NASYWA AINUN NABILAH',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212789',
                'nama' => 'NI KADEK DWI UTAMI',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212800',
                'nama' => 'NISRINA LUTHFIA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212845',
                'nama' => 'REYNADI WISNU WARDANA',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212861',
                'nama' => 'ROKHMIRATI PRASETYO',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212901',
                'nama' => 'UMNIYAH ZHAFIRAH',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212917',
                'nama' => 'WISNU ADIAKSA NADEAK',
                'kelas' => '3SK1',
            ],
            [
                'nim' => '212212446',
                'nama' => 'ADINDA YULIA SETYOWATI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212464',
                'nama' => 'AHMAD RIZKI ALSYAHBANI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212515',
                'nama' => 'ARINTA SALSABILA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212517',
                'nama' => 'ARIZKI DWI CAHYO',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212523',
                'nama' => 'AULIA ZAHRA PUTRI YASRI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212535',
                'nama' => 'BERLIAN BAGUS ANTONIA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212557',
                'nama' => 'DAVA SETYAWAN PUTRA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212560',
                'nama' => 'DEDY HENDRIKO HASIHOLAN SINAGA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212578',
                'nama' => 'DZULFIKRI YARHAMUL AKBAR',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212591',
                'nama' => 'FADILLA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212601',
                'nama' => 'FATHIYAH NUR SHOHWAH',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212606',
                'nama' => 'FAUZAN FARIS SAGITA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212620',
                'nama' => 'GABRIELA IESY  DOMINGGO SINAMO',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212662',
                'nama' => 'IMAM FATHONI ARUFI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212734',
                'nama' => 'MOHAMMAD IQBAL WICAKSONO',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212779',
                'nama' => 'NADIA LUTFI MEILAWATI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212785',
                'nama' => 'NAUFAL QURAISH AZIMA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212795',
                'nama' => 'NILAM CAHYA MEILANI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212798',
                'nama' => 'NISA HAYATUN NUFUS',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212799',
                'nama' => 'NISRIINAA NAJLAA JEVON',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212809',
                'nama' => 'NURIHISHA NADYA PUTRI PRAKOSO',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212812',
                'nama' => 'OKTAVIANDO SABAR MENANTI PURBA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212820',
                'nama' => 'PUTRI MULIA UTAMI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212847',
                'nama' => 'REZKY RAHMA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212853',
                'nama' => 'RISKA AMILIA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212856',
                'nama' => 'RIZHIEQ DWI ANANDA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212874',
                'nama' => 'SEKAR TATU SYAFANI MAMDUDAH',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212879',
                'nama' => 'SHENDIKA AZIZAH MAHARANI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212880',
                'nama' => 'SHINTA RIFDIANTI',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212899',
                'nama' => 'TITIN JULIANTI BR. TINAMBUNAN',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212902',
                'nama' => 'USWATUN NISA RITONGA',
                'kelas' => '3SK2',
            ],
            [
                'nim' => '212212444',
                'nama' => 'ADINDA BATRISYIBAZLA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212452',
                'nama' => 'AFIFAH SALSABILA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212497',
                'nama' => 'ANANDA RANIA PUTRI',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212508',
                'nama' => 'ANNISA RIZQILLAH',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212536',
                'nama' => 'BERNIKO SURYA WIBAWA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212542',
                'nama' => 'CAHYA SABILA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212587',
                'nama' => 'EVANDHA MUSTIKA SARI',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212598',
                'nama' => 'FARIDA FATTUROHMAH',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212615',
                'nama' => 'FLOWINA PRATIWI',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212617',
                'nama' => 'FREKI GERRITS',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212638',
                'nama' => 'HECHA NOVIA RAHMADHANI',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212647',
                'nama' => 'HILMI MALIKA ATIM ILYAS',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212658',
                'nama' => 'IKRIMA ALI TASMIDA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212674',
                'nama' => 'IVAN SYAH MAULANA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212677',
                'nama' => 'JANET AMELIA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212686',
                'nama' => 'JUDIKA LASTIUR ARITONANG',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212694',
                'nama' => 'KURNIAN YUNIANTO',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212715',
                'nama' => 'M. RIDLO UBAIDILLAH',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212751',
                'nama' => 'MUHAMMAD FAZLAN JOHAN',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212757',
                'nama' => 'MUHAMMAD IQBAL',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212794',
                'nama' => 'NIDA NUR MAGHFIROH',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212808',
                'nama' => 'NURFADILLA RAHMA SEPTIANA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212811',
                'nama' => 'OKKY NURUL FADHILAH',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212815',
                'nama' => 'PENI AGUSTINI',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212851',
                'nama' => 'RIFQI FAKHRIZAL ADAM',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212870',
                'nama' => 'SALSABILA NAHDA ALMUTI',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212904',
                'nama' => 'VANESSA RUTH EVELYN TOBING',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212909',
                'nama' => 'VICHA AMALIA AKBAR',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212914',
                'nama' => 'WHISNU MAULANA PUTRA',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212918',
                'nama' => 'WISNU AIMARIYADI',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212212923',
                'nama' => 'YESHA ELLISYA PAULINKA LUMBAN GAOL',
                'kelas' => '3SK3',
            ],
            [
                'nim' => '212112435',
                'nama' => 'ZULFANITA FALIKHAH',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212439',
                'nama' => 'ACHMAD MAULANA ANDI WICAKSONO',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212453',
                'nama' => 'AFINA ZAHRAH ANANDA WIBOWO',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212510',
                'nama' => 'APRILANO FAIZ HUSIEN',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212511',
                'nama' => 'ARIFA TRI SARWOSIH',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212532',
                'nama' => 'BAGUS PUTRA PRATAMA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212545',
                'nama' => 'CHRISTANTI PRILLY MUSU',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212599',
                'nama' => 'FARISA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212613',
                'nama' => 'FIRDA DESSYA DWITANTI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212616',
                'nama' => 'FRANSISCA ANGGIANA SAPUTRI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212618',
                'nama' => 'FRISKA NOVELIA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212665',
                'nama' => 'INDAHTUL GHAISTA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212682',
                'nama' => 'JESSICA MAHARANI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212690',
                'nama' => 'KARINI HALMA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212714',
                'nama' => 'M. NAFIS SYAHLENDRI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212721',
                'nama' => 'MARLON BRANDO RAJAGUKGUK',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212724',
                'nama' => 'MAY ALYA RIANI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212733',
                'nama' => 'MIRANDA AULIA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212761',
                'nama' => 'MUHAMMAD NAUFAL FARAS SAPUTRA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212764',
                'nama' => 'MUHAMMAD RAHADI SIREGAR',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212771',
                'nama' => 'MUHAMMAD SABRIL HUSNAN',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212774',
                'nama' => 'MUHAMMAD ZACKY ARIE PRATAMA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212781',
                'nama' => 'NADYA NOOR HASTIN',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212792',
                'nama' => 'NI LUH PUTU ARI SUSIAWATI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212796',
                'nama' => 'NIMAS AYU EKA PUTRI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212839',
                'nama' => 'REGHITA MARIA HUTAGALUNG',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212854',
                'nama' => 'RISMA ALIFIYANTI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212884',
                'nama' => 'SISKA WAHYU OKTAVIANA',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212893',
                'nama' => 'SYFRIZA DAVIES RAIHANNABIL',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212919',
                'nama' => 'YASMIN NUR ALYA NABILAH',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '212212920',
                'nama' => 'YASMIN SYAHADA NIANDINI',
                'kelas' => '3SK4',
            ],
            [
                'nim' => '222212448',
                'nama' => 'ADITYA MELPIANSYAH',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212484',
                'nama' => 'ALIFIA RAHMA NUR ANTHONY PUTRI',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212488',
                'nama' => 'ALVIN JEREMY NAIBORHU',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212507',
                'nama' => 'ANNICKA YUMNA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212509',
                'nama' => 'ANTONIUS BAGAS SUNU WIGUNA ARDY',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212533',
                'nama' => 'BARA REYHAN DARY',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212539',
                'nama' => 'BRIEL SEVTRIOBRAGI SIHALOHO',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212572',
                'nama' => 'DODI FIRMANSYAH',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212575',
                'nama' => 'DWI ALFANI MERLIA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212576',
                'nama' => 'DWINANDA MUHAMMAD KEYZHA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212585',
                'nama' => 'ESRA YOSEFA SIMARMATA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212593',
                'nama' => 'FAJAR ANDHIKA BUDI UTOMO',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212595',
                'nama' => 'FAKHRIZAL AKBAR MUHAMMAD',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212603',
                'nama' => 'FATIH HAKIM MUDZAKY',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212644',
                'nama' => 'HEZEKIEL ALBI SIDAURUK',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212673',
                'nama' => 'ISTANTI PRIMA NURANI',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212676',
                'nama' => 'JAISY NURHASANAH',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212698',
                'nama' => 'LA ODE RAFIQ ZANDIK BADARUN',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212720',
                'nama' => 'MARIO FRANSISKUS JAMON',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212722',
                'nama' => 'MAULANA RYAN ALDO KURNIAWAN',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212730',
                'nama' => 'MEUTIA MAHARANI',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212738',
                'nama' => 'MUH. NUR AFRIZAL',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212743',
                'nama' => 'MUHAMMAD ADITYA RAMADHANI',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212744',
                'nama' => 'MUHAMMAD AFDAL ALMUFARID',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212750',
                'nama' => 'MUHAMMAD FAUZAN FADHIL KURNIA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212767',
                'nama' => 'MUHAMMAD RIFKY HIDAYATULLAH',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212773',
                'nama' => 'MUHAMMAD THORIQ DWI ALFIAN',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212775',
                'nama' => 'MUHAMMAD ZACKY HETA WARMAN',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212802',
                'nama' => 'NOVIA ADE YUANITA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212813',
                'nama' => 'PAMUNGKAS DERO IVANO',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212833',
                'nama' => 'RAMBATI LUMBUNG PARDJA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212836',
                'nama' => 'RANIA SHAFIRA EKASANTI',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212838',
                'nama' => 'RATU BILQIS AZZUHRAH',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212887',
                'nama' => 'SOFIA NUR AFIFAH RAHAYU',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212892',
                'nama' => 'SYAWALUDIN',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212894',
                'nama' => 'TAN AZZA NURO AZZIKRA',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222212898',
                'nama' => 'TITHA NUR IZZAH',
                'kelas' => '3SI1',
            ],
            [
                'nim' => '222112106',
                'nama' => 'IMALIA ROSYIDA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212455',
                'nama' => 'AGAPE BAGUS REGA ANGGARA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212481',
                'nama' => 'ALIF NUR HIDAYAH',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212485',
                'nama' => 'ALKINDI REZKI ANWAR',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212499',
                'nama' => 'ANDI NUR WAHIDAH AZHAR MANGKONA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212526',
                'nama' => 'AURA PUTRI MAHARANI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212528',
                'nama' => 'AYU AMANDA SHALSA PUTRI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212534',
                'nama' => 'BELA NOVITA SARI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212537',
                'nama' => 'BLESSY MUNTHIA PURBA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212554',
                'nama' => 'DANIEL ALEXANDER PEDRO SILALAHI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212555',
                'nama' => 'DANIEL DABRA PASONGLI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212570',
                'nama' => 'DIMAS PRASETYO',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212589',
                'nama' => 'FADILA PRIMA RAHAYU',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212596',
                'nama' => 'FARHAN ADI SURIPTO',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212602',
                'nama' => 'FATHURRAHMANUDDIN',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212610',
                'nama' => 'FICKRY ATMAYOGA WIENALDI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212627',
                'nama' => 'GILDBRAN ABISHA TERSENA SITEPU',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212651',
                'nama' => 'I PUTU ARY WIDIARSA SAPUTRA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212683',
                'nama' => 'JORDAN DWI FEBRIYANTO',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212691',
                'nama' => 'KEVIN ATHA FATHONI RAMADHA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212695',
                'nama' => 'LA ODE FARHAN REZKA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212707',
                'nama' => 'LOUISTA THANIA HARAHAP',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212755',
                'nama' => 'MUHAMMAD HILMA RAFFANDY',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212756',
                'nama' => 'MUHAMMAD ILHAM CAHYANTO',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212759',
                'nama' => 'MUHAMMAD NABIL FAWWAZ',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212766',
                'nama' => 'MUHAMMAD RAYHAN FARIDH',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212772',
                'nama' => 'MUHAMMAD SALAHUDDIN',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212776',
                'nama' => 'MUHAMMAD ZAYAN HAFIZH HADAYA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212777',
                'nama' => 'MULIANI SILALAHI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212788',
                'nama' => 'NAZWA ADITYA DANISWARA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212844',
                'nama' => 'REYKHAN KHARIS ALEXANDRO BATUBARA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212868',
                'nama' => 'SALMA LUTHFINA ZHAFIROH',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212878',
                'nama' => 'SHAFNANDA AULIA KAMAL',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212896',
                'nama' => 'THORIQ MUSTAFA AKMAL',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212921',
                'nama' => 'YEDIJA LEWI SURYADI',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212925',
                'nama' => 'YULIA DHITA CAHYA KUMALA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222212926',
                'nama' => 'YULIA WIDA KHARISMA',
                'kelas' => '3SI2',
            ],
            [
                'nim' => '222112133',
                'nama' => 'KEVIN ANANDA PUSPITA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212447',
                'nama' => 'ADITYA HARI KURNIA PUTRA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212468',
                'nama' => 'AINUL FATIMAH',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212470',
                'nama' => 'AJENG SARAH MEZZALUNA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212489',
                'nama' => 'AMALYAH RIZKY KHAIRUNNISA SUTARTO',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212490',
                'nama' => 'AMANDA AMELIA SALSABILA SINAGA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212522',
                'nama' => 'ATIKAH NURFADIA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212525',
                'nama' => 'AULIA ZULFA KURNIAWAN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212538',
                'nama' => 'BOBY IWAN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212553',
                'nama' => 'DANDI DAVID ANUGRAH PAKPAHAN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212564',
                'nama' => 'DEWI NURIHANDAYANI',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212565',
                'nama' => 'DEWI SOFIATUL HIMMAH',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212571',
                'nama' => 'DITA CHRISTINE TARIGAN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212605',
                'nama' => 'FAUZAN ALFARABY NIRWAN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212608',
                'nama' => 'FEBRINA BR PERANGIN-ANGIN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212625',
                'nama' => 'GIHON NAKATA SILAEN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212626',
                'nama' => 'GILBERT RUBENSON',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212635',
                'nama' => 'HANA HANIFATUL HASANAH',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212663',
                'nama' => 'IMAN ALIFA NOVANSYAH',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212668',
                'nama' => 'INTAN AINUN HAYATI',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212678',
                'nama' => 'JANITRA HAYU PRAMESTYA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212697',
                'nama' => 'LA ODE MUHAMMAD KHAIDIR',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212703',
                'nama' => 'LAURENTIUS TRISNA YUWANA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212748',
                'nama' => 'MUHAMMAD AKMIL TRIADI',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212760',
                'nama' => 'MUHAMMAD NABILUL MAKARIM',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212783',
                'nama' => 'NAMIRA SEKAR DIANINGTYAS',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212786',
                'nama' => 'NAZHIFAH NUR SALSABILA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212816',
                'nama' => 'PINASTHIKA MENTARI PUTRI',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212822',
                'nama' => 'PUTU DIAN SHINTA PRATIVI',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212827',
                'nama' => 'RAFLIANSYAH DWI SETIAWAN TONDAU',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212857',
                'nama' => 'RIZKY ALIF ICHWANTO',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212888',
                'nama' => 'SOLIDEO GRACIO BANGUN',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212907',
                'nama' => 'VERY DWI PRASETYA',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212910',
                'nama' => 'WAFI AULIA TSABITAH',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212911',
                'nama' => 'WAHYU SATRIO WIDODO',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212915',
                'nama' => 'WILFA AFRIYANI',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212932',
                'nama' => 'ZAHRA MUFIDAH ARIANI',
                'kelas' => '3SD1',
            ],
            [
                'nim' => '222212476',
                'nama' => 'ALFITRA RIFA GEANDRA SIREGAR',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212480',
                'nama' => 'ALIF MEDIAN RAMADHAN',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212493',
                'nama' => 'AMIR MUMTAZ SIREGAR',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212501',
                'nama' => 'ANGGI MARYA PUTRI ARIVIA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212512',
                'nama' => 'ARIH RAHMAWATI',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212531',
                'nama' => 'AZIZAH NAJLA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212550',
                'nama' => 'CLOUDYA QASHWAH MONTOLALU',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212551',
                'nama' => 'CUT INDAH RAIHANNUR',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212562',
                'nama' => 'DESTIANA SALSABILA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212569',
                'nama' => 'DIMAS HAAFIZH RAHMAN',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212580',
                'nama' => 'ELISSE KRISELA FABRIANNE',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212586',
                'nama' => 'EUROREA WIRATA RAJA PANJAITAN',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212600',
                'nama' => 'FARUQ ARIYA JALAKSANA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212612',
                'nama' => 'FIONA AUDIA NAULI SIHOMBING',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212614',
                'nama' => 'FITRI AINI IZZATI',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212624',
                'nama' => 'GERALDO BENEDICTUS SINULINGGA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212628',
                'nama' => 'GLORY ZEFANYA NABABAN',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212671',
                'nama' => 'IRSAN WIRAYUDHA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212680',
                'nama' => 'JERNITA BINTANG YULIANI MANALU',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212685',
                'nama' => 'JUAN LUBVRIN FERNANDEZ SIDABUKKE',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212696',
                'nama' => 'LA ODE MUHAMMAD GAZALI',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212708',
                'nama' => 'LUTVIA RAHMA KUMALA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212712',
                'nama' => 'M. IHSAN SILMI KAFFAH',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212718',
                'nama' => 'MADE NISA RAHAYU ANANDA SUWENDRA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212729',
                'nama' => 'MEUTHIA NAZHIFAH MUTHMAINNAH',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212736',
                'nama' => 'MUH. ALFIAN AMNUR',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212752',
                'nama' => 'MUHAMMAD GILANG HIDAYAT',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212787',
                'nama' => 'NAZLYA RAHMA SUSANTO',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212810',
                'nama' => 'NURUL FADILA UTAMI',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212824',
                'nama' => 'RADITYA HIZRA MAHARANI',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212828',
                'nama' => 'RAHMADIKA KEMALA SALSABIELA',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212865',
                'nama' => 'SABASTIAN ALFONS BAHY',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212872',
                'nama' => 'SAMUEL MARVELIUS SIANTURI',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212916',
                'nama' => 'WILLY SUMBAYAK',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212924',
                'nama' => 'YOGA REGITA HAMZAH ASHARI',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '222212934',
                'nama' => 'ZHARIFAH DHIYA AYU ALISTIN',
                'kelas' => '3SD2',
            ],
            [
                'nim' => '112312950',
                'nama' => 'AHMAD DZAKY DAGNA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112312951',
                'nama' => 'AHMAD FARHAN',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112312954',
                'nama' => 'AISKHA ZAHRA NAISLVA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112312957',
                'nama' => 'ALFINA AZIZAH ZALMANI',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112312959',
                'nama' => 'ALIFA OLGANATA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112312989',
                'nama' => 'APRILIA KARTIKA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112312992',
                'nama' => 'ARDI WIRAHMAN',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313018',
                'nama' => 'BARRA GHITA PRATIWI',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313060',
                'nama' => 'DWI NOVI AVTAYANA PUTRI HARAHAP',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313063',
                'nama' => 'ELANG PERMANA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313083',
                'nama' => 'FATIKHA NURAZIZA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313091',
                'nama' => 'FLORENCIA FEIGA PUTRI SIREGAR',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313115',
                'nama' => 'HAWA KURNIA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313124',
                'nama' => 'I GEDE RIZKY PUTRA ARNAWA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313126',
                'nama' => 'I WAYAN ANANDA MURTIKA WIBAWA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313149',
                'nama' => 'JESSICA LA ERCADIOLA BR.GINTING',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313159',
                'nama' => 'KARINA NOVRILIA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313162',
                'nama' => 'KELPIN SAPUTRA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313194',
                'nama' => 'MAHARANI',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313211',
                'nama' => 'MISBAHUL JANNAH',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313270',
                'nama' => "MUTIA LU'LU ALHAWA",
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313287',
                'nama' => 'NALAH NAURAH ADYANTO',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313293',
                'nama' => 'NELA MERISKA PRATAMA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313296',
                'nama' => 'NI PUTU CHRISTINA MAHARANI NADA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313317',
                'nama' => 'PUSPA WULANDARI',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313329',
                'nama' => 'RAHMAT ANANDA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313352',
                'nama' => 'RIZKI ALLYSA IBRAHIM PUTRI',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313385',
                'nama' => 'SUKMA AMALIA SABRINA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313389',
                'nama' => 'SYAFIRA FALATANSYA',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313404',
                'nama' => 'THORIQ AQIL SASTRA LUBIS',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313420',
                'nama' => 'VIRANOSA ARIANA HAFSARI',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112313428',
                'nama' => 'YERIKHO',
                'kelas' => '2D31',
            ],
            [
                'nim' => '112312936',
                'nama' => "'ASJAD LATHIFAH LAMA'A",
                'kelas' => '2D32',
            ],
            [
                'nim' => '112312943',
                'nama' => 'AFIFAH KHAIRUNNISA PILIANG',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112312990',
                'nama' => 'APRILLYA ANGGRAINI',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313013',
                'nama' => 'AZZAHRA WIDYATAMI',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313014',
                'nama' => 'BAIQ NADIATUL ISMI',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313017',
                'nama' => 'BARAN HIDAYAT AZZAHRA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313047',
                'nama' => 'DHEA PATIKASARI NAPITUPULU',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313065',
                'nama' => 'ELSA SIMBOLON',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313084',
                'nama' => 'FEBRIAN JUSTITIANA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313099',
                'nama' => 'GEHVIRA FARADILLA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313114',
                'nama' => 'HASNA NUR KHOIRUNISA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313157',
                'nama' => 'KADEK ARGYANTI',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313169',
                'nama' => 'LAURENSIUS MARSYAL',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313172',
                'nama' => 'LILI NURINDAHSARI',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313185',
                'nama' => 'M. ALPARIZI. Z',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313193',
                'nama' => 'M.SATRIA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313236',
                'nama' => 'MUHAMMAD FAKHRI HABIBI',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313243',
                'nama' => 'MUHAMMAD IHSAN',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313260',
                'nama' => 'MUHAMMAD RUSYDI HARYANTO',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313300',
                'nama' => 'NITIS SUKMA WULAN AYU',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313315',
                'nama' => 'PRISCO MOSES CANDELA MELIALA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313335',
                'nama' => 'RAMUNA ASNAL',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313341',
                'nama' => 'RESA FERDHEA NOVITA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313353',
                'nama' => 'RIZKY PUTRA PRATAMA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313367',
                'nama' => 'SALSABILA ZULFA PUTRILIANA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313380',
                'nama' => 'SITI FATIMAH AZZAHRA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313392',
                'nama' => 'SYAIFUL KABIR',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313394',
                'nama' => 'SYAM ZULKARNAIN FAHIM',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313406',
                'nama' => 'TIVANNY RAHMA SAFURA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313418',
                'nama' => 'VIOLA AZIZAH MAHFUDZ',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313426',
                'nama' => 'WULAN SEPTIANI SHIFAATUL ULYA',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313432',
                'nama' => 'YOHANA HERDIANLY BR NAINGGOLAN',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112313448',
                'nama' => 'ZUHROINI HAYATI',
                'kelas' => '2D32',
            ],
            [
                'nim' => '112312955',
                'nama' => 'ALDILA SALWA SALSABILA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112312996',
                'nama' => 'ARINI RAHMAH KAMILA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112312999',
                'nama' => 'ATHIYAH TSURAYYA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313001',
                'nama' => 'AULIANDARI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313010',
                'nama' => 'AWANG AVIAT',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313027',
                'nama' => 'CARLOS ARMANDO MARGANDA TUA SITOHANG',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313058',
                'nama' => 'DITA WINDY AMANDA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313078',
                'nama' => 'FAREL FAJAR PRASETYO',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313087',
                'nama' => 'FERDY KUSUMA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313093',
                'nama' => 'FRENDY TIGOR WIRATAMA SINAGA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313110',
                'nama' => 'HANIFAH LUTHFIANNISA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313142',
                'nama' => 'INDAH WAHYUNING UTAMI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313165',
                'nama' => 'KHABIRA YUDISMAREDI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313182',
                'nama' => 'M AKBAR RINALDI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313213',
                'nama' => 'MOHAMAD ALDI AMIRUL RASYID',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313237',
                'nama' => 'MUHAMMAD FOUZAN',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313277',
                'nama' => 'NADIA ZULFAA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313280',
                'nama' => 'NADIRA RAHMA PRAMESWARI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313310',
                'nama' => 'OLIVIA MIRZA ANDRIANI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313321',
                'nama' => 'PUTU AYUDHIA PRATAMI PUTRI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313322',
                'nama' => 'PUTU SINTA PRAMASTINI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313326',
                'nama' => 'RAFLI HIBRIANSYAH SIREGAR',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313331',
                'nama' => 'RAHMAT NURYADIN',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313337',
                'nama' => 'RATIH YULIANA PUTRI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313338',
                'nama' => 'RATIKA JIHAN KHAIRUNNISA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313357',
                'nama' => 'ROLAND YOHANES RENTENG',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313360',
                'nama' => 'ROSYIANA NURROHMAH',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313374',
                'nama' => 'SEFTIANA LAILI PUJI LESTARI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313388',
                'nama' => 'SYADZA SALSABILA',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313395',
                'nama' => 'SYIFA DWI AULIA PUTRI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313399',
                'nama' => 'TARYSA NABILA PUTRI ZUCI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313419',
                'nama' => 'VIOLA HANIF TRIMAHARANI',
                'kelas' => '2D33',
            ],
            [
                'nim' => '112313429',
                'nama' => 'YOCEYLIN FEBY SITORUS',
                'kelas' => '2D33',
            ],
            [
                'nim' => '212312940',
                'nama' => 'ABID ABIYYU SUWITRA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212312963',
                'nama' => 'AMALIA DWI NURRAHMA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212312972',
                'nama' => 'ANDHIN INTANNEGARA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212312981',
                'nama' => 'ANGGI FERDIAN SANLY',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212312998',
                'nama' => 'ASHY SULFIDAH',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313011',
                'nama' => 'AZIZ HIDAYATULLOH',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313028',
                'nama' => 'CHANDRA GUSTIAN',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313029',
                'nama' => 'CHANDRA HALIM ABDURRAHMAN',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313044',
                'nama' => 'DENIA DWI ROSDIANA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313057',
                'nama' => 'DIRCE JUSTINA FREITAS BELO',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313061',
                'nama' => 'EBY GAEL BR GINTING',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313062',
                'nama' => 'EFRIYENDI',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313075',
                'nama' => 'FAKHIRA ADDIA MULAWARMAN',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313095',
                'nama' => 'FRIDOLIN CLADIO FERREIRA FERNANDES',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313119',
                'nama' => 'HENING PIYASTHI',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313128',
                'nama' => 'IBRAHIM BAZRA RITONGA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313156',
                'nama' => 'JULY NATASYA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313183',
                'nama' => 'M DAVINDRA ALFARIZ SILAEN',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313192',
                'nama' => 'M.NAUFAL KHANSA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313222',
                'nama' => 'MUHAMAD NAUFAL MAZIDAN',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313252',
                'nama' => 'MUHAMMAD NAZIEL',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313254',
                'nama' => 'MUHAMMAD RAFKY FERNANDO',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313281',
                'nama' => 'NADYA SAPHIRA AZZAHRA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313295',
                'nama' => 'NELIA LOPES',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313303',
                'nama' => 'NURAINI FAUZIAH',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313313',
                'nama' => 'PRADITYA ROZAQ HARTAWAN',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313314',
                'nama' => 'PRANAJA RULIF',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313355',
                'nama' => 'RIZQI ARBY MAULANA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313359',
                'nama' => 'RONA MARSA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313361',
                'nama' => 'RULISTIA AMANDA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313362',
                'nama' => 'RUT SIHOTANG',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313378',
                'nama' => 'SINEZHIA SIJU ARAUJO ANDRADE',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313379',
                'nama' => 'SITI AFIFAH PUTRI SANTOSA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313383',
                'nama' => 'SOPHIE JASMINE SINAGA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313402',
                'nama' => 'TAZKYA INDIRA PUTRI',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313412',
                'nama' => 'VALENT OLIVIA SIJABAT',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313437',
                'nama' => 'YULIA DWI WAHYUNI',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212313440',
                'nama' => 'ZAHRA KHAIRUNNISA',
                'kelas' => '2ST1',
            ],
            [
                'nim' => '212312939',
                'nama' => 'ABETITA MORAIS',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212312976',
                'nama' => 'ANDINI OKTARIANA NINGRUM',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212312980',
                'nama' => 'ANGELIA OKTAVIA BR TAMPUBOLON',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212312983',
                'nama' => 'ANINDYA ZAHRA DAMAYANTI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212312988',
                'nama' => 'ANUGRAH PUTRI INDAHSARI TRIA MEILIANA',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313023',
                'nama' => 'CAESAR RAMA FAHREZI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313050',
                'nama' => 'DIMAS GIFARI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313066',
                'nama' => 'ETELCHIA SANCHES GUTERRES',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313092',
                'nama' => 'FRANSISCO AMARO BELO',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313102',
                'nama' => 'GRAZIELA GIANA NANINI ALVES TILMAN',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313103',
                'nama' => 'GUSTI AYU MADE PUTRIA PEBRIANI DHARMAWAN',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313109',
                'nama' => 'HANIFA ARMEVIA',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313116',
                'nama' => 'HAYA FAUZIA ADZAKIA',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313121',
                'nama' => 'HENRY KEVIN GULTOM',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313122',
                'nama' => 'HIKMAWATI AHMAD',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313130',
                'nama' => 'IGNATIUS RAJA ONDOLAN NAIBAHO',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313143',
                'nama' => 'INGRID VANESSA MARTINA SAMOSIR',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313151',
                'nama' => 'JOSHUA NAPTALI HASIAN SIRINGO RINGO',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313155',
                'nama' => 'JUAN THOMOS BRIAN SIAGIAN',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313158',
                'nama' => 'KADEK SRI NAGITHA SUARYANTI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313188',
                'nama' => 'M. FIKRI KHAIKAL',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313212',
                'nama' => 'MOH. FAJRIL ADIKO',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313217',
                'nama' => 'MONICA LI PIEDADE',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313232',
                'nama' => 'MUHAMMAD CHOIRI KRISNA ARSYAD',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313234',
                'nama' => 'MUHAMMAD FADHIL FAYYAD',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313251',
                'nama' => 'MUHAMMAD NATHAN BHAMAKERTI FAZZA',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313259',
                'nama' => 'MUHAMMAD RIZQI ROHMADANI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313264',
                'nama' => 'MUHAMMAD VITTO SIREGAR',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313268',
                'nama' => 'MUSADA SADANA WIRJA',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313274',
                'nama' => 'NABILA PUTRI MAULIDIYA',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313278',
                'nama' => 'NADILA AJENG PUSPITA SARI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313320',
                'nama' => 'PUTRI YULI YANTI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313356',
                'nama' => 'ROIHAN FEBRIAN',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313369',
                'nama' => 'SANTA LUSIANA SIMANJUNTAK',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313382',
                'nama' => 'SITI NAYYA NUR ASTIAN',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313390',
                'nama' => 'SYAHIRAH',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313396',
                'nama' => 'SYIFA HANA SALSABILA NADRA GUSTARI',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212313405',
                'nama' => 'TIATIRA EKLESIA BETAH',
                'kelas' => '2ST2',
            ],
            [
                'nim' => '212312945',
                'nama' => 'AGNES MELIANA NAPITUPULU',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212312962',
                'nama' => 'ALTAGRACIA FREITAS MONIZ',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212312967',
                'nama' => 'AMENLI AILSA SITINJAK',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212312973',
                'nama' => 'ANDI MUTHIAH RAHIM',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313007',
                'nama' => 'AURELIA DINI SYAFNADIVA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313026',
                'nama' => 'CANDRA ALFAREZA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313030',
                'nama' => 'CHRISTI JESSICA HALIMAH SIAGIAN',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313034',
                'nama' => 'DAFA IBRA YULIAWAN',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313038',
                'nama' => 'DAVID PARASIAN SIHOMBING',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313043',
                'nama' => 'DELLA RAHMATIKA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313072',
                'nama' => 'FAIS JEFLI',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313096',
                'nama' => 'FRISCILIA SIALLAGAN',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313100',
                'nama' => 'GHINA AMALIA HIDAYATI',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313106',
                'nama' => "HAFIDZ MAS'UDIANA HAKIM",
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313131',
                'nama' => 'IKHWAN WAHYU TRI KHOIRUDDIN',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313140',
                'nama' => "IN'AMU RAHIM",
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313164',
                'nama' => 'KEZIA DIANRANI HUTAGALUNG',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313197',
                'nama' => 'MARSELINA BEATRIX NGANA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313202',
                'nama' => 'MAULIDYA PUTRI AGELLA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313221',
                'nama' => 'MUHAMAD FADHLAN HENDRI',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313230',
                'nama' => 'MUHAMMAD AULIA RAHMAN',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313235',
                'nama' => 'MUHAMMAD FAIZ ALFATAH',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313253',
                'nama' => 'MUHAMMAD PUTRA ANGGORO',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313258',
                'nama' => 'MUHAMMAD RIZALDI',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313283',
                'nama' => 'NAILA KEZHA PUTRI',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313294',
                'nama' => 'NELA NUR ‘AZIZAH',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313316',
                'nama' => 'PRISKILA TESALONIKA SIHOMBING NABABAN',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313318',
                'nama' => 'PUTRA DAFA PRATAMA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313319',
                'nama' => 'PUTRI HELENA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313340',
                'nama' => 'REGITA MAULIDYA HIDAYAT',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313346',
                'nama' => 'RICARDO SOARES DE JESUS',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313370',
                'nama' => 'SARAH NURFAJAR',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313410',
                'nama' => 'ULTIVA ULANDARI',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313414',
                'nama' => 'VALENTINO CRISTIADI GEONG',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313431',
                'nama' => 'YOGA PRAWIRA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313435',
                'nama' => 'YULI FATMAWATI',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212313441',
                'nama' => 'ZAHRA TAMARA ALLYANA',
                'kelas' => '2ST3',
            ],
            [
                'nim' => '212212540',
                'nama' => 'BUDIMAN IGNASIUS SIMARMATA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212312944',
                'nama' => 'AFIFAH NUR RAMADHANI ZAKIYAH',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212312946',
                'nama' => 'AGUNG ISMAIL',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212312975',
                'nama' => 'ANDIKA PRASTYA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212312985',
                'nama' => 'ANNISA AYU SARITA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212312987',
                'nama' => 'ANNISA RIZQIYA HANUM',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212312991',
                'nama' => 'ARDHIAH YAYAN CAHYANI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313012',
                'nama' => 'AZKA ANNISA RAMADHANI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313020',
                'nama' => 'BENEDICTA AURELIA SYAFHURA ANGELINA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313052',
                'nama' => 'DIMAS SATRIA ARDILLA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313069',
                'nama' => 'FADHLURRAHMAN SAFLI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313088',
                'nama' => 'FERO ALGHIFAHRI AKBAR',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313111',
                'nama' => 'HARIS FARESTU',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313144',
                'nama' => 'INNES SEPTIAN AMELIA PUTRI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313145',
                'nama' => 'INTAN PRATIWI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313154',
                'nama' => 'JUAN STEVAN REHATTA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313171',
                'nama' => 'LIDIA NISFI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313173',
                'nama' => 'LINTANG PERTIWI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313176',
                'nama' => 'LUCKY APRILIA DEWI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313180',
                'nama' => 'LYA KARIMATUL FITRI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313181',
                'nama' => 'LYDIA AUSHAF OZORA SIREGAR',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313209',
                'nama' => 'MIRANTI NABILA RAMADHANI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313210',
                'nama' => 'MIRNA PUTRI FIRGIANI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313219',
                'nama' => 'MUCHLIS NUR CAHYA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313228',
                'nama' => 'MUHAMMAD AQSHA DEWANTORO',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313247',
                'nama' => 'MUHAMMAD LAZUARDI SAID AHIMSA BAHASOAN',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313265',
                'nama' => 'MUHAMMAD ZAIN AL AZHARI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313271',
                'nama' => 'NABELA SYAFA FEBRIYANTI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313325',
                'nama' => 'RAFIFAH FARADHILAH',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313334',
                'nama' => 'RAMADHANI ZAKI SURUURI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313339',
                'nama' => 'RAYHAN ARDI FARDIAN',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313343',
                'nama' => "REZKY ADITYA AR'RAZAK",
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313376',
                'nama' => 'SHANIA YASMIN ANNISA',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313377',
                'nama' => 'SILVIA FEBRIANTI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313381',
                'nama' => 'SITI HAJAR FIKRAINI',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313384',
                'nama' => 'SRI DWI HARTASIH',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212313422',
                'nama' => 'WALDY ABDURRAHMAN',
                'kelas' => '2ST4',
            ],
            [
                'nim' => '212212656',
                'nama' => 'IHWAN ALBIR',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212312941',
                'nama' => 'ADE IRMA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212312971',
                'nama' => 'ANANDA NATASYA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212312978',
                'nama' => 'ANDRE WARI GIBSON SIMBOLON',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313005',
                'nama' => 'AURA MUSTIKA FEBRINA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313009',
                'nama' => 'AVRIL IRENE HUTAURUK',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313032',
                'nama' => 'CHRISTIANO YOSAKI',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313037',
                'nama' => 'DANIS HANIF DARMAWAN',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313046',
                'nama' => 'DEVINTA SASTA AZALIA PUTRI',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313051',
                'nama' => 'DIMAS RIZKI AZANI',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313064',
                'nama' => 'ELLEN SINTA MARITO',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313068',
                'nama' => 'FADHIL IQBAL MURTADHO',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313089',
                'nama' => 'FICTORIA PUTRI ANDINI',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313104',
                'nama' => 'HAFERO NASHRU PRASETYO',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313105',
                'nama' => 'HAFIDH DZAKY ATS TSAQIF',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313113',
                'nama' => 'HASNA FATHIN NUR DINIYAH',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313137',
                'nama' => 'IMELDA ELISABETH MANIK',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313147',
                'nama' => 'ISNAINI PUTRI LAILI NUR ALIMAH',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313148',
                'nama' => 'IZQYFA SYAFIQ AYASHA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313153',
                'nama' => 'JOSUA PARASIAN NAIBAHO',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313160',
                'nama' => 'KARINA TRI HANDAYANI',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313170',
                'nama' => 'LICHAR MARTAULINA SINAGA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313187',
                'nama' => 'M. FEBRIANSYAH',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313199',
                'nama' => 'MARSYA MUTIA MARIS',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313203',
                'nama' => 'MAYLANI PUSPITA SARI',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313215',
                'nama' => 'MOHAMMAD ZIDANE AKBAR SATRIAJI',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313216',
                'nama' => 'MONIC ANGELLICA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313226',
                'nama' => 'MUHAMMAD AFLAH DIANDRA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313227',
                'nama' => 'MUHAMMAD AKMAL SABIQ',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313261',
                'nama' => 'MUHAMMAD SURYA NUGRAHA SAPUTRA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313266',
                'nama' => 'MUHYAN HARAHAP',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313279',
                'nama' => 'NADINE ROLANDA CANTIKA',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313286',
                'nama' => 'NAJWA ALYA FAUZIAH',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313347',
                'nama' => 'RIDO GUNAWAN SITANGGANG',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313386',
                'nama' => 'SULASTRI INDIRA PUTRI HAMID',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313424',
                'nama' => 'WINONA ORTINA TAMPUBOLON',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212313445',
                'nama' => 'ZENAS SAMOSIR',
                'kelas' => '2ST5',
            ],
            [
                'nim' => '212212849',
                'nama' => 'RIDHA NUR HIDAYANI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212312937',
                'nama' => 'AAN HIDAYAT TULLOH',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313004',
                'nama' => 'AURA MUFTHIA AZZAHRA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313045',
                'nama' => 'DESTY ANANDA PUTRI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313053',
                'nama' => 'DINDA PUTRI NABILA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313055',
                'nama' => 'DINUR IDHARDINANTA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313070',
                'nama' => 'FADIYA AISYAH NURAINI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313082',
                'nama' => 'FARUQ HADI RAMADHAN',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313085',
                'nama' => 'FEBRIANSYAH MUHARRAM RAMBE',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313094',
                'nama' => "FRESTIA FATIKHATUL QURO'",
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313098',
                'nama' => 'GALIH PRASTYAWAN',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313118',
                'nama' => 'HELMI HANDI PRATAMA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313123',
                'nama' => 'HUSNA SABILA MUJAHIDAH',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313125',
                'nama' => 'I KOMANG ANDHIKA PUTRA ERAWAN',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313134',
                'nama' => "ILMA FITRIATUL 'ASSRI",
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313135',
                'nama' => 'ILYAS RAMADHAN',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313136',
                'nama' => 'IMAM ADDARUL QUTHNI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313141',
                'nama' => 'INDAH DWI YUNIATI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313166',
                'nama' => 'KHILWA LAYYINA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313206',
                'nama' => 'MERVINA AULIA AISAH',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313207',
                'nama' => 'MICHAEL KLINGTON HUTAPEA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313220',
                'nama' => 'MUH YUSUF.S',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313238',
                'nama' => 'MUHAMMAD GUSTI NUR ADITYA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313245',
                'nama' => 'MUHAMMAD IRFAN',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313269',
                'nama' => 'MUTHIA HADI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313304',
                'nama' => 'NURUL IZZAH',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313306',
                'nama' => 'NYIMAS INAYAH AYU PUARI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313308',
                'nama' => 'OKHY JULIANTO MARBUN',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313327',
                'nama' => 'RAHMA DONNA VALENCIA PUTRI',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313366',
                'nama' => 'SALMA HAJIDAH',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313391',
                'nama' => 'SYAHLAN DWI VIZHTA MAHENDRA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313398',
                'nama' => 'TANIA MARGARETHA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313409',
                'nama' => 'TWIFANNY NADYA APRIANTI SINAGA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313415',
                'nama' => 'VALERINA NAJWA KHAYLA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313416',
                'nama' => 'VICTOR ARDIANSYAH MARULI SITORUS',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313430',
                'nama' => 'YODHA ALDO SRI ADINATA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212313438',
                'nama' => 'YULIANA',
                'kelas' => '2ST6',
            ],
            [
                'nim' => '212312942',
                'nama' => 'ADRIAN JANUARTHA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212312953',
                'nama' => 'AHZUHRA NAJUWA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212312956',
                'nama' => 'ALFA YUSUF MUHAIMIN',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212312974',
                'nama' => 'ANDI TENRI ULENG',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212312977',
                'nama' => 'ANDRA ADIPUTRA RUDIANTO',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313015',
                'nama' => 'BAIQ ROHMAH SANY AZZAHRO',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313016',
                'nama' => 'BALQIS HASNA SYAUQIYAH',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313019',
                'nama' => 'BELINDA MAULINA PUJAWARGANA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313039',
                'nama' => 'DAVILA CARAMOY',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313040',
                'nama' => 'DEA FEBRIANA AZAHRA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313041',
                'nama' => 'DECAPRYO RIVIAN BELO',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313042',
                'nama' => 'DEKA SHOLIHA KARTIKA HABSARI',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313056',
                'nama' => 'DIO TEGAR PANGESTU',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313081',
                'nama' => 'FARIZ AHMAD WIJAKSARA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313101',
                'nama' => 'GRACE QUEENSHA DIKA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313167',
                'nama' => 'KURNIAWAN PRATAMA PASARIBU',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313175',
                'nama' => 'LOLA MONICA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313178',
                'nama' => 'LUSTY NAFIS DWI KARTIKA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313198',
                'nama' => 'MARSYA AUDIA CHOLISAH',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313225',
                'nama' => 'MUHAMMAD ADIYASA IHSANI',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313231',
                'nama' => 'MUHAMMAD BARKAH AMALIANSYAH',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313246',
                'nama' => 'MUHAMMAD JOHAN FIRMANSYAH',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313263',
                'nama' => 'MUHAMMAD SYARIF LUTFI',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313267',
                'nama' => 'MUJI RAHAYU',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313273',
                'nama' => 'NABILA AULIA HERNINA MARETA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313275',
                'nama' => 'NADHIATUZ ZAHRA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313289',
                'nama' => 'NASYWA SANIYYAH',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313291',
                'nama' => 'NAUFAL GAMA ADIKARA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313299',
                'nama' => 'NIKITA ANESTASYA SARAGIH',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313309',
                'nama' => 'OKTOVIA FRINNY IRIANTI MARIMAR IVONNE LEIHITU',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313312',
                'nama' => 'PITRA RADITYA AMANDA PUTRI',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313333',
                'nama' => 'RAIHANAH HANUN ABIDAH',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313349',
                'nama' => 'RIFKI SIBORO',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313364',
                'nama' => 'SABRINA NUR AZIZZA',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313371',
                'nama' => 'SATRIA FRAHMA AFRISHAL',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313411',
                'nama' => "UMMI FATIMAH NUR'AINI",
                'kelas' => '2ST7',
            ],
            [
                'nim' => '212313417',
                'nama' => 'VIKTOR FERNANDO MANALU',
                'kelas' => '2ST7',
            ],
            [
                'nim' => '222212632',
                'nama' => 'HAFIZH SHAH FIRDAUS',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312938',
                'nama' => 'ABDUL HANIF AL FATAH',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312947',
                'nama' => 'AGUSTINA BELADEWIANA MADU',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312949',
                'nama' => 'AHMAD AIKUN',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312958',
                'nama' => 'ALIF ZAKIANSYAH AS SYAUQI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312979',
                'nama' => 'ANDRIAN FAJAR FAHMI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312984',
                'nama' => 'ANISA GIRI RAMADHANI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312993',
                'nama' => 'ARIANTO BARUS',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312995',
                'nama' => 'ARIF HIDAYAT RAMADHAN',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313002',
                'nama' => 'AULIYA AHMADA GHINANNAFSA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313024',
                'nama' => 'CAHYA RAMA VINANZA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313025',
                'nama' => 'CAHYANI VEVY WANDARA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313036',
                'nama' => 'DANANG IVAN PANGESTU',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313080',
                'nama' => 'FARHIYA SALSA BILLA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313107',
                'nama' => 'HANA SABRINA FITRIA ABRORA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313108',
                'nama' => 'HANIF JAWAHIR',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313129',
                'nama' => 'ICA BALI TRI SUSMITA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313138',
                'nama' => 'IMMANITA DENAWINTA GINTING',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313139',
                'nama' => 'IMMANUELLA RISNA SAHALANA TUMANGGOR',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313146',
                'nama' => 'IRISH SHANTY KINSELLA PUTERI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313177',
                'nama' => 'LUH NYOMAN RATIH SWANDEWI PUTRI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313208',
                'nama' => 'MIFTAHUL HUSNA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313218',
                'nama' => 'MOSES NOEL ESTOMIHI SIMANULLANG',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313229',
                'nama' => 'MUHAMMAD ARKAN ANZUYE',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313239',
                'nama' => 'MUHAMMAD HABIBI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313250',
                'nama' => 'MUHAMMAD NABIL ALIF NOVANTO',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313257',
                'nama' => 'MUHAMMAD RIDHO PURWANTO',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313272',
                'nama' => 'NABHAN ATHALLAH',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313276',
                'nama' => 'NADIA NUR NISRINA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313288',
                'nama' => 'NARANGGA KHOIRUL UTAMA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313297',
                'nama' => 'NI PUTU KARISTYA PAICHA MAESI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313298',
                'nama' => 'NIA AULIA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313336',
                'nama' => 'RANI KUSUMAWATI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313342',
                'nama' => 'REZKI NUR AMALIA HARIS',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313351',
                'nama' => 'RIZAL FAKHRUDDIN NASUTION',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313373',
                'nama' => 'SEAN GUSTI SETYAWAN',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313427',
                'nama' => 'XAVIER YUBIN RADITIO',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313434',
                'nama' => 'YUDISTIRA ALDIWIJAYA',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222313442',
                'nama' => 'ZAID RIZKY ZIADI',
                'kelas' => '2KS1',
            ],
            [
                'nim' => '222312952',
                'nama' => 'AHMAD HUSEIN NASUTION',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222312964',
                'nama' => 'AMALIA KHOIRUM MAZIDAH',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222312970',
                'nama' => 'ANANDA MIZAN ALI',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222312982',
                'nama' => 'ANGGITA CRISTIN MEYLANI',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222312997',
                'nama' => 'ARIS KRISTIAWAN',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313008',
                'nama' => 'AVITA MUMTAHANA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313022',
                'nama' => 'BURHANUDIN ALFADLIL PRASTYO',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313031',
                'nama' => 'CHRISTIANO TEDDY ANTA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313048',
                'nama' => 'DIAH AYU NUR RAHMADANI',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313076',
                'nama' => 'FAKHRI IQBAR',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313097',
                'nama' => 'GALANG DWI NUGROHO',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313112',
                'nama' => 'HARRY PENTALEON RUMAHORBO',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313132',
                'nama' => 'ILHAM AKBAR TAUHID',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313150',
                'nama' => 'JOHANA PUTRI NATASYA SITORUS',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313190',
                'nama' => 'M. REZKY RAYA KILWOUW',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313195',
                'nama' => 'MARIO HOKI WIJAYA WANGSA NATA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313200',
                'nama' => 'MAULIDA MUTIRIANI',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313214',
                'nama' => 'MOHAMMAD AGAM BONANZA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313233',
                'nama' => 'MUHAMMAD DAFFA DEKANANDA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313249',
                'nama' => 'MUHAMMAD MUHLIS ADITYA NUR WAHID',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313262',
                'nama' => 'MUHAMMAD SYAFIQ MAMBULU',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313301',
                'nama' => 'NUR HAFIZATUN NISSA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313307',
                'nama' => 'NYIMAS VIRNA SALSA LESTARI RISQIA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313324',
                'nama' => 'R. RAZWA FAZILA WIBOWO',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313332',
                'nama' => 'RAIHAN TAUFIQURRAHMAN ZAKI',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313345',
                'nama' => 'RIANI BR. GINTING',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313350',
                'nama' => 'RIFQI MUHADZIB AHDAN',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313363',
                'nama' => 'SABILA BINTANG KUSUMA DEWI',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313365',
                'nama' => 'SAFIRA INAYAH',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313372',
                'nama' => 'SATRIA IMKA DWI PUTRA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313375',
                'nama' => 'SETO HAIDAR YUDHISTIRA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313413',
                'nama' => 'VALENTINA LASMA SITUMORANG',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313423',
                'nama' => 'WINNI ELFIRA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313436',
                'nama' => 'YULIA DWI UTARI',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313439',
                'nama' => 'ZAHIRA PRIYAN HUSNA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313443',
                'nama' => 'ZAKIA FAZA ADILA',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313446',
                'nama' => 'ZHAFIRA SANY LAILLA HABIBAH',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222313447',
                'nama' => 'ZIDAN SEPTIAN',
                'kelas' => '2KS2',
            ],
            [
                'nim' => '222312960',
                'nama' => 'ALIFIA DEANITA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222312966',
                'nama' => 'AMANDA TRI HAPSARI',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222312968',
                'nama' => 'AMIR SYAIFUDIN',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222312986',
                'nama' => 'ANNISA RAIHANA MUDZAKIR',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222312994',
                'nama' => 'ARIF BUDIMAN',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313000',
                'nama' => 'AULIA UL HASANAH',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313003',
                'nama' => 'AURA HANIFA KASETYA PUTRI',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313054',
                'nama' => 'DINDA PUTRI NUR WULANDARI',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313067',
                'nama' => 'EVELYN TAN ELDISHA NAWA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313071',
                'nama' => 'FADZILLA KUSUMA NINGRUM',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313073',
                'nama' => 'FAIZAL EKA SETIAWAN',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313077',
                'nama' => 'FALIZA MAULIDINA SYARIEF',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313079',
                'nama' => 'FARHAN KADHAFI AZUANSYAH',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313086',
                'nama' => 'FERDIAN HIKMAL SAPUTRA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313117',
                'nama' => 'HAYKAL PASHA SIREGAR',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313127',
                'nama' => 'I.G.N. ARI SADEWA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313133',
                'nama' => 'ILHAM TESA NUR MAZUA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313161',
                'nama' => 'KAYLLA ZAHRANI',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313186',
                'nama' => 'M. FARUQ HAFIDZULLAH ERFARINGGA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313191',
                'nama' => 'M.ARKILLAH IBNU ASSHIDDIQIE',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313224',
                'nama' => 'MUHAMAD ZIDAN KURNIA AHIDA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313241',
                'nama' => 'MUHAMMAD HAMLUL KHAIR',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313244',
                'nama' => 'MUHAMMAD IMADDUDIN ZAKI',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313248',
                'nama' => 'MUHAMMAD LUDVI ARGORAHAYU',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313282',
                'nama' => 'NAILA HANIFA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313290',
                'nama' => 'NAUFAL DZAKI ZAIDAN',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313302',
                'nama' => "NUR NA'IMAH MA'RUF",
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313305',
                'nama' => 'NUZUL ATHAILLAH',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313311',
                'nama' => 'PADIL MUHAMMAD ZAKI',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313323',
                'nama' => 'QURANY NADHIRA TSABITA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313328',
                'nama' => 'RAHMAN AL GIFARY',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313344',
                'nama' => 'REZKY AMALIAH',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313348',
                'nama' => 'RIFA FAIRUZ',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313354',
                'nama' => 'RIZKYANA AZKA AKHIRIA RAMADHANTI',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313397',
                'nama' => "T.M. AL ASY'ARI AL-MUCHTARI",
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313401',
                'nama' => 'TAURA DAVIN SANTOSA',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313408',
                'nama' => "TRIANGGA HAFID RIFA'I",
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222313421',
                'nama' => 'WAHYU NUGRAHA RAOMI GADING',
                'kelas' => '2KS3',
            ],
            [
                'nim' => '222312948',
                'nama' => 'AHMAD ADIB HUSAINI AL MUNAWWAR',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222312961',
                'nama' => 'ALISHA ISLAMI ZUKHRUF',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222312965',
                'nama' => 'AMANDA ATIKA PUTRI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222312969',
                'nama' => 'AMRESTYA GAIA BUJJHATI ISBANDI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313006',
                'nama' => 'AURELIA AYALA NAURA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313021',
                'nama' => 'BRAMANTYO PUTRA RACHMANDANI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313033',
                'nama' => 'CLARISSE DE DELGADA MOREIRA SOARES',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313035',
                'nama' => 'DAFFA HIBATULLAH R.T.P',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313049',
                'nama' => 'DIFYA AYU MEISYA NURJANAH',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313059',
                'nama' => 'DIVA DWI CAHYO',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313074',
                'nama' => 'FAIZUL HANIF',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313120',
                'nama' => 'HENNY MERRY ASTUTIK',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313152',
                'nama' => 'JOSI INTAN TRI RIZKI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313163',
                'nama' => 'KESSYA DESYKA AYLIYANDA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313168',
                'nama' => 'LADY THERESIA SIMBOLON',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313174',
                'nama' => 'LISA FAJRIANTI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313179',
                'nama' => 'LUTHFIA NURUL IZZA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313184',
                'nama' => 'M. ALFARIZI NUL HAKIM',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313196',
                'nama' => 'MARIO MIKAIL H. SIMANJUNTAK',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313201',
                'nama' => 'MAULIDIA DESTARIANI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313204',
                'nama' => 'MELDIRO AUGUSTO FERREIRA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313205',
                'nama' => 'MERCY FEBRIELLA LIBORANG',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313223',
                'nama' => 'MUHAMAD NAUFAL SYAFIQ',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313240',
                'nama' => 'MUHAMMAD HALIM',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313242',
                'nama' => 'MUHAMMAD HARIS SYAH PUTRA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313255',
                'nama' => 'MUHAMMAD RAIHAN AMIN',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313256',
                'nama' => 'MUHAMMAD RAZA ANUGRAH',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313284',
                'nama' => 'NAILATUR RAJAA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313285',
                'nama' => 'NAILIS SAHILA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313292',
                'nama' => 'NAVISA RAHMAWATI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313330',
                'nama' => 'RAHMAT ML',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313358',
                'nama' => 'ROLANDO HUTABARAT',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313368',
                'nama' => 'SANCHA ISABEL DA COSTA XAVIER',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313387',
                'nama' => 'SYADZA KHUMAIRAH AKMUL',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313393',
                'nama' => 'SYAIRA HASYA DESIANI',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313400',
                'nama' => 'TASYA AMELIA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313403',
                'nama' => 'TEGUH CHRISTIANTO SIMBOLON',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313425',
                'nama' => 'WISNU BUDI UTOMO',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '222313433',
                'nama' => 'YUDHA PUTRA TIARA',
                'kelas' => '2KS4',
            ],
            [
                'nim' => '112413466',
                'nama' => "ABIDAH ARDELIA KHAIRUN NISA'",
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413472',
                'nama' => 'ADRIANO BUNGALOLON',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413474',
                'nama' => 'AHDA AZKIYA SUSILO',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413479',
                'nama' => "AHMAD RAFI' IZRA NUGRAHA",
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413492',
                'nama' => 'ALHOSHI HASAN HOOSEKI HAKIM',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413497',
                'nama' => 'AMALIA RAHMAH RIYADI',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413502',
                'nama' => 'ANAS HELIO ABIMANYU',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413505',
                'nama' => 'ANIS SALSABILLA HARAHAP',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413507',
                'nama' => 'ARAMINTA ABIDZAH',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413508',
                'nama' => 'ARDHYA RESTU AL FATHIR',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413517',
                'nama' => 'AULLIAH EFFIANA ARAFAT',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413523',
                'nama' => 'AZZAHRA MUHLISA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413564',
                'nama' => 'FAIZAL AHMAD HABIBIE',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413586',
                'nama' => 'GILANG NUR HIDAYAT',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413587',
                'nama' => 'GIOVAN PAVEL DITYO SAPUTRO',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413593',
                'nama' => "HALIMATUS SA'DIYAH",
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413603',
                'nama' => 'HIELLDA SETYA KHANIFAH',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413625',
                'nama' => 'JUANDA SYAHPUTRA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413632',
                'nama' => 'KUKUH BAGUS PURNOMO SIDIK',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413660',
                'nama' => 'MUH. ARSAL ALHABSY FARIS',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413662',
                'nama' => 'MUH. ARYO KUSUMA HIDAYAT. A',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413678',
                'nama' => 'MUHAMMAD FARIZ AZIZUROCHMAN',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413687',
                'nama' => 'MUHAMMAD KHALIQ',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413714',
                'nama' => 'NATANIELA ELYSIA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413715',
                'nama' => 'NATASYA ADVENTRI SIDABUTAR',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413721',
                'nama' => 'NI PUTU ANGRI KEISWARI',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413723',
                'nama' => 'NIKOLAUS AGAPE',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413732',
                'nama' => 'PANGESTI RAHAYU',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413735',
                'nama' => 'PUTERI LADYA CLARA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413738',
                'nama' => 'QUADRA NUALA KEVIN BESTNET ASADEL',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413768',
                'nama' => 'ROSITA RAHMAYANTI',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413771',
                'nama' => 'SALSABILA QUEENA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413773',
                'nama' => 'SAMUEL KEVIN',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413783',
                'nama' => 'SILVI KHAIRUNNISA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413802',
                'nama' => 'WIDYA JULIANTI',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413803',
                'nama' => 'WIDYA KHOIRUN NISSA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413804',
                'nama' => 'WIDYASTI BELLA KURNIA',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413807',
                'nama' => 'YENNI AZIZAH',
                'kelas' => '1D31',
            ],
            [
                'nim' => '112413465',
                'nama' => 'ABDUL HALIM',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413481',
                'nama' => 'AHYAR MOHNEZIR KIAT',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413496',
                'nama' => 'ALYA PUTRI PANATA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413503',
                'nama' => 'ANGGA WIRASATYA SUSANTO',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413509',
                'nama' => 'ARGYA ZAHRONI ROCHMAN',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413554',
                'nama' => 'EKA PUTU AGUSTINA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413558',
                'nama' => 'EVI MASLAKHATUL UMMAH',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413560',
                'nama' => 'FADLI ARDIANSYAH',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413565',
                'nama' => 'FARA AFIYATUL MAYAZA PUTRI',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413594',
                'nama' => 'HANIFAH PIPITA SARI',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413595',
                'nama' => 'HANIFAH YUMNA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413598',
                'nama' => 'HAZA HIDAYATULLAH',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413599',
                'nama' => 'HENNY SYAHRANI',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413602',
                'nama' => 'HIDAYAT NURSYAHBANI W',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413609',
                'nama' => 'IMELDA SEPTIA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413621',
                'nama' => 'JOSUA PATIRAY SIHITE',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413624',
                'nama' => 'JOYS GRESIA ULINA SIANTURI',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413636',
                'nama' => 'LUKLUK HUMA KHAIRUNZILA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413658',
                'nama' => 'MOSES INOSENTIUS TINAMBUNAN',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413661',
                'nama' => 'MUH. ARYA KUSUMA HIDAYAT. A',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413695',
                'nama' => 'MUHAMMAD RIZKY NUR RAHMADAN',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413698',
                'nama' => "MUSYAFFA' AZFA RASYID",
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413702',
                'nama' => 'NABILA NUR FAIZA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413704',
                'nama' => 'NADIA PUTRI SALSABILA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413728',
                'nama' => 'NUR AHDA YANTI',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413740',
                'nama' => 'RAFILIYO RYEN SURYA ALFHAT',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413746',
                'nama' => 'RALDIN',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413751',
                'nama' => 'RAZIQ ALZAM FADLULLAH',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413753',
                'nama' => 'REIHAN TRISNA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413754',
                'nama' => 'RENATA CECILIA BR SIRAIT',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413756',
                'nama' => "REVA AULIYA QURROTA A'YUN",
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413770',
                'nama' => 'SALMA NAILA HILMIYA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413775',
                'nama' => 'SANDA YULIANTI',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413777',
                'nama' => 'SAVERIA RISANTI HUTASOIT',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413787',
                'nama' => 'SOPHIE HIKMATUL FADHILA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413788',
                'nama' => 'STEFANY ANJELIKA CICI BERIBE',
                'kelas' => '1D32',
            ],
            [
                'nim' => '112413809',
                'nama' => 'YUDRIKA ZATIS ASYA',
                'kelas' => '1D32',
            ],
            [
                'nim' => '212413475',
                'nama' => 'AHMAD ARIEF AMIN',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413476',
                'nama' => 'AHMAD BUCHORI AL-KHOIR',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413477',
                'nama' => 'AHMAD FARID MUSTHOFA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413511',
                'nama' => 'ARIELLA SYIFA MAHESWARI',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413516',
                'nama' => 'ATIQAH NURDZAKIRAH AL ARIBAH',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413518',
                'nama' => 'AVRILLIA KARTIKA MAULANI',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413522',
                'nama' => 'AZMI AZATIL ISMAH',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413450',
                'nama' => 'BENTO DA COSTA BARROS ARAUJO',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413534',
                'nama' => 'CATHERINE WIDYA PUTRI ARIFIN',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413536',
                'nama' => 'CIKAL DWIJAYANTI',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413544',
                'nama' => 'DESVITA PRABAWANINGRUM',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413547',
                'nama' => 'DIAH PUJI PRAMESTI',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413549',
                'nama' => 'DISNA SULISTYANING DIAS',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413452',
                'nama' => 'DOMINICA NOGOHANA MIYAMA DE SOUSA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413552',
                'nama' => 'EGO STIVEN RAFLIZA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413553',
                'nama' => 'EKA DAMAYANI DAMANIK',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413555',
                'nama' => 'ELIA NATAN MEYER SIMANJUNTAK',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413562',
                'nama' => 'FAIQ FADHLUL AZIZ',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413572',
                'nama' => 'FAWZIA SALSABILLA SHOLIHA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413580',
                'nama' => 'FITRAHUL ADZIMA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413617',
                'nama' => 'ISNANI HAYATUR ROHMAH',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413643',
                'nama' => 'M. YUDHA ANUGERAH',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413651',
                'nama' => 'MEI DWI HANDAYANI',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413653',
                'nama' => 'MIFTAHUL AQIL JUMARDIN',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413663',
                'nama' => 'MUH. FAUZI TRIYANO PUTRA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413676',
                'nama' => 'MUHAMMAD FAIZ AL IKHSAN',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413692',
                'nama' => 'MUHAMMAD RAKEL SAPUTRA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413694',
                'nama' => 'MUHAMMAD RIFQI QOWIYYUL AMIN',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413713',
                'nama' => 'NASYWA SALSABILA BURHAN',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413734',
                'nama' => 'PRISILIA PERBINA SARAGIH',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413744',
                'nama' => 'RAIHAN NUGROHO SAPUTRO',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413459',
                'nama' => 'RICARDINA DA COSTA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413760',
                'nama' => 'RIFAH ALNITA IRWANTI',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413766',
                'nama' => 'ROKY ANGKAT PANGESTU PURBA',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413789',
                'nama' => 'STEVEN JEREMY HAPOSAN PANDIANGAN',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413463',
                'nama' => 'TANIZIA SEQUEIRA DE ARAUJO',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413811',
                'nama' => 'YUSUF ILHAM',
                'kelas' => '1ST1',
            ],
            [
                'nim' => '212413468',
                'nama' => 'ADINDA ZAKHRA RAMADHANI',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413488',
                'nama' => 'AL-FIAR DI FESA FASA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413487',
                'nama' => 'ALFIAN ZHIQRI ALFAUZAN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413489',
                'nama' => 'ALFIYAH REZEQI ROZANAH',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413499',
                'nama' => 'AMELIA DERANAYA SHAFIRA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413501',
                'nama' => 'ANANDA PUTRI INDRAWAN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413453',
                'nama' => 'EDIGIO FELIX GODINHO DA COSTA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413556',
                'nama' => 'EMIL SALIM',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413561',
                'nama' => 'FAHMI IDRIS SETIAWAN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413566',
                'nama' => 'FARODISILJINAN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413573',
                'nama' => 'FAZL AQMAR KARIM AMRULLAH',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413575',
                'nama' => 'FEBRIAN RUBBEN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413577',
                'nama' => 'FIKRI ADI NUGRAHA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413583',
                'nama' => 'GAYUH AURA ALHAQ',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413455',
                'nama' => 'GENIVEVA ROSA GUTERRES DE SOUSA BELO',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413584',
                'nama' => 'GHAZY RHAYSHIE',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413604',
                'nama' => 'I KOMANG VITO WIRYADINATA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413605',
                'nama' => 'IFALIA HALIZAH',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413629',
                'nama' => 'KHAIRUNA AMANDA RIYADI',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413652',
                'nama' => 'MEI INDRIYANTI SYAMSI',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413665',
                'nama' => 'MUHAMMAD ABDUL LATHIF',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413668',
                'nama' => 'MUHAMMAD ADITYA UTAMA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413673',
                'nama' => 'MUHAMMAD DAFFA ALIMUDDIN PRATAMA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413699',
                'nama' => 'NABIL MAHASIN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413707',
                'nama' => 'NAILA SANDRA UTAMI',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413711',
                'nama' => 'NAKHWA AZZAHRA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413719',
                'nama' => 'NAZHIFUDDIN AKMAL',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413724',
                'nama' => 'NISWAH NABILA MUKHLIS',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413460',
                'nama' => 'ROMALDA MITA AFOAN BELO',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413782',
                'nama' => 'SHEILA BERLIANA SUNAN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413784',
                'nama' => 'SITI NAIRA HASIEFAH HARAHAP',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413786',
                'nama' => 'SITTI NAWWALIA SAUMY',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413791',
                'nama' => 'SYIFA SHAVILA SURESWARI',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413792',
                'nama' => 'TAUFIQ ANANDA DIFKA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413797',
                'nama' => 'VERNINDA INRI MAULIDA RISMA',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413799',
                'nama' => 'WAHDANA DJUNAEDI',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413806',
                'nama' => 'YEHISKIEL ERWIN TAMBUNAN',
                'kelas' => '1ST2',
            ],
            [
                'nim' => '212413473',
                'nama' => 'AFLAH YUSHAFA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413480',
                'nama' => 'AHMAD RIDHO PARABI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413449',
                'nama' => 'ALICIA JOVITA SEQUEIRA FERREIRA DE ALBUQUERQUE',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413494',
                'nama' => 'ALVINA AILSYA YAFFA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413515',
                'nama' => 'ATHIYYAH DWI AZMI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413519',
                'nama' => 'AYESHA SAHIRA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413520',
                'nama' => 'AYRA JASMINE HASIBUAN',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413525',
                'nama' => 'BAGUS ARJUNA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413526',
                'nama' => 'BALQISH ZULAIKA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413537',
                'nama' => 'CLAUDY ENGLEN HASAN',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413551',
                'nama' => 'DZAKY AZKA PRADIPTA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413568',
                'nama' => 'FATHANIA NUR RAHMADHANI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413454',
                'nama' => 'GAUDENCIO GABRIEL FERREIRA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413588',
                'nama' => 'GRACE AMEILIA PUTRI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413456',
                'nama' => 'IJORIA AMARAL SOARES',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413607',
                'nama' => 'ILHAM FITRA DARMAWAN',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413631',
                'nama' => 'KLARA REVELINA PERWITASARI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413659',
                'nama' => 'MUFIDAH AZZAHRAH',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413669',
                'nama' => 'MUHAMMAD AIDIL MUSTAQIM',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413684',
                'nama' => 'MUHAMMAD HASBIE HASIBUAN',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413688',
                'nama' => 'MUHAMMAD NAJATULLAH AMIRHAKIM',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413690',
                'nama' => 'MUHAMMAD RAFLI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413697',
                'nama' => 'MUHAMMAD THURFA NAUNDZA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413710',
                'nama' => 'NAJMI MUMTAZ',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413712',
                'nama' => 'NANDA RAHMADANI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413722',
                'nama' => 'NIKEN AYU AMALIA PUTRI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413725',
                'nama' => 'NOFAL FEBRIAN NUGRAHA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413726',
                'nama' => 'NONA LITA PURBA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413731',
                'nama' => 'ORIZA STEPHANIE',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413736',
                'nama' => "PUTRA IRVAN KALA'PADANG",
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413743',
                'nama' => 'RAIHAN DIMAS PRADANA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413747',
                'nama' => 'RANGGA HIDAYAT',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413759',
                'nama' => 'RIDHONAL ILHAM HIDAYAT',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413769',
                'nama' => 'SADRINA ALYANI',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413461',
                'nama' => 'SANDRA MENDES GUTERRES PEREIRA',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413808',
                'nama' => 'YUDHISTIRA PUTRA HERLAMBANG',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413810',
                'nama' => 'YUNISA OLIVIA PARHUSIP',
                'kelas' => '1ST3',
            ],
            [
                'nim' => '212413467',
                'nama' => 'ADELLA RIZKA AFIFAH',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413500',
                'nama' => 'AMELIA HIMATUZ ZULFA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413512',
                'nama' => 'ARSYILA KHAIRUNISA MARTA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413521',
                'nama' => 'AZIZ SWADARMA BHAKTI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413528',
                'nama' => 'BANAFSAJ RIFDAH KAMILIYA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413529',
                'nama' => 'BENIAH EFREM TSANIA AL EMZA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413530',
                'nama' => 'BILLIE DZAKIY ROKHMAN',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413538',
                'nama' => 'DAFI HAURANISA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413541',
                'nama' => 'DEPATI ZAID HAIKAL',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413543',
                'nama' => 'DESKAR NATAN BUULOLO',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413451',
                'nama' => 'DIOMASIA ESPERANCA FREITAS GUTERRES',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413579',
                'nama' => 'FIRMAN CRISTOPAN SIMBOLON',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413590',
                'nama' => 'HAFIDZ MUZACKY AR RIZKY',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413592',
                'nama' => 'HAFIZH ZAKI RAIS',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413610',
                'nama' => 'IMMARTA VENA ALSA UTAMI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413618',
                'nama' => 'JAN KEPRI PURBA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413630',
                'nama' => 'KHANSA PUTRI APRILIA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413638',
                'nama' => 'LYDIA NATALIA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413639',
                'nama' => 'M. DAFFA ABIYYU',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413649',
                'nama' => 'MARVA GHEVIRANI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413657',
                'nama' => 'MOHAMAD ZIDAN AL FARIZI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413457',
                'nama' => 'MOLIVA JONES DA CRUZ OLIVEIRA LIMA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413677',
                'nama' => 'MUHAMMAD FARID ZULKARNAIN',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413686',
                'nama' => 'MUHAMMAD KAHFI BRILYANT',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413708',
                'nama' => 'NAJLA NURFITRIA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413717',
                'nama' => 'NATZWA UFFATUL ISMI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413729',
                'nama' => 'NURUL FATIHA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413730',
                'nama' => 'OKA FITRIAN DITHA NASUTION',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413748',
                'nama' => 'RAUL JULIANO ANDRI AJIE',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413758',
                'nama' => 'RIDHO ABI PRASETYO',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413761',
                'nama' => 'RIFKY RIDHO BAIHAQI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413772',
                'nama' => 'SALWA SILVIYANTI ASRIZAL',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413462',
                'nama' => 'TACIA DOMINGAS ANTONIA BAPTISTA GAMA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413795',
                'nama' => 'TISYA KUSUMA WARDANI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413805',
                'nama' => 'WINDY DAMAYANTI',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413812',
                'nama' => 'ZAILANTY ANGGIT',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '212413814',
                'nama' => 'ZIDAN ROSI ABIANTARA',
                'kelas' => '1ST4',
            ],
            [
                'nim' => '222413471',
                'nama' => 'ADITYA PRATAMA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413478',
                'nama' => 'AHMAD GHIFARI FIRZATULLAH',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413482',
                'nama' => 'AIKA NASWA PATHATUN',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413485',
                'nama' => 'AKHMAD YUDA ALFARISI',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413491',
                'nama' => 'ALFREDO FAIRUZ CLEO ARIFIN',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413498',
                'nama' => "AMARA QOSHIROTU THORFI'IN",
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413533',
                'nama' => 'CAMELIA MAHARANI SOLEHAH',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413550',
                'nama' => 'DIVA AFDHOLIA. R',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413585',
                'nama' => 'GHIFARY HAYKAL BRAMANTYO',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413589',
                'nama' => 'GRACE SOVIA GINTING',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413596',
                'nama' => 'HARYADI .H. SILITONGA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413601',
                'nama' => 'HERYANTO KADRI',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413606',
                'nama' => 'IHSAN NURRAHMAN',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413613',
                'nama' => 'IQBAL FIRMANSYAH',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413626',
                'nama' => 'JUSTIN ALI SUMITRO SIMBOLON',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413647',
                'nama' => 'MALIKA DZIKRA KALILA RAMADHANI',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413648',
                'nama' => 'MANUEL EDRIGE DANDIRI',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413654',
                'nama' => 'MOCH. FATHURROZI DWI RIYANTO',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413664',
                'nama' => 'MUHAMAD AQSAL ZULHAJ ADHA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413674',
                'nama' => 'MUHAMMAD FADILLAH RAMADHAN',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413689',
                'nama' => 'MUHAMMAD NIZAR UBAIDILLAH',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413696',
                'nama' => 'MUHAMMAD SATRIYA HAMMAMI PUTRA NUGROHO',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413700',
                'nama' => 'NABIL MAKARIM',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413705',
                'nama' => 'NADINE MUNTHE',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413458',
                'nama' => 'NATAVIDO DA SILVA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413716',
                'nama' => 'NATHANIA NANDIKA CALLUELLA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413718',
                'nama' => 'NAUFAL SHADDIQ',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413749',
                'nama' => 'RAYHAN RAFIF',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413764',
                'nama' => 'RIZAL DWI NUGRAHA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413767',
                'nama' => 'ROMIZARD RASENDRIYA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413778',
                'nama' => 'SAWANGI KASTURI',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413779',
                'nama' => 'SETYAWAN YOGA HUTAMA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413780',
                'nama' => 'SHAFWAN FADHLURRAHMAN DZAKY',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413785',
                'nama' => 'SITI RAHMADHANI ZASKYA MANTIKA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413796',
                'nama' => 'TRIE WAHYUDI',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413813',
                'nama' => 'ZASKIA BENING MULIA',
                'kelas' => '1KS1',
            ],
            [
                'nim' => '222413464',
                'nama' => 'ABDUL HAFIDZ KHAERUL IMAM',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413469',
                'nama' => 'ADISTHA ISTIYANI',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413484',
                'nama' => 'AKHMAD ALIEF AFLAH HIBATULLAH',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413486',
                'nama' => 'ALDI FRENKI HUTASOIT',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413490',
                'nama' => 'ALFIYYAH MAHARANI TARISHAH',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413513',
                'nama' => 'ASWIM HAKAM MAULANA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413514',
                'nama' => 'ATHAYA DAFFA WINATA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413524',
                'nama' => 'AZZURRI ALHABIB',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413540',
                'nama' => 'DEFILA CAHYATI',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413545',
                'nama' => 'DEWI NABILA HIDAYATUL IMTIYAZ',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413559',
                'nama' => 'FADHLAN MUHAMMAD MILZAM',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413569',
                'nama' => 'FATIMAH AZ ZAHRA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413571',
                'nama' => 'FAUZAN DIMAS PRASOJO',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413578',
                'nama' => 'FILDZAH NUR IZZATI',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413591',
                'nama' => 'HAFIZH ANSHORI',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413600',
                'nama' => 'HENRIQ HENRICI NAUFAL',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413608',
                'nama' => 'IMAM MANSYUR',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413615',
                'nama' => 'IRZAQI FAIZIL SYAMZA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413628',
                'nama' => 'KHAIRA PARSHA ZARITA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413640',
                'nama' => 'M. HANIF INDRIAWAN',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413645',
                'nama' => 'MAHATHIR MUHAMMAD',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413655',
                'nama' => 'MOH. KHAIRUL FAQIIH',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413656',
                'nama' => 'MOHAMAD IRYAWAN FIKRIANSYAH',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413667',
                'nama' => 'MUHAMMAD ADIKA YAFI PUTRA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413675',
                'nama' => 'MUHAMMAD FADLAN RAMADHAN',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413703',
                'nama' => 'NABILA ZAHRA NASUTION',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413720',
                'nama' => 'NAZWA AULIA PUTRI',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413733',
                'nama' => 'PASKAH KRISTOPHEL BARTH SILABAN',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413737',
                'nama' => 'PUTRI RATNA SARI',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413739',
                'nama' => 'RAFI AZKHAIRUL WIJAYA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413742',
                'nama' => 'RAHMAT BUDIYANTO',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413752',
                'nama' => 'REHANDHIKA ARYA PRATAMA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413781',
                'nama' => 'SHALIH ABDILLAH',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413793',
                'nama' => 'THERESIA NEVA DELILAH DAPHNE CANTIKA PANJAITAN',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413794',
                'nama' => 'TIFA NAQIYA',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413798',
                'nama' => 'VICKY ADI SAPUTRO',
                'kelas' => '1KS2',
            ],
            [
                'nim' => '222413493',
                'nama' => 'ALVIEN FAIZ REFANSYAH',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413504',
                'nama' => 'ANGGIA MAULIDA',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413510',
                'nama' => 'ARIEF RAHMAN HAKIM HARAHAP',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413527',
                'nama' => 'BAMBANG FATHDRY HERMAWAN',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413531',
                'nama' => 'BINSAR TAMBUNAN',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413542',
                'nama' => 'DESI NATALIA MAGDALENA NAIBAHO',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413546',
                'nama' => 'DHINAR ARUM DAMAYANTI',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413570',
                'nama' => 'FATURROHMAN FAIRUZ ZAKI',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413581',
                'nama' => 'FRANSATYA YOGA GUNAWAN',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413597',
                'nama' => 'HASYA RAHMI RAMADHINA',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413611',
                'nama' => 'INDRA BINTORO AJI SUDARSONO',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413616',
                'nama' => 'ISNAN AKBAR SAPUTRA',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413619',
                'nama' => 'JOAR J. RAMBULANGI',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413620',
                'nama' => 'JOSUA BLATER. L. RAMBE',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413623',
                'nama' => 'JOYCE CYNTHIA BR SITORUS',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413635',
                'nama' => 'LUIS MONTOYA STEFANUS SIREGAR',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413637',
                'nama' => "LUTFIA AFIFATUL ZAHRO'",
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413641',
                'nama' => 'M. IFFAN ISMAIL',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413650',
                'nama' => 'MAULIDIVA SANDRIANI',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413666',
                'nama' => 'MUHAMMAD ADIIB RIZKY HARIYANTO',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413671',
                'nama' => 'MUHAMMAD AKRAM ALMUAFIF',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413672',
                'nama' => 'MUHAMMAD BIMADDIN',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413679',
                'nama' => "MUHAMMAD FATHAN 'AQILA",
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413680',
                'nama' => 'MUHAMMAD FAZLI AHADAN',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413681',
                'nama' => 'MUHAMMAD FIKRAM SALIM',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413701',
                'nama' => 'NABILA NOVITA RAHMA',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413706',
                'nama' => 'NAILA ANINDIA MAHARANI',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413709',
                'nama' => 'NAJMATUL ROSYADAH ASRA',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413727',
                'nama' => 'NOVRANDHI CAHYA BINERY',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413741',
                'nama' => 'RAFLI ALIF FIKRI',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413757',
                'nama' => 'REZGINA PUTRI RAMADHANI',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413762',
                'nama' => 'RIFQY AUNUR RAHIM',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413765',
                'nama' => 'RIZKI ALI WAFA',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413774',
                'nama' => 'SAMUEL SAPUTRA MANURUNG',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413790',
                'nama' => 'SYARAH IZZATUL HUSNA',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413800',
                'nama' => 'WAHYU NURWAHID',
                'kelas' => '1KS3',
            ],
            [
                'nim' => '222413470',
                'nama' => 'ADITYA FIRDAUS PARDOSI',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413483',
                'nama' => 'AJUWI',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413495',
                'nama' => 'ALYA NAILAH ZAID',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413506',
                'nama' => 'AQILAH DZAKIYAH',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413532',
                'nama' => 'BUNGARAN SAMMY BRIANDOLI NAINGGOLAN',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413535',
                'nama' => 'CHAESKANACHA PUNJAMBI ALSYA ALSYELLZA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413539',
                'nama' => 'DEANDHITO ROSEWIKA FAHRUDIN MUHAMMAD',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413548',
                'nama' => 'DIMAS AQILA RAYHANA LEILA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413557',
                'nama' => 'ESPITA RIA GRACELA RAJAGUKGUK',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413563',
                'nama' => 'FAIZ AQIL MAJID',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413567',
                'nama' => 'FARRAS ADIANDRA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413574',
                'nama' => 'FAZRAL BAIHAQI',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413576',
                'nama' => 'FEBRINA AZZAHRA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413582',
                'nama' => 'FUTUH RAJANA ADZIKRO',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413612',
                'nama' => 'INDRIANI THERESIA DOLOKSARIBU',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413614',
                'nama' => 'IQRAUL FIQRI',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413622',
                'nama' => 'JOY NOVASARI NAINGGOLAN',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413627',
                'nama' => 'KADEK KRISNA DWI DARMA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413633',
                'nama' => 'LAILATUS ISTIANAH',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413634',
                'nama' => 'LUCIANO CEZAR BUDI PRASETIO',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413642',
                'nama' => 'M. RAMDHANI SATRITAMA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413644',
                'nama' => 'MAEZAR ARDHANTA PUTRA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413646',
                'nama' => 'MAHSUS AUWABIN',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413670',
                'nama' => 'MUHAMMAD AKBAR PERMANA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413682',
                'nama' => 'MUHAMMAD GHIBRAN ADITYA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413683',
                'nama' => 'MUHAMMAD HAFIDZ AR RASYID HUTAGALUNG',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413685',
                'nama' => 'MUHAMMAD IQBAL NURSYAMSI',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413691',
                'nama' => 'MUHAMMAD RAFLY RASYARI',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413693',
                'nama' => 'MUHAMMAD RIFQI',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413745',
                'nama' => 'RAJIB ILIWUA JOHAN',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413750',
                'nama' => 'RAYHAN RIZKY RAMADHAN',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413755',
                'nama' => 'RENDI DANKEN GINTING',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413763',
                'nama' => 'RISYDA AZIFATIL MAGHFIRA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413776',
                'nama' => 'SATRIA ARYA BIMASENA WANGSANEGARA',
                'kelas' => '1KS4',
            ],
            [
                'nim' => '222413801',
                'nama' => 'WAKIL NOTO NEGORO',
                'kelas' => '1KS4',
            ]
        ];
        foreach ($mahasiswaData as $key => $val) {
            Mahasiswa::create($val);
        }
    }
}
