<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->middleware(['auth', 'role:user'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');

    // Peminjaman
    Route::get('/peminjaman/form', [PeminjamanController::class, 'index'])->name('user.form.peminjaman');
    Route::get('/peminjaman/riwayat', [PeminjamanController::class, 'riwayat'])->name('user.riwayat.peminjaman');
    Route::post('/peminjaman/submit', [PeminjamanController::class, 'store'])->name('user.submit.peminjaman');

    // Pengembalian
    Route::get('/pengembalian/form', [PengembalianController::class, 'index'])->name('user.pengembalian');
    Route::get('/pengembalian/riwayat', [PengembalianController::class, 'riwayat'])->name('user.riwayat.pengembalian');
    Route::post('/pengembalian/submit', [PengembalianController::class, 'store'])->name('submit.pengembalian');

    // Pesan
    Route::get('/pesan/masuk', [PesanController::class, 'masuk'])->name('user.pesan.masuk');
    Route::post('/pesan/masuk/ubah_status', [PesanController::class, 'edit'])->name('user.pesan.masuk.update');
    Route::get('/pesan/terkirim', [PesanController::class, 'terkirim'])->name('user.pesan.terkirim');
    Route::post('/pesan/kirim', [PesanController::class, 'store'])->name('user.pesan.kirim');
    Route::delete('/pesan/delete/{id}', [PesanController::class, 'destroy'])->name('user.pesan.delete');

    //Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::put('/profile/update/', [ProfileController::class, 'update'])->name('user.profile.update');
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/anggota', [UserController::class, 'index'])->name('admin.data.anggota');
    Route::post('/anggota/add', [UserController::class, 'store'])->name('admin.add.anggota');
    Route::put('/anggota/update/{id}', [UserController::class, 'update'])->name('admin.update.anggota');
    Route::delete('/anggota/delete/{id}', [UserController::class, 'destroy'])->name('admin.delete.anggota');
    Route::get('/administrator', [UserController::class, 'indexAdmin'])->name('admin.data.admin');
    Route::post('/administrator/add', [UserController::class, 'storeAdmin'])->name('admin.add.admin');
    Route::delete('/administrator/delete/{id}', [UserController::class, 'destroyAdmin'])->name('admin.delete.admin');
});
