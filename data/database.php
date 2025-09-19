<?php

// File ini berfungsi sebagai database sederhana untuk portofolio Anda.
// Cukup edit data di bawah ini untuk mengubah konten website.

$db = [
    // Informasi Profil Utama
    "profile" => [
        "name" => "Nama Anda",
        "title" => "Web Developer | UI/UX Designer",
        "bio" => "Saya adalah seorang web developer dengan semangat tinggi untuk menciptakan aplikasi web yang fungsional, modern, dan intuitif. Selamat datang di portofolio saya!",
        "avatar" => "https://i.pravatar.cc/150?img=32" // Ganti dengan URL foto Anda
    ],

    // Tautan Media Sosial
    "socials" => [
        "github" => "https://github.com/username",
        "linkedin" => "https://linkedin.com/in/username",
        "twitter" => "https://twitter.com/username"
    ],

    // Daftar Keahlian (Skills)
    "skills" => [
        "PHP", "JavaScript", "React", "Node.js", "CSS3", "HTML5", "MySQL", "Figma"
    ],

    // Daftar Proyek
    "projects" => [
        [
            "title" => "Sistem Manajemen Proyek",
            "description" => "Aplikasi web untuk mengelola tugas dan proyek tim secara kolaboratif. Dibangun dengan PHP dan JavaScript.",
            "image" => "https://via.placeholder.com/400x250/1a1a2e/9c27b0?text=Proyek+1", // Ganti dengan screenshot proyek Anda
            "link" => "#" // Tautan ke demo atau repository
        ],
        [
            "title" => "Website E-Commerce",
            "description" => "Platform toko online modern dengan fitur keranjang belanja, pembayaran, dan manajemen produk.",
            "image" => "https://via.placeholder.com/400x250/1a1a2e/3f51b5?text=Proyek+2",
            "link" => "#"
        ],
        [
            "title" => "Landing Page Interaktif",
            "description" => "Landing page untuk produk digital dengan animasi modern yang dibangun menggunakan CSS dan JavaScript.",
            "image" => "https://via.placeholder.com/400x250/1a1a2e/e94560?text=Proyek+3",
            "link" => "#"
        ]
    ],

    // Informasi Kontak
    "contact" => [
        "email" => "email.anda@example.com",
        "phone" => "+62 812 3456 7890"
    ]
];