<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_obat = $_POST["nama_obat"];
    $jenis_obat = $_POST["jenis_obat"];
    $stok = $_POST["stok"];
    $harga = $_POST["harga"];
    $tanggal_kadaluarsa = $_POST["tanggal_kadaluarsa"];

    // Insert data obat baru
    $sql_insert = "INSERT INTO obat (nama_obat, jenis_obat, stok, harga, tanggal_kadaluarsa) 
                    VALUES ('$nama_obat', '$jenis_obat', '$stok', '$harga', '$tanggal_kadaluarsa')";

    $hasil_insert = mysqli_query($kon, $sql_insert);

    if ($hasil_insert) {
        header("Location: indexobat.php");
        exit;
    } else {
        echo "<div>Data Gagal disimpan.</div>";
    }
}
?>