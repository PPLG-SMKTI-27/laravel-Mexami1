<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Kevin</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f8fafc;
            color: #1e293b;
        }

        /* HEADER */
        header {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .profile-img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 2.7rem;
            font-weight: 600;
        }

        header p {
            margin-top: 10px;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        section {
            padding: 70px 20px;
            max-width: 1100px;
            margin: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2rem;
            position: relative;
        }

        h2::after {
            content: '';
            width: 60px;
            height: 4px;
            background: #2563eb;
            display: block;
            margin: 10px auto 0;
            border-radius: 5px;
        }

        /* ABOUT */
        .about p {
            text-align: center;
            max-width: 750px;
            margin: auto;
            line-height: 1.8;
            color: #475569;
        }

        /* GRID */
        .skills, .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #1e40af;
        }

        .card p {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.6;
        }

        /* CONTACT */
        .contact {
            text-align: center;
        }

        .contact a {
            display: inline-block;
            margin: 10px;
            text-decoration: none;
            color: white;
            background: linear-gradient(135deg, #2563eb, #1e40af);
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 0.95rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .contact a:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.25);
        }

        footer {
            background: #0f172a;
            color: #cbd5f5;
            text-align: center;
            padding: 20px;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <img src="images/Fattah.jpeg" alt="Foto Profil" class="profile-img">
        <h1>Kevin Wahyu</h1>
        <p>Web Developer • UI/UX Designer • Freelancer</p>
    </header>

    <!-- ABOUT -->
    <section class="about">
        <h2>Tentang Saya</h2>
        <p>
            Saya adalah seorang web developer yang berfokus pada pembuatan website modern,
            responsif, dan user-friendly. Saya senang membangun tampilan yang bersih,
            cepat, dan profesional.
        </p>
    </section>

    <!-- SKILLS -->
    <section>
        <h2>Keahlian</h2>
        <div class="skills">
            <div class="card">
                <h3>HTML</h3>
                <p>Membangun struktur website yang rapi dan SEO-friendly.</p>
            </div>
            <div class="card">
                <h3>CSS</h3>
                <p>Desain modern, responsif, Flexbox & Grid.</p>
            </div>
            <div class="card">
                <h3>JavaScript</h3>
                <p>Interaksi dinamis dan logika aplikasi web.</p>
            </div>
        </div>
    </section>

    <!-- PROJECT -->
    <section>
        <h2>Proyek</h2>
        <div class="projects">
            <div class="card">
                <h3>Company Profile</h3>
                <p>Website profesional untuk bisnis.</p>
            </div>
            <div class="card">
                <h3>Landing Page</h3>
                <p>Landing page modern dengan performa cepat.</p>
            </div>
            <div class="card">
                <h3>Website Portofolio</h3>
                <p>Website personal untuk menampilkan skill dan karya.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact">
        <h2>Kontak</h2>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mexami112@gmail.com" target="_blank">Email</a>
        <a href="https://github.com/Mexami1" target="_blank" class="contact-btn">GitHub</a>
        <a href="https://www.linkedin.com/in/jenhsunhuang" target="_blank" class="contact-btn">LinkedIn</a>
    </sectin>

    <footer>
        © 2026 Bloxstrap • All Rights Reserved
    </footer>

</body>
</html>
