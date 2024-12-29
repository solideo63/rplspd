<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggaran extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pelanggarans';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'kodePelanggaran',
        'namaPelanggaran',
        'kategoriPelanggaran',
    ];

    // Format default untuk timestamps (jika diperlukan custom)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function operasiRutins()
    {
        return $this->belongsToMany(OperasiRutin::class, 'violation', 'namaPelanggaran', 'id');
    }
}
