<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menangkap Data Dari Inputan</title>
</head>
<body>
    <form action="/formulir/proses" method="POST">
        <!-- <input type="hidden" name="_token" value=" {{ csrf_token() }} "> -->
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?> ">

        nama : <input type="text" name="nama" placeholder="Nama">
        <br>
        alamat : <input type="text" name="alamat" placeholder="Alamat">
        <br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>