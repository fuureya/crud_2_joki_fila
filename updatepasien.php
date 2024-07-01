<?php
// Pastikan koneksi sudah dibuat dengan benar ke database sebelumnya
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_pasien"])) {
    $id_pasien = $_GET["id_pasien"];

    // Query untuk mengambil data pasien berdasarkan id_pasien
    $sql = "SELECT * FROM pasien WHERE id=?";
    $stmt = mysqli_prepare($kon, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_pasien);
        if (mysqli_stmt_execute($stmt)) {
            // Ambil hasil query
            $result = mysqli_stmt_get_result($stmt);

            // Periksa apakah data ditemukan
            if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pasien</title>
    <!-- Tambahkan link ke CSS jika diperlukan -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
    /* Your CSS styles here */
    </style>
</head>

<body>
    <h2>Update Data Pasien</h2>
    <form method="POST" action="proses_updatepasien.php">
        <input type="hidden" name="id_pasien" value="<?php echo $row['id']; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
        Usia: <input type="text" name="usia" value="<?php echo $row['usia']; ?>"><br><br>
        Jenis Kelamin:
        <input type="radio" name="jenis_kelamin" value="Laki-laki"
            <?php if ($row['jenis_kelamin'] == 'Laki-laki') echo "checked"; ?>>Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"
            <?php if ($row['jenis_kelamin'] == 'Perempuan') echo "checked"; ?>>Perempuan<br><br>
        Alamat: <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br><br>
        <input type="submit" value="Update">

        <a href="indexutama.php" class="btn btn-primary" role="button">Kembali</a>
    </form>
</body>

</html>
<?php
            } else {
                echo "Data pasien tidak ditemukan.";
            }
            // Tutup statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($kon);
        }
        // Tutup koneksi database
        mysqli_close($kon);
    }
} else {
    echo "ID Pasien tidak ditemukan atau metode request tidak valid.";
}
?>