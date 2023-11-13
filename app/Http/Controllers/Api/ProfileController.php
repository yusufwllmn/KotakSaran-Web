<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelapor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\AtMost;

class ProfileController extends Controller
{

    public function index(){
        if (Auth::check()) {
            $user = Auth::user();
            $pelapor = Pelapor::with([
                'user',
                ])
                ->where('id_user', $user->id_user)
                ->get();

            return response()->json([
                'pelapor' => $pelapor
            ]);
        } else {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
    }

    public function update($id_pelapor, Request $request){
        $pelapor = Pelapor::find($id_pelapor);

        $this->validate($request,[
            'id_identitas'  => 'required',
            'nama'          => 'required',
            'id_kategori'   => 'required',
            'alamat'        => 'required',
            'telephone'     => 'required',
        ]);

        if(!Auth::check()){
            return response()->json([
                'message'   => 'Unauthorized Access'
            ]);
        }

        $pelapor->id_identitas  = $request->id_identitas;
        $pelapor->nama          = $request->nama;
        $pelapor->id_kategori   = $request->id_kategori;
        $pelapor->alamat        = $request->alamat;
        $pelapor->telephone     = $request->telephone;
        $pelapor->save();
        return response()->json([
            'message'   => 'Updated'
        ]);
    }
}
