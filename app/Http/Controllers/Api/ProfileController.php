<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Pelapor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\AtMost;

class ProfileController extends Controller
{

    public function index(Request $request){
        if (Auth::check()) {
            $user = $request->user();
            $pelapor = Pelapor::with([
                'user',
                'kategori'
                ])
                ->where('id_user', $user->id_user)
                ->first();

                if ($pelapor) {
                    $pelapor->avatar = asset('avatar/' . $pelapor->avatar);
                }

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
        if (Auth::check()) {
            $pelapor = Pelapor::find($id_pelapor);

            $this->validate($request,[
                'id_identitas'  => 'required',
                'nama'          => 'required',
            ]);

            $pelapor->id_identitas  = $request->id_identitas;
            $pelapor->nama          = $request->nama;
            $pelapor->id_kategori   = $request->id_kategori;
            $pelapor->alamat        = $request->alamat;
            $pelapor->telephone     = $request->telephone;
            $pelapor->save();
            return response()->json([
                'message'   => 'Updated'
            ]);

        } else {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
    }

    public function kategori(Request $request){
        if (Auth::check()) {
            $user = $request->user();
            $kategori = Kategori::all();

            return response()->json([
                'kategori'  => $kategori,
                'user'      => $user
            ]);
        } else {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
    }
}
