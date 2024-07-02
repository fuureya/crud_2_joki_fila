<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Daftar Peralatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        /* CSS Styles */
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

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
        }

        .btn-action {
            margin-right: 5px;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">JIENCIO CENTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <center>DAFTAR PERALATAN JIENCIO UNIVERSITY HOSPITAL</center>
        </h2>

        <?php
        include "koneksi.php";

        // Konfigurasi Pagination
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
        $data_per_halaman = 10;
        $mulai = ($halaman - 1) * $data_per_halaman;

        $sql = "SELECT * FROM peralatan LIMIT $mulai, $data_per_halaman";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
        ?>
            <table class="table table-bordered table-custom">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Peralatan</th>
                        <th>Kondisi</th>
                        <th>Lokasi</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = $mulai + 1;
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data["nama_peralatan"]; ?></td>
                            <td><?php echo $data["kondisi"]; ?></td>
                            <td><?php echo $data["lokasi"]; ?></td>
                            <td>
                                <a href="updateperalatan.php?id_peralatan=<?php echo htmlspecialchars($data['id_peralatan']); ?>" class="btn btn-warning btn-action" role="button">Update</a>
                            </td>
                            <td>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        <?php
            // Pagination
            $sql_total = "SELECT COUNT(*) AS total FROM peralatan";
            $hasil_total = mysqli_query($koneksi, $sql_total);
            $row = mysqli_fetch_assoc($hasil_total);
            $total_data = $row['total'];
            $total_halaman = ceil($total_data / $data_per_halaman);

            echo '<nav aria-label="Pagination">';
            echo '<ul class="pagination justify-content-center">';

            if ($halaman > 1) {
                echo '<li class="page-item"><a class="page-link" href="?halaman=' . ($halaman - 1) . '">Previous</a></li>';
            }

            for ($i = 1; $i <= $total_halaman; $i++) {
                if ($i == $halaman) {
                    echo '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" href="?halaman=' . $i . '">' . $i . '</a></li>';
                }
            }

            if ($halaman < $total_halaman) {
                echo '<li class="page-item"><a class="page-link" href="?halaman=' . ($halaman + 1) . '">Next</a></li>';
            }

            echo '</ul>';
            echo '</nav>';
        } else {
            echo "Tidak ada data peralatan.";
        }

        mysqli_close($koneksi);
        ?>

        <a href="createperalatan.php" class="btn btn-primary" role="button">Tambah Data Peralatan</a>
        <a href="indexutama.php" class="btn btn-primary" role="button">Kembali</a>
    </div><br><br><br><br>

    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>
</body>

</html>