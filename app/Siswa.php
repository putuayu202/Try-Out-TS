<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nis', 'nama','kelas','password',
    ];

    protected $table = 'siswa';
}
