<!DOCTYPE html>
<html>

<head>
    <title>Lokasi Rumah Sakit Elit Singapura - JIENCIO CENTER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
    body {
        background-color: #f8f9fa;
        color: #333;
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

    /* Style untuk halaman location.php */
    .location-content {
        padding: 50px;
        text-align: left;
    }

    .location-details {
        margin-bottom: 20px;
    }

    .location-image {
        float: right;
        margin-left: 20px;
        max-width: 400px;
    }

    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px 0;
        width: 100%;
        position: fixed;
        bottom: 0;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="home.php">JIENCIO CENTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="location.php">Cek Lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <!-- Tambahkan menu lain sesuai kebutuhan -->
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">

            <h1 class="display-4"><img src="logo.jpg" alt="Logo Jiencio" class="logo">LOKASI JIENCIO UNIVERSITY HOSPITAL
            </h1>
            <p class="lead">
                Rumah Sakit Elit Singapura berlokasi di alamat berikut:
            </p>
            <div class="location-content">
                <img src="fotors.jpg" alt="Lokasi Rumah Sakit" class="location-image">
                <div class="location-details">
                    <h4>Alamat:</h4>
                    <p>Rose Street No. 10, Singapura</p>
                </div>
                <div class="location-details">
                    <h4>Jam Operasional:</h4>
                    <p>Senin - Jumat: 08.00 - 17.00</p>
                    <p>Sabtu: 08.00 - 12.00</p>
                    <p>Minggu: Tutup</p>
                </div><br>
                <div class="location-details">
                    <h4>Kontak:</h4>
                    <p>Telepon: +62 123 456 789</p>
                    <p>Email: info@rumahsakitelitsingapura.com</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-T7H825K8TOZ8hZOGkG/lz9700KVaT6MZfJgwCqBn0BwKx0c+gdrjQ79qjk7o7Fqf" crossorigin="anonymous">
    </script>
</body>

</html>