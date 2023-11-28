<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PelaporController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugaslaporanController;
use App\Http\Controllers\PetugasprofileController;
use App\Http\Controllers\AdminlaporanController;
use App\Http\Controllers\AdminpelaporController;
use App\Http\Controllers\AdminpetugasController;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// // Route::get('/dashboard', function () {
// //     return Inertia::render('AdminPage');
// // })->middleware(['auth', 'verified'])->name('adminpage');

// Route::get('/siswa', function () {
//     return Inertia::render('AdminSiswa');
// })->middleware(['auth', 'verified'])->name('siswa');

// Route::get('/lapor', function () {
//     return Inertia::render('AdminLapor');
// })->middleware(['auth', 'verified'])->name('siswa');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

    Route::get('/', [LoginController::class, 'index'])->name('loginPage');
    Route::post('/login', [LoginController::class, 'login'])->name('loginAction');

    Route::get('/register', [LoginController::class, 'registerPage'])->name('registerPage');
    Route::post('/register', [LoginController::class, 'register'])->name('register');

    Route::get('/biodata', [LoginController::class, 'biodataPage'])->name('biodataPage');
    Route::put('/biodata', [LoginController::class, 'biodata'])->name('biodata');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        if(Auth::user()->role == 'pelapor'){
            return redirect('/dashboard/');
        } else if(Auth::user()->role == 'petugas'){
            return redirect('/petugas/');
        } else if(Auth::user()->role == 'admin'){
            return redirect('/admin/');
        }else{
            return redirect('/');
        }
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['role:pelapor'])->group(function() {
        Route::get('/dashboard', [PelaporController::class, 'index'])->name('pelaporPage');

        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
        Route::get('/laporan/{id_laporan}', [LaporanController::class, 'show'])->name('laporan.show');

        Route::get('/profile/{id_user}', [ProfileController::class, 'show'])->name('profile.index');
        Route::put('/profile/{id_user}', [ProfileController::class, 'update'])->name('profile.update');
    });

    // Route::middleware(['role:petugas'])->group(function() {
    //     Route::get('/petugas/', [PetugasController::class, 'index'])->name('petugasPage');

    //     Route::get('/petugas/laporan', [PetugaslaporanController::class, 'index'])->name('petugaslaporan.index');
    //     Route::get('/petugas/laporan/{id_laporan}', [PetugaslaporanController::class, 'show'])->name('petugaslaporan.show');
    //     Route::put('/petugas/laporan/{id_laporan}', [PetugaslaporanController::class, 'update'])->name('petugaslaporan.update');

    //     Route::get('/petugas/profile/{id_user}', [PetugasprofileController::class, 'show'])->name('petugasprofile.show');
    //     Route::put('/petugas/profile/{id_user}', [PetugasprofileController::class, 'update'])->name('petugasprofile.update');

    // });

        Route::middleware(['role:admin'])->group(function() {
        Route::get('/admin', [AdminController::class, 'index'])->name('adminPage');

        Route::get('/admin/laporan', [AdminlaporanController::class, 'index'])->name('adminlaporan.index');
        Route::post('/admin/laporan', [AdminlaporanController::class, 'store'])->name('adminlaporan.store');
        // Route::get('/admin/laporan/{id_laporan}', [AdminlaporanController::class, 'show'])->name('adminlaporan.show');
        Route::delete('/admin/laporan/{id_laporan}', [AdminlaporanController::class, 'destroy'])->name('adminlaporan.destroy');
        Route::put('/admin/laporan/{id_laporan}', [AdminlaporanController::class, 'update'])->name('adminlaporan.update');

        Route::get('/admin/pelapor', [AdminpelaporController::class, 'index'])->name('adminpelapor.index');
        Route::delete('/admin/pelapor/{id_user}', [AdminpelaporController::class, 'destroy'])->name('adminpelapor.destroy');

        Route::get('/admin/petugas', [AdminpetugasController::class, 'index'])->name('adminpetugas.index');
        Route::post('/admin/petugas', [AdminlaporanController::class, 'store'])->name('adminpetugas.store');
        Route::delete('/admin/petugas/{id_user}', [AdminpetugasController::class, 'destroy'])->name('adminpetugas.destroy');
        Route::put('/admin/petugas/{id_user}', [AdminlaporanController::class, 'update'])->name('adminpetugas.update');

    });
});


