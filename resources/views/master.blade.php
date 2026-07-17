<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Laravel</title>
</head>
<body>

    <!-- Header -->
    <header>
        <h2>Blog Saya</h2>

        <nav>
            <a href="/blog">Home</a> |
            <a href="/blog/tentang">Tentang</a> |
            <a href="/blog/kontak">Kontak</a>
        </nav>

        <hr>
    </header>

    <!-- Judul Halaman -->
    <h3>@yield('judul_halaman')</h3>

    <!-- Isi Halaman -->
    @yield('konten')

    <hr>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Blog Saya</p>
    </footer>

</body>
</html>