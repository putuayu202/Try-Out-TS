<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = [
        'category', 'question','correct_answer','answer_1', 'answer_2', 'answer_3', 'answer_4', 'token',
    ];

    protected $table = 'soal';
}
