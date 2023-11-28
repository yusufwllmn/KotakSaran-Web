<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Kategori;
use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            $user = $request->user();
            $bagian = Bagian::all();

            return response()->json([
                'bagian' => $bagian,
                'user'  => $user,
            ]);
        } else {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
    }

    public function store(Request $request){
        if (Auth::check()) {
            $laporan    = new Laporan;
            $user = $request->user();

            $request->validate([
                'subjek_laporan'    => 'required',
                'isi_laporan'       => 'required',
                'dokumen'           => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $laporan->subjek_laporan    = $request->subjek_laporan;
            $laporan->isi_laporan       = $request->isi_laporan;
            $laporan->tanggal_lapor     = Carbon::now()->format('Y-m-d');
            $laporan->id_status         = 1;
            if ($request->has('dokumen')) {
                $dokumen = $request->file('dokumen');
                $namafile = time() . "_" . $dokumen->getClientOriginalName();
                $laporan->dokumen = $namafile;
                $tujuanupload = 'public/dokumen';
                $dokumen->move($tujuanupload, $namafile);
            } else {
                $laporan->dokumen = null;
            }
            $laporan->id_pelapor        = $user->id_user;

            $laporan->save();
            return response()->json([
                'message'   => 'Laporan Telah Terkirim',
            ]);
        } else {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
    }
}
