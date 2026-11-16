// Menambahkan efek bayangan pada Navbar ketika layar di-scroll
document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {
        const navbar = document.getElementById("mainNavbar");
        
        // Jika layar di-scroll lebih dari 50 pixel ke bawah
        if (window.scrollY > 50) {
            navbar.style.boxShadow = "0 4px 10px rgba(0, 0, 0, 0.3)";
        } else {
            navbar.style.boxShadow = "none"; // Hilangkan bayangan jika di posisi teratas
        }
    });
});