<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            $token = $user->createToken('token')->plainTextToken;

            return response()->json([
                'status' => 'success',
                'message' => 'Pendaftaran berhasil !',
                'token' => $token,
                'user' => $user
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Pendaftaran gagal !',
            ]);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            $token = auth()->user()->createToken('token')->plainTextToken;
            $user = auth()->user();
            return response()->json([
                'status' => 'success',
                'message' => 'Login berhasil !',
                'token' => $token,
                'user' => $user
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Email atau password salah !',
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            "status" => 'success',
            'message' => 'user signout'
        ]);
    }
}
