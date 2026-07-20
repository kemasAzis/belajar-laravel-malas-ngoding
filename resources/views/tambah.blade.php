<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar crud laravel</title>
</head>
<body>
    <h2>Belajar CRUD Laravel</h2>
    <h3>Tambah Data Pegawai</h3>

    <a href="/pegawai">Kembali</a>

    <br/>
    <br/>
        
    <form action="/pegawai/store" method="POST">
        {{ csrf_field() }}
        <p> nama  :  <input type="text" name="nama" required="required"></p>
        <p>jabatan  :  <input type="text" name="jabatan" required="required"></p>
        <p>umur  :  <input type="number" name="umur" required="required"></p>
        <p>alamat  :  <textarea name="alamat" required="required"></textarea></p>
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>