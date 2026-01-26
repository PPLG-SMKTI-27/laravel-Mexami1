<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS Global -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- CSS Login -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
            <li><a href="/login" style="font-weight: bold; color: #009999;">Login</a></li>
        </ul>
    </div>
</nav>

<div class="main-content">
    @yield('content')
</div>

<footer class="footer">
    <p>© {{ date('Y') }} Bloxstrap. All Rights Reserved.</p>
</footer>

</body>
</html>
