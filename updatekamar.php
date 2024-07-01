<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Update Kamar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
    body {
        background-image: url('gambarbg.jpg');
        background-size: cover;
        background-position: center;
        color: black;
    }

    .form-container {
        max-width: 600px;
        margin: 0 auto;
        margin-top: 50px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
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
        <div class="form-container">
            <h2>Update Data Kamar</h2>

            <?php
            include "koneksi.php";

            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_kamar"])) {
                $id_kamar = $_GET["id_kamar"];

                $sql = "SELECT * FROM kamar WHERE id_kamar=?";
                $stmt = mysqli_prepare($kon, $sql);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "i", $id_kamar);
                    if (mysqli_stmt_execute($stmt)) {
                        $result = mysqli_stmt_get_result($stmt);
                        $row = mysqli_fetch_assoc($result);

                        if ($row) {
            ?>
            <form method="POST" action="proses_updatekamar.php">
                <input type="hidden" name="id_kamar" value="<?php echo $row['id_kamar']; ?>">
                <div class="form-group">
                    <label for="nama_kamar">Nama Kamar:</label>
                    <input type="text" class="form-control" id="nama_kamar" name="nama_kamar"
                        value="<?php echo $row['nama_kamar']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tipe_kamar">Tipe Kamar:</label>
                    <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar"
                        value="<?php echo $row['tipe_kamar']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kapasitas">Kapasitas:</label>
                    <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                        value="<?php echo $row['kapasitas']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga"
                        value="<?php echo $row['harga']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="indexkamar.php" class="btn btn-secondary">Kembali</a>
            </form>
            <?php
                        } else {
                            echo "<div class='alert alert-danger'>Data kamar tidak ditemukan.</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Error: " . mysqli_error($kon) . "</div>";
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    echo "<div class='alert alert-danger'>Error: " . mysqli_error($kon) . "</div>";
                }
                mysqli_close($kon);
            } else {
                echo "<div class='alert alert-danger'>ID Kamar tidak ditemukan atau metode request tidak valid.</div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>
</body>

</html>