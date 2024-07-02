<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Daftar Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
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

        /* Pagination Styles */
        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pagination a,
        .pagination span {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #0056b3;
        }

        .pagination span {
            background-color: #0056b3;
            cursor: default;
        }

        .pagination .current {
            background-color: #0056b3;
            pointer-events: none;
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
            <center><img src="logo.jpg" alt="Logo Jiencio" class="logo">DAFTAR DOKTER JIENCIO UNIVERSITY HOSPITAL
            </center>
        </h2>

        <table class="table table-bordered table-custom">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Spesialisasi</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>

            <?php
            require_once "koneksi.php";

            // Jumlah data per halaman
            $jumlah_data_per_halaman = 10;

            // Tentukan halaman aktif
            $halaman = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
            $awal_data = ($halaman - 1) * $jumlah_data_per_halaman;

            $sql = "SELECT * FROM dokter ORDER BY id_dokter DESC LIMIT $awal_data, $jumlah_data_per_halaman";
            $hasil = mysqli_query($koneksi, $sql);
            $no = $awal_data + 1; // Nomor awal pada setiap halaman

            while ($data = mysqli_fetch_array($hasil)) {
                // Tampilkan data dokter sesuai paginasi
                echo "<tbody>";
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $data["nama"] . "</td>";
                echo "<td>" . $data["spesialisasi"] . "</td>";
                echo "<td>" . $data["no_hp"] . "</td>";
                echo "<td>" . $data["alamat"] . "</td>";
                echo "<td>";
                echo "<a href='updatedokter.php?id_dokter=" . htmlspecialchars($data['id_dokter']) . "' class='btn btn-warning' role='button'>Update</a>";
                echo "<a href='hapusdokter.php?id_dokter=" . htmlspecialchars($data['id_dokter']) . "' class='btn btn-danger' role='button' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'>Delete</a>";
                echo "</td>";

                echo "</tr>";
                echo "</tbody>";

                $no++;
            }
            ?>
        </table>

        <div class="pagination">
            <?php
            $total_data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM dokter"));
            $total_halaman = ceil($total_data / $jumlah_data_per_halaman);

            for ($i = 1; $i <= $total_halaman; $i++) {
                if ($i == $halaman) {
                    echo "<span>$i</span>";
                } else {
                    echo "<a href='indexdokter.php?halaman=$i'>$i</a>";
                }
            }
            ?>
        </div><br><br>
        <a href="create_dokter.php" class="btn btn-primary" role="button">Tambah Data Dokter</a>
        <a href="indexutama.php" class="btn btn-primary" role="button">Kembali</a>
    </div><br><br><br>
    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>
</body>

</html>