<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soal;

class SoalController extends Controller
{
    public function createsoal(Request $request)
    {
        $soal = Soal::create([
            'category'    => $request->category,
            'question'    => $request->question,
            'correct_answer'    => $request->correct_answer,
            'answer_1'    => $request->answer_1,
            'answer_2'    => $request->answer_2,
            'answer_3'    => $request->answer_3,
            'token' => $request->token
        ]);
        return $soal;
    }

    public function soal($token){
        try {
            $soal = Soal::where('token',$token)->firstOrFail();
            return Soal::where('token',$token)->get()->toArray();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $soal = json_encode(['error' => 'Tidak Ada Hasil']);
            return $soal;
        }
    }

    public function jawabans(){
        $jawabans = Soal::select('incorrect_answers')->get();
        foreach ($jawabans as $memu) {
            echo $memu['incorrect_answers'];
        }
        $jawabana = $memu[2];
        return $jawabana;
    }
}
