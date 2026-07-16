<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        // return view('mahasiswa');
        // return "Hallo, ini adalah halaman mahasiswa";
        $nama = "Kemas azis";
        return view('mahasiswa', compact('nama'));
    }
}
