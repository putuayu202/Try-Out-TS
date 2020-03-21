<?php
namespace App\Http\Controllers;
use App\User;
use Auth;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'nis'    => $request->nis,
            'nama'    => $request->nama,
            'jurusan'    => $request->jurusan,
            'password'    => $request->password,
         ]);
        $token = auth()->login($user);
        return (['user'=> $user,'token'=>$token]);
    }
    public function login()
    {
        
        $credentials = request(['nis', 'password']);
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }

    public function show()
    {
        $active = Auth::user();
        
        if($active->active = true)
        {
            return response()->json(['error' => 'Unauthorized'], 401);            
        }
        
        $active->active = true;
        $active->save();
        return $active;
    }
    
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }

    

    public function update(Request $request, $id)
    {
        $article = User::findOrFail($id);
        $article->update($request->all());

        return $article;
    }
}