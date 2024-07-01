<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Tambah Kamar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
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

    .form-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
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
        <br>
        <h2>
            <center><img src="logo.jpg" alt="Logo Jiencio" class="logo">Tambah Kamar Jiencio University Hospital
            </center>
        </h2>
        <div class="form-container">
            <form action="createkamar.php" method="post">
                <div class="form-group">
                    <label for="nama_kamar">Nama Kamar:</label>
                    <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" required>
                </div>
                <div class="form-group">
                    <label for="tipe_kamar">Tipe Kamar:</label>
                    <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" required>
                </div>
                <div class="form-group">
                    <label for="kapasitas">Kapasitas:</label>
                    <input type="number" class="form-control" id="kapasitas" name="kapasitas" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="indexkamar.php" class="btn btn-secondary">Kembali</a>
            </form>

            <?php
            include "koneksi.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama_kamar = htmlspecialchars($_POST["nama_kamar"]);
                $tipe_kamar = htmlspecialchars($_POST["tipe_kamar"]);
                $kapasitas = htmlspecialchars($_POST["kapasitas"]);
                $harga = htmlspecialchars($_POST["harga"]);

                $sql = "INSERT INTO kamar (nama_kamar, tipe_kamar, kapasitas, harga) VALUES ('$nama_kamar', '$tipe_kamar', '$kapasitas', '$harga')";

                if (mysqli_query($kon, $sql)) {
                    echo "<div class='alert alert-success'>Data kamar berhasil ditambahkan.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . mysqli_error($kon) . "</div>";
                }

                mysqli_close($kon);
            }
            ?>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>
</body>

</html>