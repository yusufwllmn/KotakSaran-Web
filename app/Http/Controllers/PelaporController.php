<?php

namespace App\Http\Controllers;

use App\Models\Pelapor;
use Illuminate\Http\Request;

class PelaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelapor.home');
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
    public function show(Pelapor $pelapor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelapor $pelapor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelapor $pelapor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelapor $pelapor)
    {
        //
    }
}
