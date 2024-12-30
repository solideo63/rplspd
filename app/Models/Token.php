<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = ['token', 'waktu_kedaluarsa'];

    public function isExpired(): bool
    {
        return now()->greaterThanOrEqualTo($this->expires_at);
    }
}
