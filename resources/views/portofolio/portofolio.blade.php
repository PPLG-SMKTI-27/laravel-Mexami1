

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
        @foreach($skills as $skill)
            <span>{{ $skill }}</span>
        @endforeach
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="section">
    <div class="container">
        <h2>Projects</h2>
        <div class="projects">
            @foreach($projects as $project)
                <div class="card">
                    <h3>{{ $project['name'] }}</h3>
                    <p>{{ $project['description'] }}</p>
                </div>
            @endforeach
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