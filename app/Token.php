<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = [
        'token', 'pelajaran','jam_pengerjaan','jumlah_soal',
    ];

    protected $table = 'token';
}
