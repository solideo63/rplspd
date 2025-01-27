<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemonitor extends Model
{
    // Nama tabel di database
    protected $table = 'pemonitor';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'pemonitor_id',
        'nama_pemonitor',
    ];

    // Format default untuk timestamps (jika diperlukan custom)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
