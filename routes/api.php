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

Route::get('/laporan', [ApiController::class, 'laporanIndex'])->name('laporan.index');
Route::post('/laporan', [ApiController::class, 'laporanStore'])->name('laporan.store');
Route::get('/laporan/{id_laporan}', [ApiController::class, 'laporanShow'])->name('laporan.show');

Route::get('/profile/{id_user}', [ApiController::class, 'profileShow'])->name('profile.show');
Route::put('/profile/{id_user}', [ApiController::class. 'profileUpdate'])->name('profile.update');

