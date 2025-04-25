<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gambar',
        'jabatan',
        'instagram',
        'facebook',
        'linkedin',
    ];
}