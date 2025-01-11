{{-- <h1>Laporan Pelanggaran</h1> --}}
<h1><b>[TESTING] PROJEK RPL</b></h1>
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
    Jika Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui
    email ini.
</p>
<p>Terima kasih atas perhatian dan kerja samanya.</p>
<div class="footer">
    <p>Hormat kami,</p>
    <p><strong>[Satuan Penegak Disiplin]</strong></p>
    <p>Sistem Pencatatan dan Pelaporan Pelanggaran (SIMPPEL SPD)</p>
</div>
