<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soal;

class SoalController extends Controller
{
    public function createsoal(Request $request)
    {
        $quiz = Soal::create([
            'category'    => $request->category,
            'question'    => $request->question,
            'correct_answer'    => $request->correct_answer,
            'incorrect_answers'    => $request->incorrect_answers,
        ]);
        return $quiz;
    }

    public function soal($category){
        try {
            return Soal::where('category',$category)->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return json_encode(['error' => 'No query results for model']);
        }
    }
}
