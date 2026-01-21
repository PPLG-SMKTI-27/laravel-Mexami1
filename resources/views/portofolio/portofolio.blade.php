@extends('layouts.main')

@section('title', 'Happy Holiday')

@section('content')

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Halo, Saya <span>Kevin</span></h1>
        <p>Web Developer | Laravel Enthusiast</p>
        <a href="#contact" class="btn">Hire Me?</a>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="section">
    <div class="container">
        <h2>About Me</h2>
        <p>
            Saya adalah web developer yang fokus menggunakan Laravel untuk
            membangun aplikasi web modern, cepat, dan aman.
        </p>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="section gray">
    <div class="container">
        <h2>Skills</h2>
        <div class="skills">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>Laravel</span>
            <span>MySQL</span>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="section">
    <div class="container">
        <h2>Projects</h2>
        <div class="projects">
            <div class="card">
                <h3>Project 1</h3>
                <p>Aplikasi CRUD Laravel</p>
            </div>
            <div class="card">
                <h3>Project 2</h3>
                <p>Website Company Profile</p>
            </div>
            <div class="card">
                <h3>Project 3</h3>
                <p>Sistem Login & Register</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section gray">
    <div class="container">
        <h2>Contact</h2>
        <form>
            <input type="text" placeholder="Nama">
            <input type="email" placeholder="Email">
            <textarea placeholder="Pesan"></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>
</section>

@endsection