<h1>Laporan Pelanggaran</h1>
<p>Halo, <strong>{{ $nama_mahasiswa }}</strong>,</p>
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
    <p>Sistem Informasi Pelanggaran</p>
</div>
