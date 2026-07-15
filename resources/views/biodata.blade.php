<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial laravel #4</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            /* text-align: center; */
        }   

        div {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <div>
        <h1>ini adalah halaman biodata calon dosen</h1>
        <p>Nama : {{ $nama }}</p>
        <p>Nim : {{ $nim }}</p>
        <p>Umur : {{ $umur }} tahun</p>
        <p>Alamat : {{ $alamat }}</p>

        <h2>Mata Kuliah yang diampu</h2>
        <ul>
            @foreach ($matkul as $sub)
                <li>{{ $sub }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>     