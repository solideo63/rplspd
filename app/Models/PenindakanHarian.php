<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenindakanHarian extends Model
{
    /** @use HasFactory<\Database\Factories\PenindakanHarianFactory> */
    use HasFactory;

    // Nama tabel di database
    protected $table = 'penindakan_harian';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'pelanggaran',
        'nama_pencatat',
    ];

    // Format default untuk timestamps (jika diperlukan custom)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
