<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnakBuahController extends Controller
{
    //
    public function AnakBuah($nama, $alamat, $umur)
    {
        return "Nama saya adalah $nama, alamat saya di $alamat, dan umur saya adalah $umur tahun.";
    }

    public function daftar()
    {
        return "Daftar Anak Buah";
    }

    public function proses()
    {
        return "Proses Daftar Anak Buah";
    }
}
