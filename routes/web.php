<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        if(Auth::user()->role == 'admin'){
            return redirect('/admin/dashboard');
        } else if(Auth::user()->role == 'petugas'){
            return redirect('/petugas/dashboard');
        } else if(Auth::user()->role == 'pelapor'){
            return redirect('/pelapor/dashboard');
        } else{
            return redirect('/');
        }
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['role:admin'])->group(function() {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('adminPage');
    });

    Route::middleware(['role:petugas'])->group(function() {
        Route::get('/petugas/dashboard', [AdminController::class, 'index'])->name('peugasPage');
    });

    Route::middleware(['role:pelapor'])->group(function() {
        Route::get('/pelapor/dashboard', [AdminController::class, 'index'])->name('pelaporPage');
    });
});
