<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'judul',
        'genre',
        'tahun_rilis',
        'sutradara',
        'negara',
        'durasi',
        'rating',
        'deskripsi',
        'poster'
    ];
}