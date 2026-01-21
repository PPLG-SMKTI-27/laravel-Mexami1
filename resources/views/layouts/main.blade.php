<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <h2 class="logo">Bloxstrap</h2>
            <ul class="menu">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <p>© {{ date('Y') }} Bloxstrap. All Rights Reserved.</p>
    </footer>

</body>
</html>
