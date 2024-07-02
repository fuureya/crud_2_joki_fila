<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: black;
        }

        .container {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Update Data Dokter</h2>

        <?php
        include "koneksi.php";

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_dokter"])) {
            $id_dokter = $_GET["id_dokter"];

            $sql = "SELECT * FROM dokter WHERE id_dokter=?";
            $stmt = mysqli_prepare($koneksi, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "i", $id_dokter);
                if (mysqli_stmt_execute($stmt)) {
                    $result = mysqli_stmt_get_result($stmt);
                    $row = mysqli_fetch_assoc($result);

                    if ($row) {
        ?>
                        <form method="POST" action="updatedokter.php">
                            <input type="hidden" name="id_dokter" value="<?php echo $row['id_dokter']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="spesialisasi">Spesialisasi:</label>
                                <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" value="<?php echo $row['spesialisasi']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP:</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $row['no_hp']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo $row['alamat']; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="indexdokter.php" class="btn btn-secondary" role="button">Kembali</a>
                        </form>
        <?php
                    } else {
                        echo "Data dokter tidak ditemukan.";
                    }
                } else {
                    echo "Error: " . mysqli_error($koneksi);
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
            mysqli_close($koneksi);
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            include "koneksi.php";

            $id_dokter = mysqli_real_escape_string($koneksi, $_POST["id_dokter"]);
            $nama = mysqli_real_escape_string($koneksi, $_POST["nama"]);
            $spesialisasi = mysqli_real_escape_string($koneksi, $_POST["spesialisasi"]);
            $no_hp = mysqli_real_escape_string($koneksi, $_POST["no_hp"]);
            $alamat = mysqli_real_escape_string($koneksi, $_POST["alamat"]);

            $sql = "UPDATE dokter SET nama=?, spesialisasi=?, no_hp=?, alamat=? WHERE id_dokter=?";
            $stmt = mysqli_prepare($koneksi, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ssssi", $nama, $spesialisasi, $no_hp, $alamat, $id_dokter);
                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('Data berhasil diubah');window.location='indexdokter.php';</script>";
                } else {
                    echo "Error: " . mysqli_error($koneksi);
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
            mysqli_close($koneksi);
        } else {
            echo "Metode request tidak valid.";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>
</body>

</html>