<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPD extends Model
{
    // Nama tabel di database
    protected $table = 'spd';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nas',
        'nama_anggota',
    ];

    // Format default untuk timestamps (jika diperlukan custom)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
