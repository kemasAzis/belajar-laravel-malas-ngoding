<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h2>Blog Kemas Azis</h2>
        <nav>
            <ul>
                <li><a href="/blog">Home</a></li>
                <li><a href="/blog/tentang">Tentang</a></li>
                <li><a href="/blog/kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h3>@yield('judul_halaman')</h3>

        @yield('konten')
    </div>

    <footer>
        <p>Copyright &copy; 2026 | <a href="https://www.malasngoding.com">www.malasngoding.com</a></p>
    </footer>
</body>
</html>