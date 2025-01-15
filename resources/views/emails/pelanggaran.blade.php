{{-- <h1>Laporan Pelanggaran</h1> --}}
{{-- <h1><b>[TESTING] PROJEK RPL</b></h1> --}}
<p>Kepada Saudara/i,</p>
<li>Nama: {{ $nama_mahasiswa }}</li>
<li>NIM: {{ $nim }}</li>
<li>Kelas: {{ $kelas }}</li>
<p>Kami telah mencatat pelanggaran yang Anda lakukan berdasarkan laporan yang diterima. Berikut adalah rincian data
    pelanggaran Anda:</p>
<ul>
    @foreach ($pelanggarans as $pelanggaran)
        <li>{{ $pelanggaran }}</li>
    @endforeach
</ul>
<p>
    Jika Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut, silakan menghubungi kami melalui
    email ini.
</p>
<p>Terima kasih atas perhatian dan kerja samanya.</p>
<div class="footer">
    <p>⚜ SATYA DHARMA SISWA ⚜</p>
    <p>➖Official Account 📢 ➖</p>
    <p style="margin: 0;"> Instagram : @spdstis</p>
    <p style="margin: 0;"> X : @spdstis</p>
    <p style="margin: 0;"> Surel : spd@stis.ac.id</p>
    <p> ➖➖➖➖➖➖➖➖➖➖ </p>
    <p>SIMPPEL (Sistem Pencatatan dan Pelaporan Pelanggaran)</p>
</div>
