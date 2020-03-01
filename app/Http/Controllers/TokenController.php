<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;

class TokenController extends Controller
{
    public function createtoken(Request $request)
    {
        $quiz = Token::create([
            'token'    => $request->token,
            'pelajaran'    => $request->pelajaran,
            'jam_pengerjaan'    => $request->jam,
            'jumlah_soal'    => $request->jumlah,
        ]);
        return $quiz;
    }


    // public function token(Request $request){
    //     $token = $request->token;
    //     $all = Token::where('active', '=', true)->pluck('token')->toArray();
        
    //     if ($all != $token){
    //         $result = 'false';
    //     } else {
    //         $result = "true";
    //     }
        
    //     return (['user'=> $all,'token'=>$token]);
    // }
    
    public function token($token){
        try {
            $soal = Token::where('token',$token)->firstOrFail();
            return Token::where('token',$token)->get()->toArray();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $soal = json_encode(['error' => 'Tidak Ada Hasil']);
            return $soal;
        }
    }
}
