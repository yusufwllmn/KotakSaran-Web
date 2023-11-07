<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use App\Models\Bagian;
use App\Models\Pelapor;
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

        return view('pelapor.laporan',['laporan'=>$datalaporan, 'subjek'=>$databagian, 'user'=>$datauser, 'pelapor'=>$datapelapor]);
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
        //
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
