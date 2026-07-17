<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata</h1>
    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Bahasa pemrograman dikuasai :</p>
    <ul>
        @foreach($skil as $s)
            <li>{{ $s }}</li>
        @endforeach
    </ul>
</body>
</html>