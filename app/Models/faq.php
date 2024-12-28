<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class faq extends Model
{
    use HasFactory;

    // Menonaktifkan fitur timestamps
    public $timestamps = false;

    // Nama tabel di database
    protected $table = 'faq';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'tanya',
        'jawab',
    ];

}
