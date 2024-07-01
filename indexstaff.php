<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Informasi Staff</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
    /* Gaya CSS */
    body {
        background-image: url('gambarbg.jpg');
        background-size: cover;
        background-position: center;
        color: black;
    }

    .logo {
        height: 1.2em;
        margin-right: 30px;
    }

    .navbar-nav .nav-item .nav-link {
        color: #fff;
    }

    .navbar-nav .nav-item .nav-link.active,
    .navbar-nav .nav-item .nav-link:hover {
        color: #fff;
    }

    .table-custom {
        margin-top: 20px;
    }

    .table-custom th {
        background-color: #007bff;
        color: #fff;
    }

    .table-custom th,
    .table-custom td {
        text-align: center;
        vertical-align: middle;
    }

    .table-custom a {
        margin-right: 5px;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #f8f9fa;
        text-align: center;
        padding: 10px 0;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">JIENCIO CENTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/home.php') echo 'active'; ?>">
                    <a class="nav-link" href="home.php">Home</a>
                </li>

                <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/indexutama.php') echo 'active'; ?>">
                    <a class="nav-link" href="indexutama.php">Main Menu</a>
                </li>

                <!-- Tambahkan menu lain sesuai kebutuhan -->

                <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/indexstaff.php') echo 'active'; ?>">
                    <a class="nav-link" href="indexstaff.php">Staff Menu</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container">
        <br>
        <h2 class="text-center"><img src="logo.jpg" alt="Logo Jiencio" class="logo"> INFORMASI STAFF JIENCIO UNIVERSITY
            HOSPITAL</h2>
        <hr>

        <!-- Grid untuk konten informasi staff -->
        <div class="row">
            <!-- Informasi Staff 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Informasi Staff
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama: John Doe Clopper</h5>
                        <p class="card-text">Jabatan: Staff Medis</p>
                        <p class="card-text">Spesialisasi: Kardiologi</p>
                        <p class="card-text">Jadwal Praktek: Senin - Jumat, 08:00 - 16:00</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Informasi Staff 1 -->

            <!-- Informasi Staff 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Informasi Staff
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama: John Liem Hang</h5>
                        <p class="card-text">Jabatan: Dokter Umum</p>
                        <p class="card-text">Spesialisasi: Penyakit Dalam</p>
                        <p class="card-text">Jadwal Praktek: Senin - Jumat, 08:00 - 16:00</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Informasi Staff 2 -->

            <!-- Informasi Staff 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Informasi Staff
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama: Sarah Johnson</h5>
                        <p class="card-text">Jabatan: Ahli Gizi</p>
                        <p class="card-text">Spesialisasi: Diet Sehat</p>
                        <p class="card-text">Jadwal Praktek: Selasa - Kamis, 10:00 - 18:00</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Informasi Staff 3 -->

            <!-- Informasi Staff 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Informasi Staff
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama: Michael Brown</h5>
                        <p class="card-text">Jabatan: Dokter Gigi</p>
                        <p class="card-text">Spesialisasi: Ortodonti</p>
                        <p class="card-text">Jadwal Praktek: Rabu - Sabtu, 11:00 - 19:00</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Informasi Staff 4 -->

            <!-- Informasi Staff 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Informasi Staff
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama: Emily Wilson</h5>
                        <p class="card-text">Jabatan: Perawat</p>
                        <p class="card-text">Spesialisasi: Perawatan Lansia</p>
                        <p class="card-text">Jadwal Praktek: Senin - Jumat, 07:00 - 15:00</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Informasi Staff 5 -->

            <!-- Informasi Staff 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Informasi Staff
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama: David Krinton Lee</h5>
                        <p class="card-text">Jabatan: Farmasis</p>
                        <p class="card-text">Spesialisasi: Obat-obatan Generik</p>
                        <p class="card-text">Jadwal Praktek: Senin - Sabtu, 09:00 - 17:00</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Informasi Staff 6 -->

            <!-- Informasi Staff 7 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Informasi Staff
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama: Olivia Garcia</h5>
                        <p class="card-text">Jabatan: Psikolog Klinis</p>
                        <p class="card-text">Spesialisasi: Terapi Mental</p>
                        <p class="card-text">Jadwal Praktek: Selasa - Jumat, 12:00 - 20:00</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Informasi Staff 7 -->
        </div>
        <!-- Akhir grid konten informasi staff -->
    </div>
    <!-- Akhir konten informasi staff -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>

</body>

</html>