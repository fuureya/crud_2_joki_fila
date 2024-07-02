<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_obat = $_POST["id_obat"];
    $nama_obat = $_POST["nama_obat"];
    $jenis_obat = $_POST["jenis_obat"];
    $stok = $_POST["stok"];
    $harga = $_POST["harga"];
    $tanggal_kadaluarsa = $_POST["tanggal_kadaluarsa"];

    // Update data obat
    $sql_update = "UPDATE obat SET 
                    nama_obat = '$nama_obat', 
                    jenis_obat = '$jenis_obat', 
                    stok = '$stok', 
                    harga = '$harga', 
                    tanggal_kadaluarsa = '$tanggal_kadaluarsa' 
                    WHERE id_obat = '$id_obat' ";

    $hasil_update = mysqli_query($koneksi, $sql_update);

    if ($hasil_update) {
        header("Location: indexobat.php");
        exit;
    } else {
        echo "<div>Data Gagal diupdate.</div>";
    }
}
