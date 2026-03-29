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


<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            {{ config('app.name', 'Laravel App') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu Tengah -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>

            <!-- Auth Button -->
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-purple">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-purple me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-purple">Sign Up</a>
                @endauth
            </div>
        </div>
    </div>
</nav>


<div class="main-content">
    @yield('content')
</div>

<footer>
    © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
</footer>

</body>
</html>
