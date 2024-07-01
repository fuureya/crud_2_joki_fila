<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
    body {
        background-image: url('gambarbg.jpg');
        /* Ganti 'gambar.jpg' dengan nama file gambar yang sesuai */
        background-size: cover;
        background-position: center;
        color: black;
        /* Warna teks untuk kontras dengan latar belakang */
        margin-bottom: 60px;
        /* Menambahkan margin bawah agar footer tidak menutupi konten */
    }

    .logo {
        height: 1.2em;
        /* Set tinggi gambar sama dengan tinggi teks */
        margin-right: 10px;
        /* Memberi jarak antara gambar dengan teks */
    }

    footer.footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px 0;
    }

    .content {
        padding-top: 50px;
    }

    .card {
        margin-bottom: 20px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="logo.jpg" alt="Logo Jiencio" class="logo"> JIENCIO CENTER
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto" id="navbarNav">
            <!-- Menggunakan class mr-auto di sini -->
            <ul class="navbar-nav">
                <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/home.php') echo 'active'; ?>">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li
                    class="nav-item dropdown <?php if ($_SERVER['PHP_SELF'] == '/daftar_pasien.php' || $_SERVER['PHP_SELF'] == '/daftar_dokter.php' || $_SERVER['PHP_SELF'] == '/daftar_kamar.php' || $_SERVER['PHP_SELF'] == '/daftar_obat.php') echo 'active'; ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu" id="dropdownMenu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="indexpasien.php">Daftar Pasien</a>
                        <a class="dropdown-item" href="indexdokter.php">Daftar Dokter</a>
                        <a class="dropdown-item" href="indexkamar.php">Daftar Kamar</a>
                        <a class="dropdown-item" href="indexobat.php">Daftar Obat</a>
                        <a class="dropdown-item" href="indexstaff.php">Daftar staff medis</a>
                        <a class="dropdown-item" href="indexstrukturorganisasi.php">Daftar struktur organisasi</a>
                        <a class="dropdown-item" href="indexperalatan.php">Daftar peralatan</a>
                        <!-- Tambahkan opsi menu lain sesuai kebutuhan -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container content">
        <h2 class="text-center mb-4">DAFTAR MENU JIENCIO UNIVERSITY HOSPITAL</h2>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Informasi Rumah Sakit</h3>
                <p class="card-text">Jiencio University Hospital merupakan rumah sakit yang berkomitmen untuk memberikan
                    layanan kesehatan terbaik kepada pasien. Kami menyediakan berbagai fasilitas dan layanan seperti:
                </p>
                <ul>
                    <li>Pendaftaran Pasien</li>
                    <li>Pemeriksaan oleh Dokter</li>
                    <li>Informasi Kamar</li>
                    <li>Daftar Obat</li>
                    <li>Dan banyak layanan lainnya</li>
                </ul>
                <p class="card-text">Silakan jelajahi menu di atas untuk informasi lebih lanjut tentang layanan yang
                    kami sediakan.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>&copy; 2023 Jiencio University Hospital</span>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-7MqLs7YBj2BywBzktZ4L/y6vPTuod2upy8v6+WBkPYj5fjt/J5c/HJAVFCjtvJ0+" crossorigin="anonymous">
    </script>
    <script>
    // Menampilkan dropdown saat mouse masuk
    $('.dropdown').on('mouseover', function() {
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
    });

    // Menyembunyikan dropdown saat mouse meninggalkan area dropdown
    $('.dropdown-menu').on('mouseleave', function() {
        $(this).removeClass('show');
        $(this).closest('.dropdown').removeClass('show');
    });

    // Menyembunyikan dropdown saat kursor berada di luar dropdown
    $('.navbar').on('mouseleave', function() {
        $('.dropdown-menu').removeClass('show');
        $('.dropdown').removeClass('show');
    });
    </script>

</body>

</html>