<?php
// Include file koneksi database
include "koneksi.php";

// Deklarasi variabel
$id_obat = $nama_obat = $jenis_obat = $stok = $harga = $tanggal_kadaluarsa = "";

// Cek apakah parameter id_obat terdapat dalam query string
if (isset($_GET['id_obat'])) {
    // Mengambil nilai id_obat dari query string dan membersihkannya
    $id_obat = htmlspecialchars($_GET['id_obat']);

    // Query SQL untuk mengambil data obat berdasarkan id_obat
    $sql = "SELECT * FROM obat WHERE id_obat='$id_obat'";
    $hasil = mysqli_query($kon, $sql);

    // Memeriksa apakah data obat ditemukan
    if (mysqli_num_rows($hasil) == 1) {
        $data = mysqli_fetch_assoc($hasil);
        $nama_obat = $data['nama_obat'];
        $jenis_obat = $data['jenis_obat'];
        $stok = $data['stok'];
        $harga = $data['harga'];
        $tanggal_kadaluarsa = $data['tanggal_kadaluarsa'];
    } else {
        // Jika tidak ada data obat dengan id_obat tersebut, redirect ke indexobat.php
        header("Location: indexobat.php");
        exit;
    }
}

// Proses update data obat
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui form
    $nama_obat = htmlspecialchars($_POST["nama_obat"]);
    $jenis_obat = htmlspecialchars($_POST["jenis_obat"]);
    $stok = htmlspecialchars($_POST["stok"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $tanggal_kadaluarsa = htmlspecialchars($_POST["tanggal_kadaluarsa"]);

    // Query SQL untuk update data obat berdasarkan id_obat
    $sql_update = "UPDATE obat SET 
                    nama_obat='$nama_obat',
                    jenis_obat='$jenis_obat',
                    stok='$stok',
                    harga='$harga',
                    tanggal_kadaluarsa='$tanggal_kadaluarsa'
                    WHERE id_obat='$id_obat'";

    // Eksekusi query update
    $hasil_update = mysqli_query($kon, $sql_update);

    // Cek apakah query berhasil dijalankan
    if ($hasil_update) {
        // Jika berhasil, redirect ke indexobat.php
        header("Location: indexobat.php");
        exit;
    } else {
        // Jika gagal, tampilkan pesan error
        echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Obat - JIENCIO CENTER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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

    .form-container {
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">JIENCIO CENTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="indexobat.php">Kembali ke Daftar Obat</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h2 class="text-center mt-3">Update Data Obat</h2>
        <div class="row justify-content-center form-container">
            <div class="col-md-6">
                <!-- Form untuk update data obat -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id_obat=<?php echo $id_obat; ?>"
                    method="POST">
                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                            value="<?php echo $nama_obat; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_obat">Jenis Obat</label>
                        <input type="text" class="form-control" id="jenis_obat" name="jenis_obat"
                            value="<?php echo $jenis_obat; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
                        <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa"
                            value="<?php echo $tanggal_kadaluarsa; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="fixed-bottom bg-light text-center py-2">
        <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
            atau saran melalui info@rumahsakitelitsingapura.com</p>
    </footer>

    <!-- JavaScript scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Yhj04Hz+YnBM0pSrFNO7uF0Pj3csG3OuKB2l+8Hso5OuEJ/tSZvS8x8Xh0HXbr+t" crossorigin="anonymous">
    </script>

</body>

</html>