<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            $user = $request->user();
            $laporan = Laporan::with([
                'user',
                'bagian',
                'status'
                ])
                ->where('id_pelapor', $user->id_user)
                ->get();

            foreach($laporan as $lapor){
                $lapor->dokumen = asset('public/dokumen/' . $lapor->dokumen);
            }

            return response()->json([
                'laporan' => $laporan
            ]);
        } else {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
    }

    public function show($id_laporan){
        $laporan = Laporan::with([
            'user',
            'bagian',
            'status'
            ])
            ->find($id_laporan);

        if (!$laporan) {
            return response()->json([
                'message' => 'Laporan not found'
            ], 404);
        }

        return response()->json(['laporan' => $laporan]);
    }
}
