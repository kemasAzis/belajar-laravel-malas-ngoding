<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        // return "Hallo, selamat datang di halaman dosen";
        $nama = "Kemas azis";
        $nim = "TI21240009";
        $skil = [
            "PHP",
            "HTML",
            "CSS"
        ];
        return view('biodata', compact('nama', 'nim', 'skil'));
    }
}
