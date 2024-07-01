<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Struktur Organisasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
    /* Gaya CSS */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .navbar-nav .nav-item .nav-link {
        color: #fff;
    }

    .navbar-nav .nav-item .nav-link.active,
    .navbar-nav .nav-item .nav-link:hover {
        color: #fff;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px 0;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .description {
        text-align: center;
    }
    </style>
</head>

<body>
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
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>Struktur Organisasi JIENCIO CENTER</h2>
        <hr>

        <!-- Gambar Struktur Organisasi -->
        <div class="text-center">
            <img src="st.png" alt="Struktur Organisasi" width="80%">
        </div>
        <!-- Akhir Gambar Struktur Organisasi -->

        <!-- Deskripsi Struktur Organisasi (Opsional) -->
        <div class="description">
            <h3>Deskripsi Struktur Organisasi</h3>
            <p>Struktur organisasi kami menampilkan bagaimana departemen dan unit kami terorganisir untuk memberikan
                layanan terbaik kepada pasien dan staf kami.</p>
        </div>
        <!-- Akhir Deskripsi Struktur Organisasi -->

    </div>

    <!-- JavaScript scripts -->
    <!-- Jika ada skrip JavaScript yang diperlukan, masukkan di sini -->

</body>

</html>