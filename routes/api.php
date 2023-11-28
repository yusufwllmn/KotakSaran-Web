<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function ()  {
    return response()->json([
        'message'   => 'Access Denied'
    ],401);
})->name('login');

Route::post('/login', ['App\Http\Controllers\Api\AuthController', 'login']);
Route::post('/register', ['App\Http\Controllers\Api\AuthController', 'register']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/autologin', ['App\Http\Controllers\Api\AuthController', 'autoLogin']);

    Route::get('/riwayat', ['App\Http\Controllers\Api\RiwayatController', 'index']);
    Route::get('/riwayat/{id_laporan}', ['App\Http\Controllers\Api\RiwayatController', 'show']);

    Route::get('/laporan', ['App\Http\Controllers\Api\LaporanController', 'index']);
    Route::post('/laporan', ['App\Http\Controllers\Api\LaporanController', 'store']);

    Route::get('/kategori', ['App\Http\Controllers\Api\ProfileController', 'kategori']);

    Route::get('/profile', ['App\Http\Controllers\Api\ProfileController', 'index']);
    Route::put('/profile/{id_pelapor}', ['App\Http\Controllers\Api\ProfileController', 'update']);

    Route::post('/logout', ['App\Http\Controllers\Api\AuthController', 'logout']);
});
