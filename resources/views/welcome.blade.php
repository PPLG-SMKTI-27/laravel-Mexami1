<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1a001f, #2d0036, #3b0066);
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background-color: rgba(0,0,0,0.7) !important;
            backdrop-filter: blur(5px);
        }

        .navbar-brand {
            color: #c084fc !important;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(
                        rgba(45, 0, 54, 0.75),
                        rgba(26, 0, 31, 0.75)
                    ),
                    url('https://cdn.oneesports.gg/cdn-data/2022/06/Valorant_Prelude_To_Chaos.webp')
                    center/cover no-repeat;
        }

        .hero h1 {
            color: #d8b4fe;
        }

        .btn-purple {
            background: linear-gradient(45deg, #7e22ce, #a855f7);
            border: none;
            color: white;
        }

        .btn-purple:hover {
            opacity: 0.9;
        }

        .btn-outline-purple {
            border: 1px solid #c084fc;
            color: #c084fc;
        }

        .btn-outline-purple:hover {
            background-color: #c084fc;
            color: black;
        }

        .hero img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 0 35px rgba(192,132,252,0.7);
        }

        footer {
            background: #140018;
            color: #c084fc;
            padding: 15px;
            text-align: center;
            border-top: 1px solid #7e22ce;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            {{ config('app.name', 'Laravel App') }}
        </a>

        <div>
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-purple">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-purple me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-purple">Sign Up</a>
            @endauth
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-6">
                <h1 class="display-4 fw-bold">Welcome</h1>
                <p class="lead">
                    A modern black and purple themed website with a brighter and elegant design.
                </p>

                <div class="mt-4">
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-purple btn-lg me-2">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-purple btn-lg">Sign Up</a>
                    @endguest

                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-purple btn-lg">Go to Dashboard</a>
                    @endauth
                </div>
            </div>

            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img src="https://i.pinimg.com/736x/52/03/98/52039844539185b4f741f6964e95a9aa.jpg"
                     alt="Coding Image">
            </div>

        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
