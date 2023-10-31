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
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


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
Route::get('/', function () {
    return Inertia::render('LandingPage', [
        'title' => 'E-Kosan',
        'description' => 'Asikasik'
    ]);
});

Route::get('/laporan', [LaporController::class, 'index']);


Route::get('/dashboard', function () {
    return Inertia::render('AdminPage');
})->middleware(['auth', 'verified'])->name('adminpage');

Route::get('/siswa', function () {
    return Inertia::render('AdminSiswa');
})->middleware(['auth', 'verified'])->name('siswa');

Route::get('/lapor', function () {
    return Inertia::render('AdminLapor');
})->middleware(['auth', 'verified'])->name('siswa'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
    Route::get('/', [LoginController::class, 'index'])->name('loginPage');
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::get('/register', [LoginController::class, 'registerPage'])->name('registerPage');
    Route::post('/register', [LoginController::class, 'register'])->name('register');

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

        Route::get('/laporan', [LaporanController::class, 'laporanTampil'])->name('laporan');
        Route::post('/laporan', [LaporanController::class, 'laporanTambah'])->name('laporanTambah');

        Route::get('/profile', [ProfileController::class, 'profileTampil'])->name('profile');
        Route::put('/profile/{id_user}', [ProfileController::class, 'profileEdit'])->name('profileEdit');
    });

    Route::middleware(['role:petugas'])->group(function() {
        Route::get('/petugas/', [PetugasController::class, 'index'])->name('petugasPage');

        Route::get('/petugas/laporan', [PetugaslaporanController::class, 'laporanTampil'])->name('petugaslaporan');
        Route::put('/petugas/laporan/{id_laporan}', [PetugaslaporanController::class, 'laporanTambah'])->name('petugaslaporanEdit');

        Route::get('/petugas/profile', [PetugasprofileController::class, 'profileTampil'])->name('profile');
        Route::put('/petugas/profile/{id_user}', [PetugasprofileController::class, 'profileEdit'])->name('petugasprofileEdit');

    });

    Route::middleware(['role:Customer'])->group(function() {
        Route::get('/admin/', [AdminController::class, 'index'])->name('adminPage');

        Route::get('/admin/laporan', [AdminlaporanController::class, 'laporanTampil'])->name('adminlaporan');
        Route::post('/admin/laporan', [AdminlaporanController::class, 'laporanTambah'])->name('adminlaporanTambah');
        Route::delete('/admin/laporan/{id_laporan}', [AdminlaporanController::class, 'laporanHapus'])->name('adminlaporanHapus');
        Route::put('/admin/laporan/{id_laporan}', [AdminlaporanController::class, 'laporanEdit'])->name('adminlaporanEdit');

        Route::get('/admin/pelapor', [AdminpelaporController::class, 'pelaporTampil'])->name('adminpelaporTampil');
        Route::delete('/admin/pelapor/{id_user}', [AdminpelaporController::class, 'pelaporHapus'])->name('adminpelaporHapus');

        Route::get('/admin/petugas', [AdminpetugasController::class, 'petugasTampil'])->name('adminpetugasTampil');
        Route::delete('/admin/petugas/{id_user}', [AdminpetugasController::class, 'petugasHapus'])->name('adminpetugasHapus');

    });
});

*/
