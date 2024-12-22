<style>
        .navbar-brand img {
            height: 30px;
        }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img alt="Go Laptop Logo" src="foto\Frame 9.png" width="150" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php
                // Ambil URL saat ini
                $current_page = basename($_SERVER['REQUEST_URI'], ".php");

                // Tambahkan kelas 'active' berdasarkan URL
                ?>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'home') ? 'active' : ''; ?>" href="home.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'solusi') ? 'active' : ''; ?>" href="solusi.php">Solusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'katalog') ? 'active' : ''; ?>" href="katalog.php">Katalog Sewa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'promo') ? 'active' : ''; ?>" href="promo.php">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'tentang') ? 'active' : ''; ?>" href="tentang.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'user') ? 'active' : ''; ?>" href="user.php"><i class="fas fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

