<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Daftar Obat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        /* Your CSS styles */
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
            border-collapse: collapse;
            width: 100%;
        }

        .table-custom th,
        .table-custom td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .table-custom th {
            background-color: #007bff;
            color: #fff;
        }

        .table-custom tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-custom tr:hover {
            background-color: #ddd;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
        }

        .pagination {
            margin-top: 20px;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
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

    <!-- Content -->
    <div class="container">
        <br>
        <h2>
            <center><img src="logo.jpg" alt="Logo Jiencio" class="logo">DAFTAR OBAT JIENCIO UNIVERSITY HOSPITAL
            </center>
        </h2>
        <!-- PHP code for deleting obat -->
        <?php
        require_once "koneksi.php";

        if (isset($_GET['id_obat'])) {
            $id_obat = htmlspecialchars($_GET["id_obat"]);

            $sql_delete = "DELETE FROM obat WHERE id_obat='$id_obat' ";
            $hasil_delete = mysqli_query($koneksi, $sql_delete);

            if ($hasil_delete) {
                header("Location:indexobat.php");
                exit;
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }

        // Pagination setup
        $limit = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;

        // Query to fetch data with pagination
        $sql_select = "SELECT * FROM obat ORDER BY id_obat DESC LIMIT $start, $limit";
        $hasil_select = mysqli_query($koneksi, $sql_select);
        $no = $start + 1; // Numbering for rows
        ?>

        <!-- Table to display obat -->
        <table class="table table-bordered table-custom">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($hasil_select)) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data["nama_obat"]; ?></td>
                        <td><?php echo $data["jenis_obat"]; ?></td>
                        <td><?php echo $data["stok"]; ?></td>
                        <td><?php echo $data["harga"]; ?></td>
                        <td><?php echo $data["tanggal_kadaluarsa"]; ?></td>
                        <td>
                            <a href="updateobat.php?id_obat=<?php echo htmlspecialchars($data['id_obat']); ?>" class="btn btn-warning" role="button">Update</a>
                            <a href="hapusobat.php?id_obat=<?php echo htmlspecialchars($data['id_obat']); ?>" class="btn btn-danger" role="button" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            // Pagination links
            $sql_total = "SELECT COUNT(*) AS total FROM obat";
            $query_total = mysqli_query($koneksi, $sql_total);
            $row_total = mysqli_fetch_assoc($query_total);
            $total_records = $row_total['total'];

            $total_pages = ceil($total_records / $limit);

            if ($page > 1) {
                echo '<a href="indexobat.php?page=' . ($page - 1) . '" class="btn btn-secondary">Previous</a>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    echo '<a href="#" class="btn btn-primary">' . $i . '</a>';
                } else {
                    echo '<a href="indexobat.php?page=' . $i . '" class="btn btn-secondary">' . $i . '</a>';
                }
            }

            if ($page < $total_pages) {
                echo '<a href="indexobat.php?page=' . ($page + 1) . '" class="btn btn-secondary">Next</a>';
            }
            ?>
        </div>

        <!-- Button to add obat -->
        <a href="createobat.php" class="btn btn-primary" role="button">Tambah Data Obat</a>
        <a href="indexutama.php" class="btn btn-primary" role="button">Kembali</a>
    </div><br><br><br>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>

    <!-- JavaScript scripts -->
    <script>
        // ... Sesuaikan dengan kebutuhan, jika ada skrip JavaScript yang diperlukan
    </script>

</body>

</html>