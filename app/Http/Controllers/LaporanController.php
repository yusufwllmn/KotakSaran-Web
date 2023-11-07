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
            'nama' => 'required',
            'telepon' => 'required',
            'tanggalPesan' => 'required',
            'tanggalSewa' => 'required',
        ]);

        $laporan = Laporan::create([
            'id_user' => Auth::user()->id_user,
            'nama' => $request->nama,
            'no_telp' => $request->telepon,
            'tgl_pesan' => $request->tanggalPesan,
            'tgl_sewa' => $request->tanggalSewa,
            'status' => 'Diproses'
        ]);

        $file = request('attachment');
        if ($file) {
            $dir = 'uploads';
            $fileName = time() . '-' . Str::random(8) . '.' .
                        $file->extension();
            $file->move($dir, $fileName);
            $filepath = $dir . '/' . $fileName;
            $laporan->attachment = $filepath;
            $laporan->save();
    }
    session()->flash('successMessage', 'Data saved');
    return redirect()->back();

        return redirect('/customer/aula');
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
