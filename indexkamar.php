<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Daftar Kamar</title>
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

    /* Gaya CSS untuk tabel */
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

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #f8f9fa;
        text-align: center;
        padding: 10px 0;
    }

    .table-custom a {
        margin-right: 5px;
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
            <center><img src="logo.jpg" alt="Logo Jiencio" class="logo">DAFTAR KAMAR JIENCIO UNIVERSITY HOSPITAL
            </center>
        </h2>
        <!-- Your PHP code here -->
        <?php
        include "koneksi.php";

        if (isset($_GET['id_kamar'])) {
            $id_kamar = htmlspecialchars($_GET["id_kamar"]);

            $sql = "delete from kamar where id_kamar='$id_kamar' ";
            $hasil = mysqli_query($kon, $sql);

            if ($hasil) {
                header("Location:indexkamar.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>

        <table class="table table-bordered table-custom">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Kapasitas</th>
                    <th>Harga</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>

            <?php
            include "koneksi.php";
            $sql = "select * from kamar order by id_kamar desc";
            $hasil = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["nama_kamar"]; ?></td>
                    <td><?php echo $data["tipe_kamar"]; ?></td>
                    <td><?php echo $data["kapasitas"]; ?></td>
                    <td><?php echo $data["harga"]; ?></td>
                    <td>
                        <a href="updatekamar.php?id_kamar=<?php echo htmlspecialchars($data['id_kamar']); ?>"
                            class="btn btn-warning" role="button">Update</a>
                        <a href="hapuskamar.php?id_kamar=<?php echo htmlspecialchars($data['id_kamar']); ?>"
                            class="btn btn-danger" role="button"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
        <a href="createkamar.php" class="btn btn-primary" role="button">Tambah Data Kamar</a>
        <a href="indexutama.php" class="btn btn-primary" role="button">Kembali</a>
    </div>
    <br><br><br><br>

    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>
    <script>
    // ... Sesuaikan dengan kebutuhan, jika ada skrip JavaScript yang diperlukan
    </script>

</body>

</html>