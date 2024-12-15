<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperasiRutin extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'operasi_rutin';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nim',
        'nas',
        'name',
        'violation',
    ];

    // Format default untuk timestamps (jika diperlukan custom)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
