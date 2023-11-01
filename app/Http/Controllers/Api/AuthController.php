<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $user   = User::where('email', $request->email)->first();

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'message'   => 'Invalid email or password',
            ],401);
        }

        if ($user->role !== 'pelapor') {
            return response()->json([
                'message' => 'Access denied'
            ], 403);
        }
        $token  = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'message'   => 'Succesfully logged In',
            'token'     => $token,
            'user'      => Auth::user()
        ],200);
    }

    public function register(Request $request)
    {
        $user   = new User();
        $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role     = 'pelapor';
        $user->save();

        return response()->json([
            'message'   => 'Register Success'
        ],200);
    }

    public function logout()
    {
        auth()->user()->tokens->each(function ($token) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }
}
