/* Variabel Warna Merah Telkom University */
:root {
    --telkom-red: #c21a22;      
    --telkom-dark: #8b1117;     
    --telkom-light: #fdf5f5;    
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    scroll-behavior: smooth;
}

/* Kustomisasi Utilitas Warna Bootstrap */
.bg-telkom { background-color: var(--telkom-red) !important; }
.text-telkom { color: var(--telkom-red) !important; }
.bg-light-red { background-color: var(--telkom-light) !important; }
.border-telkom { border-color: var(--telkom-red) !important; }

/* Kustomisasi Tombol */
.btn-telkom {
    background-color: var(--telkom-red);
    color: white;
    border: none;
    transition: all 0.3s ease;
}
.btn-telkom:hover {
    background-color: var(--telkom-dark);
    color: white;
}
.btn-linkedin {
    background-color: #0e76a8;
    color: white;
    border: none;
    transition: all 0.3s ease;
}
.btn-linkedin:hover {
    background-color: #095a82;
    color: white;
}

/* MEMOTONG FOTO MENJADI BUNDAR SEMPURNA */
.profile-img {
    width: 220px;
    height: 220px;
    object-fit: cover;      /* Memaksa gambar mengisi kotak tanpa gepeng */
    border-radius: 50%;     /* Membuat bentuk lingkaran */
    border: 6px solid white;
    outline: 4px solid var(--telkom-red);
}

/* Pengaturan Hero Section */
.hero-section {
    padding: 140px 0 80px 0;
    background: linear-gradient(to bottom, #ffffff, var(--telkom-light));
}

/* Efek Hover pada Kartu Portofolio */
.project-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 20px rgba(194, 26, 34, 0.15) !important;
}

/* Animasi Navbar */
.transition-navbar {
    transition: box-shadow 0.3s ease;
}