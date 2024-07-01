<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_peralatan = $_POST['nama_peralatan'];
    $kondisi = $_POST['kondisi'];
    $lokasi = $_POST['lokasi'];

    $sql = "INSERT INTO peralatan (nama_peralatan, kondisi, lokasi) VALUES ('$nama_peralatan', '$kondisi', '$lokasi')";
    
    if (mysqli_query($kon, $sql)) {
        mysqli_close($kon);
        header('Location: indexperalatan.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($kon);
    }
}

mysqli_close($kon);
?>