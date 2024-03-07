<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use App\Models\Bagian;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminlaporanController extends Controller
{
    public function index()
    {
        $datalaporan = Laporan::orderby('id_laporan', 'ASC')->paginate(10);
        $databagian  = Bagian::all();
        $datauser    = User::all();
        $datastatus  = Status::whereIn('status', ['diterima', 'ditolak'])->get();

        return view('admin.laporan',['laporan'=>$datalaporan, 'subjek'=>$databagian, 'user'=>$datauser, 'status'=>$datastatus]);
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
            'subjek_laporan' => 'required',
            'isi_laporan' => 'required',
            'tanggal_lapor' => 'required',
            'dokumen' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'id_pelapor' => 'required'
        ]);

        $file = $request->file('dokumen');
        $namafile = time() . "_" . $file->getClientOriginalName();

        $tujuanupload = 'dokumen';
        $file->move($tujuanupload, $namafile);

        Laporan::create([
            'subjek_laporan' => $request->subjek_laporan,
            'isi_laporan' => $request->isi_laporan,
            'tanggal_lapor' => $request->tanggal_lapor,
            'id_status' => 1,
            'dokumen' => $namafile,
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
    $id_laporan = Laporan::find($id_laporan);

    if ($request->has('id_status')) {
        $id_laporan->id_status = $request->id_status;
    } else {
        return;
    }

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
