<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penindakan Harian</title>
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
        <h5>LAPORAN PENINDAKAN HARIAN</h5>
        <p> Hari:
            {{ $tanggal ? \Carbon\Carbon::parse($tanggal)->translatedFormat('l') : 'N/A' }}</p>
        <p>Tanggal:
            {{ $tanggal ? \Carbon\Carbon::parse($tanggal)->translatedFormat('d F Y') : 'N/A' }}</p>
        <h5>DAFTAR PELANGGARAN MAHASISWA</h5>
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

</html>
