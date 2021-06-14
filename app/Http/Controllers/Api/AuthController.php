<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function register ( Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);

        //create user

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'kelompok' => $request->kelompok

       ]);

        $user->save();

        return response()->json($user, 201);
    }

    Public function login(Request $request)
    {
        $input = $request->only(['email', 'password']);
        $token = null;

        if (!$token = Auth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => Auth::User()
        ]);

        // $validateData = $request->validate([
        //     'email' => 'email|required',
        //     'password' => 'required'
        // ]);  

        // $login_detail = request(['email', 'password']);

        // if (!Auth::attempt($login_detail)) {
        //     return response()->json(['error' => 'login gagal, cek kembali email atau password anda'], 401);
        // }
        //     $user= $request->user();

        //     $tokenResult = $user->createToken('AccessToken');
        //     $token = $tokenResult->token;
        //     $token->save();

        //     return response()->json([
        //         'access_token' => 'Bearer'.$tokenResult->accessToken,
        //         'token_id' =>$token->id,
        //         'user_id' => $user->id,
        //         'name' => $user->name,
        //         'email' => $user->email
        //     ], 200);
        }
    }

