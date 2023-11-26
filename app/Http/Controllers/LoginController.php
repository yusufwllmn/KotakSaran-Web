<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pelapor;
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

        return view('register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'pelapor'
        ]);

        Auth::login($user);
        return to_route('biodataPage');
    }

    public function biodataPage(Request $request){
        $datakategori  = Kategori::all();
        $datauser      = User::all();
        $datapelapor   = Pelapor::all();

        return view('signup', ['kategori'=>$datakategori, 'user'=>$datauser, 'pelapor'=>$datapelapor]);
    }

    public function biodata(Request $request){
        
        $this->validate($request, [
            'id_user' => 'required',
            'id_identitas' => 'required',
            'nama' => 'required',
            'id_kategori' => 'required',
            'alamat' => 'required',
            'telephone' => 'required',
            'avatar'=>'nullable'
        ]);

        $file = $request->file('avatar');
        $namafile = time() . "_" . $file->getClientOriginalName();

        $tujuanupload = 'avatar';
        $file->move($tujuanupload, $namafile);

        $id_pelapor = Pelapor::find($id_pelapor);
        $id_pelapor->id_user   = $request->id_user;
        $id_pelapor->id_identitas      = $request->id_identitas;
        $id_pelapor->nama      = $request->nama;
        $id_pelapor->id_kategori      = $request->id_kategori;
        $id_pelapor->alamat      = $request->alamat;
        $id_pelapor->telephone      = $request->telephone;
        $id_pelapor->avatar      = $request->avatar;

        $id_pelapor->save();

        return to_route('pelaporPage');
    }

    public function logout()
    {
        Auth::logout();

        return to_route('loginPage');
    }
}
