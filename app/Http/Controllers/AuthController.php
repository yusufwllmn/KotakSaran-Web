<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function index()
    // {
    //     return view('auth.login');
    // }

    // public function login(Request $request)
    // {
    //     $user = User::where('email', $request->input('email'))->first();

    //     if(!$user)
    //         return to_route('loginPage')->with('error', 'Email atau Password tidak sesuai');

    //     if(!Hash::check($request->input('password'), $user->password))
    //         return to_route('loginPage')->with('error', 'Email atau Password tidak sesuai');

    //     if($user->role == 'admin') {
    //         Auth::login($user);
    //         return to_route('adminPage');
    //     } elseif($user->role == 'petugas') {
    //         Auth::login($user);
    //         return to_route('petugasPage');
    //     } else {
    //         Auth::login($user);
    //         return to_route('pelaporPage');
    //     }
    // }

    // public function register(Request $request)
    // {
    //     $user = User::create([
    //         'email',
    //         'password' => Hash::make($request),
    //         'role' => 'pelapor'
    //     ]);

    //     Auth::login($user);
    //     return to_route('pelaporPage');
    // }

    // public function logout()
    // {
    //     Auth::logout();

    //     return to_route('loginPage');
    // }
}
