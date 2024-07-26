<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoasController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PembimbingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {

    Route::get('/', [SessionController::class, 'index'])->name('login');
    Route::post('/', [SessionController::class, 'login']);

});

Route::get('/home', function () {
    return redirect('/');
});

Route::middleware(['auth', 'sessionexpired'])->group(function () {
    Route::get('/operator', [AdminController::class, 'operator'])->middleware('useraccess:admin');
    Route::get('/pelajar', [AdminController::class, 'pelajar'])->middleware('useraccess:pelajar')->name('pelajar');
    Route::get('/pelajar/jadwal',[KoasController::class,'viewjadwal'])->middleware('useraccess:pelajar')->name('pelajar.jadwal');
    Route::get('/pengajar', [AdminController::class, 'pengajar'])->middleware('useraccess:pengajar')->name('pengajar');
    Route::get('/pengajar/jadwal', [PembimbingController::class, 'viewjadwal'])->middleware('useraccess:pengajar')->name('pengajar.jadwal');
    Route::get('/pengajar/daftar-koas', [PembimbingController::class, 'viewkoas'])->middleware('useraccess:pengajar')->name('pengajar.koas');
    Route::get('/logout', [SessionController::class, 'logout']);
    Route::get('/error', [SessionController::class,'error']);
});

