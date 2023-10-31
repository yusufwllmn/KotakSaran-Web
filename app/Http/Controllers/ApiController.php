<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Laporan;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function laporanIndex() {

        $laporan    = Laporan::with(
            'bagian',
            'status',
            'user',
        )->get();

        return response() -> json([
            'laporan'   => $laporan
        ]);
    }
}
