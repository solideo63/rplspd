<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperasiUmum extends Model
{
    //
    use HasFactory;

    // Nama tabel di database
    protected $table = 'operasi_umums';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nim',
        'tahun_akademik',
        // 'nama_mahasiswa',
        // 'kelas',
        'pelanggaran',
        'nama_pencatat',
        'tahun_akademik',
        'status_pelanggaran'
    ];

    protected $hidden = ['id', 'created_at', 'updated_at', 'nama_pencatat', 'status_pelanggaran', 'tahun_akademik'];

    // Format default untuk timestamps (jika diperlukan custom)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
