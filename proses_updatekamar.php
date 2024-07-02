<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_kamar = $_POST['id_kamar'];
    $nama_kamar = $_POST['nama_kamar'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $kapasitas = $_POST['kapasitas'];
    $harga = $_POST['harga'];

    // Query untuk mengupdate data kamar
    $sql = "UPDATE kamar SET nama_kamar=?, tipe_kamar=?, kapasitas=?, harga=? WHERE id_kamar=?";
    $stmt = mysqli_prepare($koneksi, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssiii", $nama_kamar, $tipe_kamar, $kapasitas, $harga, $id_kamar);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($koneksi);
            echo "<script>
                    alert('Data kamar berhasil diupdate');
                    window.location.href = 'indexkamar.php';
                </script>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . mysqli_error($koneksi) . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($koneksi) . "</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Metode request tidak valid.</div>";
}
