<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_peralatan = $_POST['id_peralatan'];
    $nama_peralatan = $_POST['nama_peralatan'];
    $kondisi = $_POST['kondisi'];
    $lokasi = $_POST['lokasi'];

    $sql = "UPDATE peralatan SET nama_peralatan='$nama_peralatan', kondisi='$kondisi', lokasi='$lokasi' WHERE id_peralatan=$id_peralatan";

    if (mysqli_query($kon, $sql)) {
        mysqli_close($kon);
        header('Location: indexperalatan.php');
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($kon);
    }
}

mysqli_close($kon);
?>