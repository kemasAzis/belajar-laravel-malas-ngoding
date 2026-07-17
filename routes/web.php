<?php

use Illuminate\Support\Facades\Route;
// import controller rute 4
use App\Http\Controllers\DosenController;
// import controller rute 3
use App\Http\Controllers\BlogController;


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