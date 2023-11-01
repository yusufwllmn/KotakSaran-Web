<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelapor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function update(){
        
    }
}
