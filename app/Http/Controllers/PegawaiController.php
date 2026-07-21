<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // mengambil data dari tabel pegawai
    public function index()
    {
        // mengambil data dari tabel pegawai
        $pegawai = DB::table('pegawai')->get();

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        return view('tambah');
    }



    // method untuk menyimpan data pegawai baru
    public function store(Request $request)
    {
        // insert data ke tabel pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }


    // method untuk menghapus data pegawai
    public function hapus($id)
    {
        // hapus data pegawai berdasarkan id yang dipilih
        // DB::table('pegawai')->where('pegawai_id', $request->id)->delete();
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }


    // method untuk menampilkan view form edit pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // mengirim data pegawai ke view edit
        return view('edit', ['pegawai' => $pegawai]);
    }


    // method untuk mengupdate data pegawai
    public function update(Request $request)
    {
        // update data pegawai berdasarkan id
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}