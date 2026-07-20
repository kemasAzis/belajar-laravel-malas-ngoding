<?php

use Illuminate\Support\Facades\Route;
// import controller rute 4
use App\Http\Controllers\DosenController;
// import controller rute 3
use App\Http\Controllers\BlogController;
// improt controller rute 5
use App\Http\Controllers\PegawaiController;


Route::get('/', function () {
    return view('welcome');
});

// rute 1 view home
// Route::get('home', function () {
//     return view('home');
// });

// rute 2 return string
Route::get('hallo', function () {
    return 'Hallo, selamat datang di website saya';
});

// rute 3 blog
// Route::get('blog', function () {
//     return view('blog');
// });
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


// rute 4 Tulis rute dengan sintaks array
Route::get('dosen', [DosenController::class, 'index']);

// rute 5 Tulis rute dengan sintaks array
Route::get('pegawai', [PegawaiController::class, 'index']);
// Route::get('/', [PegawaiController::class, 'index']);
Route::get('pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('pegawai/store', [PegawaiController::class, 'store']);
Route::get('pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('pegawai/edit/{id}', [PegawaiController::class, 'edit']);