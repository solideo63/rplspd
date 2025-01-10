<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Inspeksi Kedisiplinan</title>
    <style>
        h5 {
            text-align: center;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        p {
            margin: 3px 0;
            /* Kurangi margin untuk teks header */
            font-size: 12px;
            /* Perkecil ukuran font */
        }

        header,
        footer {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 12px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h3>SATUAN PENEGAK DISIPLIN POLITEKNIK STATISTIKA STIS</h3>
        <p>Jl. Otto Iskandardinata No. 64C, Jakarta 13330<br>Surel: spd@stis.ac.id</p>
        <hr>
    </header>

    <h5>LAPORAN OPERASI UMUM</h5>
    <p>Laporan tanggal: {{ $tanggal }}</p> <br>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Tingkat</th>
                <th>Pelanggaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama_mahasiswa }}</td>
                    <td>{{ $item->tingkat }}</td>
                    <td>{{ $item->pelanggaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Operasi Rutin</title>
</head>

<body>
    <h1>Laporan Operasi Rutin</h1>
    <p>Tanggal: {{ $tanggal }}</p>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Tingkat</th>
                <th>Pelanggaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama_mahasiswa }}</td>
                    <td>{{ $item->tingkat }}</td>
                    <td>{{ $item->pelanggaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> --}}
