<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\CheckRole;


Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Middleware Login
Route::middleware([\App\Http\Middleware\CheckRole::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('/admin.dashboard', ['title' => 'Dashboard Admin']);
    });
});
Route::middleware([\App\Http\Middleware\CheckRole::class . ':user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('/user.dashboard', ['title' => 'Dashboard User']);
    });
});


//routing admin
//admin-CRUD Profiles
Route::get('/admin-profiles-index', function () {
    return view('/admin.profiles.index', ['title' => 'Data Mahasiswa']);
});
Route::get('/admin-profiles-create', function () {
    return view('/admin.profiles.create', ['title' => 'Kelola Data Mahasiswa']);
});
Route::get('/admin-profiles-edit', function () {
    return view('/admin.profiles.edit', ['title' => 'Update Data Mahasiswa']);
});
Route::get('/admin-profiles-detail', function () {
    return view('/admin.profiles.detail', ['title' => 'Detail Data Mahasiswa']);
});
//admin-CRUD Aspek
Route::get('/admin-aspek-index', function () {
    return view('/admin.aspek.index', ['title' => 'Data Aspek Penilaian']);
});
Route::get('/admin-aspek-create', function () {
    return view('/admin.aspek.create', ['title' => 'Kelola Data Aspek']);
});
Route::get('/admin-aspek-edit', function () {
    return view('/admin.aspek.edit', ['title' => 'Update Data Aspek']);
});
//admin-CRUD Kriteria
Route::get('/admin-kriteria-index', function () {
    return view('/admin.kriteria.index', ['title' => 'Data Kriteria Penilaian']);
});
Route::get('/admin-kriteria-create', function () {
    return view('/admin.kriteria.create', ['title' => 'Tambah Data Kriteria Penilaian']);
});
Route::get('/admin-kriteria-edit', function () {
    return view('/admin.kriteria.edit', ['title' => 'Update Data Kriteria Penilaian']);
});
//admin-profile matching
Route::get('/admin-hitung-index', function () {
    return view('/admin.hitung.hitung', ['title' => 'Proses Seleksi Persayaratan']);
});
Route::get('/admin-hitung-hasil', function () {
    return view('/admin.hitung.hasil', ['title' => 'Hasil Seleksi Persayaratan']);
});
//admin-Rangking
Route::get('/admin-rangking-index', function () {
    return view('/admin.rangking.index', ['title' => 'Data Penerima Beasiswa Scientist']);
});
//admin-CRUD User
Route::get('/admin-users-index', function () {
    return view('/admin.users.index', ['title' => 'Data Pengguna Sistem Seleksi Penerima Beasiswa Scientist']);
});
Route::get('/admin-users-create', function () {
    return view('/admin.users.create', ['title' => 'Tambah Data Pengguna Sistem Seleksi Penerima Beasiswa Scientist']);
});
Route::get('/admin-users-edit', function () {
    return view('/admin.users.edit', ['title' => 'Update Data Pengguna Sistem Seleksi Penerima Beasiswa Scientist']);
});


// routing user
//user-CRUD Profiles
Route::get('/user-profiles-index', function () {
    return view('/user.profiles.index', ['title' => 'Data Mahasiswa']);
});
Route::get('/user-profiles-create', function () {
    return view('/user.profiles.create', ['title' => 'Kelola Data Mahasiswa']);
});
Route::get('/user-profiles-edit', function () {
    return view('/user.profiles.edit', ['title' => 'Edit Data Mahasiswa']);
});
Route::get('/user-profiles-detail', function () {
    return view('/user.profiles.detail', ['title' => 'Detail Data Mahasiswa']);
});
//user-Aspek
Route::get('/user-aspek-index', function () {
    return view('/user.aspek.index', ['title' => 'Data Aspek Penilaian']);
});
//user-Kriteria
Route::get('/user-kriteria-index', function () {
    return view('/user.kriteria.index', ['title' => 'Data Kriteria Penilaian']);
});
//user-profile matching
Route::get('/user-hitung-index', function () {
    return view('/user.hitung.hitung', ['title' => 'Proses Seleksi Persayaratan']);
});
Route::get('/user-hitung-hasil', function () {
    return view('/user.hitung.hasil', ['title' => 'Hasil Seleksi Persayaratan']);
});
//user-Rangking
Route::get('/user-rangking-index', function () {
    return view('/user.rangking.index', ['title' => 'Data Penerima Beasiswa Scientist']);
});
