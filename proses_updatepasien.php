<?php
// Pastikan koneksi sudah dibuat dengan benar ke database sebelumnya
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_pasien"])) {
    $id_pasien = $_POST["id_pasien"];
    $nama = $_POST["nama"];
    $usia = $_POST["usia"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    // Query untuk memperbarui data pasien berdasarkan id_pasien
    $sql = "UPDATE pasien SET nama=?, usia=?, jenis_kelamin=?, alamat=? WHERE id_pasien=?";
    $stmt = mysqli_prepare($kon, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sisss", $nama, $usia, $jenis_kelamin, $alamat, $id_pasien);
        if (mysqli_stmt_execute($stmt)) {
            echo "Data pasien berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data pasien: " . mysqli_error($kon);
        }
        // Tutup statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($kon);
    }
    // Tutup koneksi database
    mysqli_close($kon);
} else {
    echo "Metode request tidak valid atau data tidak lengkap.";
}
?>