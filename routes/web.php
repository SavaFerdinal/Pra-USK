<?php

use App\Http\Controllers\PesanController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PeminjamanController;
use App\Http\Controllers\User\PengembalianController;
use App\Http\Controllers\User\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->middleware(['auth', 'role:user'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/peminjaman/riwayat', [PeminjamanController::class , 'riwayat'])->name('user.riwayat.peminjaman');
    Route::get('/peminjaman' , [PeminjamanController::class , 'index'])->name('user.form.peminjaman');
    Route::post('/form_peminjaman' , [PeminjamanController::class , 'form']);
    Route::post('/peminjaman/submit' , [PeminjamanController::class , 'store'])->name('submit.peminjaman');
    Route::get('/pengembalian', [PengembalianController::class , 'index'])->name('user.pengembalian');
    Route::get('/pengembalian/riwayat' , [PengembalianController::class , 'riwayat'])->name('user.riwayat.pengembalian');
    Route::post('/pengembalian/submit' , [PengembalianController::class , 'store'])->name('submit.pengembalian');
    Route::get('/pesan/masuk', [PesanController::class , 'masuk'])->name('user.pesan.masuk');
    Route::post('/pesan/masuk/ubah_status', [PesanController::class , 'updateStatus'])->name('user.pesan.masuk.update');
    Route::get('/pesan/terkirim', [PesanController::class , 'terkirim'])->name('user.pesan.terkirim');
    Route::get('/profile', [ProfileController::class , 'index'])->name('user.profile');
    Route::put('/profile/update/' , [ProfileController::class , 'update'])->name('user.profile.update');
});