
@if (session('success'))
    <div style="background:#d4edda; color:#155724; padding:10px; margin-bottom:15px;"> {{ session('success') }} </div>
    @endif @if (session('error'))
        <div style="background:#f8d7da; color:#721c24; padding:10px; margin-bottom:15px;"> {{ session('error') }} </div>
        @endif @extends('layouts.main') @section('title', 'Welcome') @section('content')
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
                    background-color: rgba(0, 0, 0, 0.7) !important;
                    backdrop-filter: blur(5px);
                }

                .navbar-brand {
                    color: #c084fc !important;
                }

                .hero {
                    min-height: 100vh;
                    display: flex;
                    align-items: center;
                    background: linear-gradient(rgba(45, 0, 54, 0.75), rgba(26, 0, 31, 0.75)), url('https://cdn.oneesports.gg/cdn-data/2022/06/Valorant_Prelude_To_Chaos.webp') center/cover no-repeat;
                }

                .hero h1 {
                    color: #c084fc;
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
                    box-shadow: 0 0 35px rgba(192, 132, 252, 0.7);
                }

                footer {
                    background: #140018;
                    color: #c084fc;
                    padding: 15px;
                    text-align: center;
                    border-top: 1px solid #7e22ce;
                }

                .hero h1 span {
                    color: #c084fc;
                }

                .gray {
                    background: linear-gradient(135deg, #1f0029, #2b0038);
                }

                .projects {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                    gap: 30px;
                    margin-top: 40px;
                }

                .projects .card {
                    background: rgba(255, 255, 255, 0.05);
                    border: 1px solid rgba(168, 85, 247, 0.3);
                    backdrop-filter: blur(12px);
                    padding: 30px;
                    border-radius: 18px;
                    color: white;
                    transition: all 0.4s ease;
                    position: relative;
                    overflow: hidden;
                }

                .projects .card h3 {
                    color: #d8b4fe;
                    margin-bottom: 15px;
                }

                .projects .card p {
                    color: #e9d5ff;
                    opacity: 0.9;
                }

                .projects .card:hover {
                    transform: translateY(-10px) scale(1.02);
                    box-shadow: 0 0 30px rgba(168, 85, 247, 0.6);
                    border-color: #a855f7;
                }

                .skills {
                    margin-top: 30px;
                }

                .skills span:hover {
                    transform: translateY(-5px) scale(1.08);
                    box-shadow: 0 0 20px #a855f7, 0 0 40px rgba(168, 85, 247, 0.6);
                    background: linear-gradient(45deg, #a855f7, #00f5ff);
                }

                .skills span {
                    background: rgba(255, 255, 255, 0.08);
                    border: 1px solid rgba(168, 85, 247, 0.4);
                    backdrop-filter: blur(10px);
                    color: #d8b4fe;
                }

                #contact form {
                    max-width: 600px;
                    margin-top: 30px;
                }

                #contact input,
                #contact textarea {
                    width: 100%;
                    padding: 14px 18px;
                    margin-bottom: 20px;
                    border-radius: 12px;
                    border: 1px solid rgba(168, 85, 247, 0.3);
                    background: rgba(255, 255, 255, 0.05);
                    color: white;
                    backdrop-filter: blur(10px);
                    transition: 0.3s ease;
                }

                #contact input::placeholder,
                #contact textarea::placeholder {
                    color: #c084fc;
                    opacity: 0.7;
                }

                #contact input:focus,
                #contact textarea:focus {
                    outline: none;
                    border-color: #a855f7;
                    box-shadow: 0 0 15px rgba(168, 85, 247, 0.6);
                }

                #contact button {
                    padding: 12px 30px;
                    border-radius: 30px;
                    border: none;
                    font-weight: 600;
                    background: linear-gradient(45deg, #7e22ce, #00f5ff);
                    color: white;
                    transition: 0.3s ease;
                }

                #contact button:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 0 20px #00f5ff;
                }

                #contact form {
                    background: rgba(255, 255, 255, 0.05);
                    padding: 40px;
                    border-radius: 20px;
                    border: 1px solid rgba(168, 85, 247, 0.3);
                }

                .contact-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap: 50px;
                    flex-wrap: wrap;
                }

                .contact-form {
                    flex: 1;
                    background: rgba(255, 255, 255, 0.05);
                    padding: 40px;
                    border-radius: 20px;
                    border: 1px solid rgba(168, 85, 247, 0.3);
                    backdrop-filter: blur(12px);
                }

                .contact-image {
                    flex: 1;
                    text-align: center;
                }

                .contact-image img {
                    max-width: 350px;
                    border-radius: 20px;
                    box-shadow: 0 0 40px rgba(168, 85, 247, 0.6);
                    transition: 0.4s ease;
                }

                .contact-image img:hover {
                    transform: scale(1.05);
                }

                @media (max-width: 768px) {
                    .contact-wrapper {
                        flex-direction: column;
                        text-align: center;
                    }
                }
            </style>
        </head>

        <body>
            <section class="hero">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="display-4 fw-bold">Welcome</h1>
                            <p class="lead"> A modern black and purple themed website with a brighter and elegant
                                design. </p>
                            <div class="mt-4"> @guest <a href="{{ route('login') }}"
                                        class="btn btn-purple btn-lg me-2">Login</a> <a href="{{ route('register') }}"
                                        class="btn btn-outline-purple btn-lg">Sign Up</a> @endguest @auth <a
                                        href="{{ url('/dashboard') }}" class="btn btn-purple btn-lg">Go to Dashboard</a>
                                @endauth </div>
                        </div>
                        <div class="col-md-6 text-center mt-4 mt-md-0"> <img
                                src="https://i.pinimg.com/736x/52/03/98/52039844539185b4f741f6964e95a9aa.jpg"
                                alt="Coding Image"> </div>
                    </div>
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html> <!-- HERO -->
        <section class="hero">
            <div class="container">
                <h1>Hello, I'm<span> Kevin</span></h1>
                <p>Ex Ascendant 1 | Ex Platinum 3</p>
            </div>
        </section> <!-- ABOUT -->
        <section id="about" class="section">
            <div class="container">
                <h2>About Me</h2>
                <p> Mainly Focus On Valorant, Marvel Rivals And Coding </p>
            </div>
        </section> <!-- SKILLS -->
        <section id="skills" class="section gray">
            <div class="container">
                <h2>Skills</h2>
                <div class="skills">
                    @foreach ($skills as $skill)
                        <span>{{ $skill->name }}</span>
                        @endforeach
                </div>
            </div>
        </section> <!-- PROJECTS -->
        <section id="projects" class="section">
            <div class="container">
                <h2>Projects</h2>
                <div class="projects">
                    @foreach ($projects as $project)
                        <div class="card">
                            <h3>{{ $project['name'] }}</h3>
                            <p>{{ $project['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> <!-- CONTACT -->
        <section id="contact" class="section gray">
            <div class="container contact-wrapper">
                <div class="contact-form">
                    <h2>Contact</h2>
                    <form> <input type="text" placeholder="Nama"> <input type="email" placeholder="Email">
                        <textarea placeholder="Pesan"></textarea> <button type="submit">Kirim</button>
                    </form>
                </div>
                <div class="contact-image"> <img
                        src="https://i.pinimg.com/736x/58/a3/83/58a383a75d8442af80c5a1e30395b6d7.jpg"
                        alt="Profile Photo"> </div>
            </div>
    </section> @endsection
