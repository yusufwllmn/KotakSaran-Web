<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if(!$user)
            return to_route('loginPage')->with('error', 'Email atau Password tidak sesuai');

        if(!Hash::check($request->input('password'), $user->password))
            return to_route('loginPage')->with('error', 'Email atau Password tidak sesuai');

        if($user->role == 'admin') {
            Auth::login($user);
            return to_route('adminPage');
        } else if($user->role == 'petugas'){
            Auth::login($user);
            return to_route('petugasPage');
        } else{
            Auth::login($user);
            return to_route('pelaporPage');
        }
    }

    public function registerPage() {
        $datakategori  = Kategori::all();

        return view('register', ['kategori'=>$datakategori]);
    }

    public function register(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'pelapor'
        ]);

        Auth::login($user);
        return to_route('pelaporPage');
    }

    public function logout()
    {
        Auth::logout();

        return to_route('loginPage');
    }
}
