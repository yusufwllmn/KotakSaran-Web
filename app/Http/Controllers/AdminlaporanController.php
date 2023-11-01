<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminlaporanController extends Controller
{
    public function index()
    {
        return Inertia::render('AdminPage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $lapor = new Laporan();
        $lapor->subjek = $request->subjek_laporan;
        $lapor->deskripsi = $request->isi_laporan;
        $lapor->tanggal = $request->tanggal_lapor;
        $lapor->status = $request->id_status;
        $lapor->dokumen = $request->dokumen;
        $lapor->pelapor = $request->id_pelapor;
        $lapor->save();
        return redirect()->back()->with('message', 'berita berhasil dibuat');

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
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
