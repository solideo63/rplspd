<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // Nama tabel di database
    protected $table = 'admin';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'admin_id',
        'nama_admin',
    ];

    // Format default untuk timestamps (jika diperlukan custom)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
