<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar crud laravel</title>
</head>
<body>
    <h2>Belajar CRUD Laravel</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah">+ Tambah Pegawai</a>

    <br>
    <br>
    
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($pegawai as $data)
        <tr>
            <td>{{ $data->pegawai_id }}</td>
            <td>{{ $data->pegawai_nama }}</td>
            <td>{{ $data->pegawai_jabatan }}</td>
            <td>{{ $data->pegawai_umur }}</td>
            <td>{{ $data->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $data->pegawai_id }}">Edit</a> |
                <a href="/pegawai/hapus/{{ $data->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>