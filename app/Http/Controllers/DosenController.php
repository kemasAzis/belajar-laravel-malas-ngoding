<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index (){
        // $nama = "Kemas abdul azis sanjaya";
        $nama = "kemas abdul azis sanjaya";
        $nim = "TI21240009";
        $umur = 23;
        $alamat = "jl. raya kopang jontlak praya tengah lombok tengah";

        $pelajaran = ["pemrograman web", "pemrograman mobile", "pemrograman desktop", "pemrograman jaringan"];

        return view('biodata',[
            'nama' => $nama,
            'nim' => $nim,
            'umur' => $umur,
            'alamat' => $alamat,
            
            'matkul' => $pelajaran
        ]);
    }
}
