<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminlaporanController extends Controller
{
    public function index()
    {
        return Inertia::render('AdminPage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lapor = new Laporan();
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
