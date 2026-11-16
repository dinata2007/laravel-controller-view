<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Aprildinata</title>

    <!-- Memanggil CSS Bootstrap 5 via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <!-- Memanggil Bootstrap Icons via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <!-- Memanggil Custom CSS Buatan Sendiri -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-telkom fixed-top transition-navbar" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="bi bi-mortarboard-fill me-2"></i>Aprildinata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Saya</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Proyek</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-center">
        <div class="container">
            <!-- FOTO PROFIL BUNDAR (Memanggil foto dari folder images) -->
            <img src="{{ Vite::asset('resources/images/profil_dinata.png') }}" alt="Foto Aprildinata" class="profile-img shadow-lg mb-4">

            <h1 class="display-4 fw-bold text-telkom">Halo, Saya Aprildinata</h1>
            <p class="lead text-muted">Mahasiswa Sistem Informasi | Telkom University Surabaya</p>

            <!-- Tombol Sosial Media & Kontak -->
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="https://github.com/dinata2007" target="_blank" class="btn btn-outline-dark"><i class="bi bi-github me-2"></i>GitHub</a>
                <a href="https://www.linkedin.com/in/aprildinata/" target="_blank" class="btn btn-linkedin"><i class="bi bi-linkedin me-2"></i>LinkedIn</a>
                <a href="mailto:aprildinataa@student.telkomuniversity.ac.id" class="btn btn-telkom"><i class="bi bi-envelope-fill me-2"></i>Email</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 border-start border-5 border-telkom ps-4">
                    <h2 class="fw-bold text-telkom mb-3">Tentang Saya</h2>
                    <p>Saya adalah mahasiswa Sistem Informasi dengan ketertarikan mendalam pada pengembangan antarmuka web. Memiliki semangat tinggi dalam membangun aplikasi yang responsif, modern, dan ramah pengguna dengan memanfaatkan framework modern seperti Bootstrap.</p>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <h4 class="mb-3"><i class="bi bi-lightning-charge-fill text-telkom"></i> Keahlian Dasar</h4>
                    <span class="badge bg-telkom fs-6 me-2 mb-2">HTML5 & CSS3</span>
                    <span class="badge bg-telkom fs-6 me-2 mb-2">Bootstrap 5</span>
                    <span class="badge bg-telkom fs-6 me-2 mb-2">JavaScript Dasar</span>
                    <span class="badge bg-dark fs-6 me-2 mb-2">Git & GitHub</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5 bg-light-red">
        <div class="container">
            <h2 class="text-center fw-bold text-telkom mb-5">Proyek Portofolio</h2>
            <div class="row g-4">
                <!-- Card Proyek 1 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 project-card">
                        <div class="card-body text-center mt-3">
                            <i class="bi bi-browser-chrome display-4 text-telkom mb-3"></i>
                            <h5 class="card-title fw-bold">Clone Web Bootstrap</h5>
                            <p class="card-text text-muted">Membangun tampilan replika halaman utama dokumentasi Bootstrap secara presisi dan responsif.</p>
                        </div>
                    </div>
                </div>
                <!-- Card Proyek 2 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 project-card">
                        <div class="card-body text-center mt-3">
                            <i class="bi bi-ui-checks-grid display-4 text-telkom mb-3"></i>
                            <h5 class="card-title fw-bold">Form Registrasi Web</h5>
                            <p class="card-text text-muted">Mendesain formulir registrasi interaktif menggunakan komponen form bawaan dari Bootstrap.</p>
                        </div>
                    </div>
                </div>
                <!-- Card Proyek 3 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 project-card">
                        <div class="card-body text-center mt-3">
                            <i class="bi bi-github display-4 text-telkom mb-3"></i>
                            <h5 class="card-title fw-bold">Kolaborasi Tim Git</h5>
                            <p class="card-text text-muted">Simulasi pengerjaan proyek berkelompok menggunakan sistem Git Branching dan Pull Request.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-telkom text-white text-center py-4">
        <div class="container">
            <p class="mb-0 opacity-75">&copy; 2026 Aprildinata. Proudly Telkom University Student.</p>
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Memanggil Custom JS -->
    <script src="script.js"></script>
</body>
</html>
