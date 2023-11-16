<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use App\Models\Bagian;
use App\Models\Status;
use App\Models\Pelapor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalaporan = Laporan::orderby('id_laporan', 'ASC')->paginate(15);
        $databagian  = Bagian::all();
        $datauser    = User::all();
        $datapelapor = Pelapor::all();
        $datastatus  = Status::all();

        return view('pelapor.laporan',['laporan'=>$datalaporan, 'subjek'=>$databagian, 'user'=>$datauser, 'pelapor'=>$datapelapor, 'status'=>$datastatus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subjek_laporan' => 'required',
            'isi_laporan' => 'required',
            'tanggal_lapor' => 'required',
            'id_status' => 'required',
            'dokumen' => 'required|mimes:png,jpg,jpeg|max:2048',
            'id_pelapor' => 'required',
        ]);

        Laporan::create([
            'id_laporan' => $request->id_laporan,
            'subjek_laporan' => $request->subjek_laporan,
            'isi_laporan' => $request->isi_laporan,
            'tanggal_lapor' => $request->tanggal_lapor,
            'id_status' => 'dalam antrian',
            'id_pelapor' => Auth::user()->id_user
        ]);

        $photo  = $request->file('photo');
        $filename   = date('Y-m-d').$photo->getClientOriginalName();
        $path   = 'dokumen/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($photo));


        return redirect()->view('pelapor.laporan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
