<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Inspeksi Kedisiplinan</title>
    <style>
        header {
            align-items: center;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px 0;
            box-sizing: border-box;
        }

        header .box .logo1 {
            width: 83.52px;
            height: auto;
        }

        header .box .logo2 {
            width: 70px;
            height: auto;
        }

        header .content {
            text-align: center;
        }

        header h3 {
            font-size: 15px;
            font-weight: bold;
            margin: 0;
            line-height: 1;
        }

        header p {
            font-size: 11px;
            margin: 5px 0;
            font-weight: bold;
        }

        hr {
            margin-top: 1px;
            border: none;
            border-top: 3px solid #000;
            width: 85%;
        }

        header .content::after {
            content: "";
            clear: both;
            display: table;
        }

        header .box {
            float: left;
            width: 33.33%;
        }

        h5 {
            text-align: center;
        }

        main {
            align-items: center;
            font-family: Arial, sans-serif;
            margin: 0 50px;
            padding: 0 50px;
        }

        main p {
            font-size: 12px;
        }

        main table {
            width: 100%;
            border-collapse: collapse;
            /* Agar border tidak ganda */
            font-size: 12px;
            /* Mengatur ukuran font menjadi 12px */
            line-height: 1;
            /* Mengatur spasi antar baris menjadi 1 */
            width: 100%;
        }

        main th,
        main td {
            text-align: center;
            /* Rata kiri untuk teks */
            padding: 5px;
            border: 1px solid black;
            /* Menambahkan border ke sel */
            width: 25%;
        }

        .new-page {
            page-break-before: always;
            /* Memaksa pemisahan halaman sebelum elemen */
        }
    </style>
</head>

<body>
    <header>
        <div class="content">
            <div class="box"><img class="logo1" src="img/logostis.png" alt="Logo Kiri"></div>
            <div class="box">
                <h3>SATUAN PENEGAK DISIPLIN</h3>
                <h3>POLITEKNIK STATISTIKA STIS</h3>
                <p>Jl. Otto Iskandardinata No. 64C, Jakarta 13330<br>Surel: <a
                        href="mailto:spd@stis.ac.id">spd@stis.ac.id</a></p>
            </div>
            <div class="box"><img class="logo2" src="img/logospd.png" alt="Logo Kanan"></div>
        </div>
    </header>
    <hr>

    <main>
        <h5>LAPORAN INSPEKSI KEDISIPLINAN MAHASISWA</h5>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada hari
            {{ $tanggal ? \Carbon\Carbon::parse($tanggal)->translatedFormat('l') : 'N/A' }}, tanggal
            {{ $tanggal ? \Carbon\Carbon::parse($tanggal)->translatedFormat('d F Y') : 'N/A' }}
            telah dilaksanakan Apel Tingkat dengan rincian sebagai berikut:</p>
        <p style="padding-left: 20px;">1. Jenis Kegiatan &nbsp;&nbsp;&nbsp; : Apel Tingkat {{ toRoman($tingkat) }}</p>
        <p style="padding-left: 20px;">2. Tempat
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Lapangan
            Upacara
            Politeknik
            Statistika STIS</p>
        <p style="padding-left: 20px;">3. Waktu
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            05.30-06.30 WIB
        </p>
        <p style="padding-left: 20px;">4. Pelaksana &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Satuan
            Penegak
            Disiplin</p>
        <p style="padding-left: 20px;">5. Peserta
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Seluruh
            Mahasiswa
            Tingkat
            {{ toRoman($tingkat) }}</p>
        <p style="padding-left: 20px;">6. Susunan kegiatan yang dilaksanakan</p>

        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th style="width:10px";>No</th>
                    <th>Waktu</th>
                    <th>Kegiatan</th>
                    <th>Tempat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:10px";>1</td>
                    <td>05.30-05.50</td>
                    <td style="text-align: left";>Briefing Petugas</td>
                    <td rowspan="5">Lapangan
                        Upacara Politeknik Statistika STIS</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td style="width:10px";>2</td>
                    <td>05.50-06.00</td>
                    <td style="text-align: left";>Persiapan operasi</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td style="width:10px";>3</td>
                    <td>06.00-06.30</td>
                    <td style="text-align: left";>Kehadiran dan Pemeriksaan Kerapian Peserta Apel</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td style="width:10px";>4</td>
                    <td>06.30-06.35</td>
                    <td style="text-align: left";>Persiapan Apel</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td style="width:10px";>5</td>
                    <td>06.35-07.00</td>
                    <td style="text-align: left";>Apel Berlangsung</td>
                </tr>
            </tbody>
        </table>

        <p style="padding-left: 20px;">7. Lampiran Laporan</p>
        <p style="padding-left: 40px;">-Laporan absensi peserta apel</p>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian berita acara Inspeksi Kedisiplinan ini
            kami buat untuk
            selankutnya
            dijadikan sebagai laporan dan pertanggungjawaban.</p>
    </main>


    <header class="new-page">
        <div class="content">
            <div class="box"><img class="logo1" src="img/logostis.png" alt="Logo Kiri"></div>
            <div class="box">
                <h3>SATUAN PENEGAK DISIPLIN</h3>
                <h3>POLITEKNIK STATISTIKA STIS</h3>
                <p>Jl. Otto Iskandardinata No. 64C, Jakarta 13330<br>Surel: <a
                        href="mailto:spd@stis.ac.id">spd@stis.ac.id</a></p>
            </div>
            <div class="box"><img class="logo2" src="img/logospd.png" alt="Logo Kanan"></div>
        </div>
    </header>
    <hr>

    <main>
        <p>Lampiran:</p>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>KELAS</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>TINGKAT</th>
                    <th>PELANGGARAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama_mahasiswa }}</td>
                        <td>{{ $item->tingkat }}</td>
                        <td>{{ $item->pelanggaran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

<?php
function toRoman($number)
{
    $map = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
    ];
    return $map[$number] ?? $number; // Kembalikan angka romawi atau angka biasa jika tidak ada mapping
}
?>

</html>
