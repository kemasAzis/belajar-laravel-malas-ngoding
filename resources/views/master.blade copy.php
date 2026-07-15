<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>
<body>
    <header>
        <h2>Blog malasngoding</h2>
        <nav>
            <ul>
                <li><a href="/blog">Home</a></li>
                <li><a href="/blog/tentang">Tentang</a></li>
                <li><a href="/blog/kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <br>
    <br>

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>

    <!-- bagian konten blog -->
    @yield('konten')

    <br>
    <br>
    <hr>

    <footer>
        <p>copyright &copy; 2020 | <a href="https://www.malasngoding.com">www.malasngoding.com</a></p>
    </footer>
</body>
</html>