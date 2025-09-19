<?php
// Memuat data dari database
require_once __DIR__ . '/../data/database.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($db['profile']['name']) ?> | Portofolio</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="hero">
        <div class="container">
            <img src="<?= htmlspecialchars($db['profile']['avatar']) ?>" alt="Foto Profil" class="avatar">
            <h1 class="hero-title"><?= htmlspecialchars($db['profile']['name']) ?></h1>
            <p class="hero-subtitle"><?= htmlspecialchars($db['profile']['title']) ?></p>
            <p class="hero-bio"><?= htmlspecialchars($db['profile']['bio']) ?></p>
            <div class="social-links">
                <?php foreach ($db['socials'] as $name => $link): ?>
                    <a href="<?= htmlspecialchars($link) ?>" target="_blank"><?= ucfirst($name) ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </header>

    <main>
        <section id="skills" class="container section">
            <h2 class="section-title">Keahlian</h2>
            <div class="skills-grid">
                <?php foreach ($db['skills'] as $skill): ?>
                    <div class="skill-item"><?= htmlspecialchars($skill) ?></div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="projects" class="container section">
            <h2 class="section-title">Proyek</h2>
            <div class="project-grid">
                <?php foreach ($db['projects'] as $project): ?>
                <div class="project-card">
                    <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>">
                    <div class="project-info">
                        <h3><?= htmlspecialchars($project['title']) ?></h3>
                        <p><?= htmlspecialchars($project['description']) ?></p>
                        <a href="<?= htmlspecialchars($project['link']) ?>" class="btn-project" target="_blank">Lihat Proyek</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="container section">
            <h2 class="section-title">Hubungi Saya</h2>
            <p>Tertarik untuk bekerja sama? Silakan hubungi saya melalui:</p>
            <p class="contact-info">
                Email: <a href="mailto:<?= htmlspecialchars($db['contact']['email']) ?>"><?= htmlspecialchars($db['contact']['email']) ?></a>
            </p>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($db['profile']['name']) ?>. Dibuat dengan ❤️</p>
    </footer>
    
    <script src="/script.js"></script>
</body>
</html>