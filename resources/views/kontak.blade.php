<!-- menghubungkan ke template master -->
@extends('master')

<!-- bagian judul halaman -->
@section('judul_halaman', 'Halaman Kontak')

<!-- isi bagian konten blog -->
@section('konten')
    <p>Ini adalah halaman kontak.</p>
    <p>Anda dapat menghubungi kami melalui informasi di bawah ini:</p>
    <ul>
        <li>Email: info@malasngoding.com</li>
        <li>Telepon: 081234567890</li>
    </ul>
@endsection