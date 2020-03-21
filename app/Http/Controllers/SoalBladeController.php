<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SoalBladeController extends Controller
{
    public function showsoal()
    {
        $soal = DB::table('soal')->get();
        $jawabans = DB::table('soal')->select('user_id');

    	return view('soal',['soal' => $soal]);

    }

    public function input()
    {
        return view('input');
    }

    public function inputsoal(Request $request)
    {
        DB::table('soal')->insert([
            'category'    => $request->category,
            'question'    => $request->question,
            'correct_answer'    => $request->correct_answer,
            'incorrect_answers'    => $request->incorrect_answers,
            'token' => $request->token
        ]);
        return redirect('/inputsoal');
    }
}
