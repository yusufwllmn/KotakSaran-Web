<?php

use App\Http\Controllers\ApiController;

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/riwayat', [RiwayatController::class, 'index']);
    Route::get('/riwayat/{id_laporan}', [RiwayatController::class, 'show']);

    Route::get('/laporan', [LaporanController::class, 'index']);
    Route::post('/laporan', [LaporanController::class, 'store']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile/{id_user}', [ProfileController::class, 'update']);

    Route::get('/logout', [AuthController::class, 'logout']);
});
