<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index() {
        $laporan    = Laporan::with([
            'bagian',
            'status',
            'user'
        ])->get();

        return response()->json([
            'laporan'   => $laporan
        ]);
    }

    public function store(Request $request){
        $laporan    = new Laporan;

        $request->validate([
            'subjek_laporan'    => 'required',
            'isi_laporan'       => 'required',
            'tanggal_lapor'     => 'required',
            'id_status'         => 'required',
            'id_pelapor'        => 'required',
        ]);

        $laporan->subjek_laporan    = $request->subjek_laporan;
        $laporan->isi_laporan       = $request->isi_laporan;
        $laporan->tanggal_lapor     = Carbon::now()->format('Y-m-d');
        $laporan->id_status         = 1;
        if($request->dokumen != ''){
            $dokumen = time().'jpg';
            file_put_contents('storage/images/'.$dokumen,base64_decode($request->dokumen));
        }
        $laporan->id_pelapor        = Auth::user()->id_user;

        $laporan->save();
        $laporan->user;
        return response()->json([
            'message'   => 'Laporan Delivered',
            'laporan'   => $laporan
        ]);
    }
}
