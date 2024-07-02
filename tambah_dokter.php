<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($koneksi, $_POST["nama"]);
    $spesialisasi = mysqli_real_escape_string($koneksi, $_POST["spesialisasi"]);
    $no_hp = mysqli_real_escape_string($koneksi, $_POST["no_hp"]);
    $alamat = mysqli_real_escape_string($koneksi, $_POST["alamat"]);

    $sql = "INSERT INTO dokter (nama, spesialisasi, no_hp, alamat) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $nama, $spesialisasi, $no_hp, $alamat);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Data berhasil ditambahkan');window.location='indexdokter.php';</script>";
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
