<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminlaporanController extends Controller
{
    public function index()
    {
        $datalaporan = Laporan::orderby('id_laporan', 'ASC')->paginate(10);
        $datauser    = User::all();

        return view('admin.laporan',['laporan'=>$datalaporan, 'user'=>$datauser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_laporan' => 'required',
            'subjek_laporan' => 'required',
            'isi_laporan' => 'required',
            'tanggal_lapor' => 'required',
            'id_status' => 'required',
            'dokumen' => 'required',
            'id_pelapor' => 'required'
        ]);

        Laporan::create([
            'id_laporan' => $request->id_laporan,
            'subjek_laporan' => $request->subjek_laporan,
            'isi_laporan' => $request->isi_laporan,
            'tanggal_lapor' => $request->tanggal_lapor,
            'id_status' => $request->id_status,
            'dokumen' => $request->dokumen,
            'id_pelapor' => $request->id_pelapor
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id_laporan, Request $request)
    {
        $this->validate($request, [
            'id_laporan' => 'required',
            'subjek_laporan' => 'required',
            'isi_laporan' => 'required',
            'tanggal_lapor' => 'required',
            'id_status' => 'required',
            'dokumen' => 'required',
            'id_pelapor' => 'required'
        ]);

        $id_laporan = Laporan::find($id_laporan);
        $id_laporan->id_laporan         = $request->id_laporan;
        $id_laporan->subjek_laporan     = $request->subjek_laporan;
        $id_laporan->isi_laporan        = $request->isi_laporan;
        $id_laporan->tanggal_lapor      = $request->tanggal_lapor;
        $id_laporan->id_status          = $request->id_status;
        $id_laporan->dokumen            = $request->dokumen;
        $id_laporan->id_pelapor         = $request->id_pelapor;

        $id_laporan->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_laporan)
    {
        $datalaporan=Laporan::find($id_laporan);
        $datalaporan->delete();

        return redirect()->back();
    }
}
