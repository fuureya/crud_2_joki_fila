<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Daftar Pasien</title>
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

        .navbar {
            background-color: #343a40 !important;
        }

        .navbar-nav .nav-item .nav-link {
            color: #ffffff !important;
        }

        .navbar-nav .nav-item .nav-link.active,
        .navbar-nav .nav-item .nav-link:hover {
            color: #ffffff !important;
        }

        .container {
            margin-top: 20px;
        }

        .table-custom {
            margin-top: 20px;
            background-color: #ffffff;
            border-collapse: collapse;
            width: 100%;
        }

        .table-custom th {
            background-color: #007bff;
            color: #ffffff;
            font-weight: bold;
            text-align: center;
            padding: 10px;
        }

        .table-custom td {
            text-align: left;
            padding: 8px;
        }

        .table-custom tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .table-custom a {
            text-decoration: none;
            margin-right: 5px;
        }

        .table-custom a.btn {
            padding: 5px 10px;
            border-radius: 3px;
            color: #ffffff;
            font-weight: bold;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
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
            <center><img src="logo.jpg" alt="Logo Jiencio" class="logo">DAFTAR PASIEN JIENCIO UNIVERSITY HOSPITAL
            </center>
        </h2>

        <table class="table table-bordered table-custom">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>

                </tr>
            </thead>

            <?php
            include "koneksi.php";

            // Jumlah data per halaman
            $jumlah_data_per_halaman = 10;

            // Tentukan halaman aktif
            $halaman = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
            $awal_data = ($halaman - 1) * $jumlah_data_per_halaman;

            // Query untuk menampilkan data pasien dengan batasan halaman
            $sql = "SELECT * FROM pasien ORDER BY id DESC LIMIT $awal_data, $jumlah_data_per_halaman";

            $hasil = mysqli_query($koneksi, $sql);
            $no = $awal_data + 1;

            // Tampilkan data pasien dalam tabel
            while ($data = mysqli_fetch_array($hasil)) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . (isset($data["nama"]) ? htmlspecialchars($data["nama"]) : '') . "</td>";
                echo "<td>" . (isset($data["usia"]) ? htmlspecialchars($data["usia"]) : '') . "</td>";
                echo "<td>" . (isset($data["jenis_kelamin"]) ? htmlspecialchars($data["jenis_kelamin"]) : '') . "</td>";
                echo "<td>" . (isset($data["alamat"]) ? htmlspecialchars($data["alamat"]) : '') . "</td>";

                echo "</tr>";
                echo "</tbody>";

                $no++;
            }
            ?>
        </table>

        <!-- Bagian pagination -->
        <div class="pagination">
            <?php
            $total_data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pasien"));
            $total_halaman = ceil($total_data / $jumlah_data_per_halaman);

            for ($i = 1; $i <= $total_halaman; $i++) {
                if ($i == $halaman) {
                    echo "<span>$i</span>";
                } else {
                    echo "<a href='indexpasien.php?halaman=$i'>$i</a>";
                }
            }
            ?>
        </div>

        <!-- Tombol tambah data dan kembali -->
        <br><br>
        <a href="createpasien.php" class="btn btn-primary" role="button">Input pasien baru</a>
        <a href="indexutama.php" class="btn btn-primary" role="button">Kembali</a>
    </div><br><br><br>

    <br>
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