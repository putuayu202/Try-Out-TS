<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function insertSiswa(Request $request)
    {
        $siswa = Siswa::create([
            'nis'    => $request->nis,
            'nama'    => $request->nama,
            'jurusan'    => $request->jurusan,
            'password'    => $request->password,
        ]);
        $token = auth()->login($siswa);
        return $this->respondWithToken($token);
    }

    public function login()
    {
        $credentials = request(['nis', 'password']);
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }
    


}
