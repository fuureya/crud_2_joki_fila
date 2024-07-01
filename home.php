<!DOCTYPE html>
<html>

<head>
    <title>Rumah Sakit Elit Singapura - JIENCIO CENTER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
    body {
        background-color: #f8f9fa;
        color: #333;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin-bottom: -100px;
    }

    .logo {
        height: 1.2em;
        /* Set tinggi gambar sama dengan tinggi teks */
        margin-right: 30px;
        /* Memberi jarak antara gambar dengan teks */
    }

    .navbar {
        background-color: #343a40 !important;
    }

    .jumbotron {
        background: linear-gradient(to bottom right, #4e73df, #224abe, #67a566);
        color: #fff;
        text-align: center;
        padding: 100px 25px;
        margin-bottom: 0;
    }



    .jumbotron h1 {
        font-size: 3.5rem;
    }

    .jumbotron p {
        font-size: 1.2rem;
    }

    .lead {
        color: #fff;
    }

    /* Additional styling for better readability */
    .content {
        padding: 50px;
        text-align: justify;
        flex: 1;
    }

    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px 0;
        width: 100%;
    }

    /* New styles for the list items */
    .services-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: center;
    }

    .services-list li {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: calc(50% - 10px);
        background-color: #343a40;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .services-list h3 {
        margin-bottom: 10px;
    }

    .services-list img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="home.php">JIENCIO CENTER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="location.php">Cek lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Rumah Sakit Elit Singapura</h1>
            <h1>
                <!-- Gambar akan muncul di sebelah kiri teks -->
                <img src="logo.jpg" alt="Logo Jiencio" class="logo">JIENCIO UNIVERSITY HOSPITAL
            </h1>
            <br><br><br>
            <p class="lead">
                Rumah Sakit Elit Singapura adalah salah satu rumah sakit terkemuka di Asia dengan pelayanan kesehatan
                terbaik. Kelebihan dari rumah sakit ini antara lain:
            </p>
            <ul class="services-list">
                <li>
                    <img src="fasilitas.jpg" alt="Peralatan Medis">
                    <h3>Peralatan Medis Canggih dan Modern</h3>
                    <p>Deskripsi tentang peralatan medis yang canggih dan modern yang kami sediakan.</p>
                </li>
                <li>
                    <img src="pelayanan.jpg" alt="Tenaga Medis">
                    <h3>Tenaga Medis Berpengalaman</h3>
                    <p>Deskripsi tentang tenaga medis berpengalaman dan terlatih dengan baik yang kami miliki.</p>
                </li>
                <li>
                    <img src="perawat.jpg" alt="Spesialisasi Medis">
                    <h3>Spesialisasi Medis dan Pelayanan Terpadu</h3>
                    <p>Deskripsi tentang pelayanan terpadu dan berbagai spesialisasi medis.</p>
                </li>
                <li>
                    <img src="tenagamedis.jpg" alt="Perawatan Pasien">
                    <h3>Perawatan Pasien yang Ramah dan Berkualitas</h3>
                    <p>Deskripsi tentang perawatan pasien yang ramah dan berkualitas.</p>
                </li>

            </ul><br><br>
            <a href="login_copy.php" class="btn btn-primary btn-lg mt-3">Login</a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <h2>About</h2>
            <p>
                Rumah Sakit Elit Singapura adalah pusat kesehatan unggulan yang menyediakan layanan terbaik dengan
                mengutamakan kebutuhan pasien. Dengan lebih dari 20 tahun pengalaman, kami berkomitmen untuk memberikan
                perawatan kesehatan yang berkualitas dan inovatif bagi setiap pasien.
            </p>
            <p>
                Kami juga aktif dalam program penelitian dan pengembangan terkini untuk memastikan pelayanan yang
                terdepan dalam bidang medis. Dukungan dari tim medis dan staf terlatih kami membuat pasien merasa nyaman
                dan terjamin selama perawatan di rumah sakit kami.
            </p>
            <p>
                Jangan ragu untuk memberikan saran atau masukan. Hubungi kami melalui informasi kontak yang tertera
                di bawah.
            </p>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-jv0J+jw/Ys0RS+ndu7Qpi62tcQzcLvCk+7RrYHQ4Wo5I2a5l4Df+tq2h6i/LM6U6" crossorigin="anonymous">
    </script>
</body>

</html>