<?php
include "koneksi.php";

if (isset($_GET['id_dokter'])) {
    $id_dokter = $_GET['id_dokter'];

    // Query untuk menghapus data dokter berdasarkan ID
    $sql = "DELETE FROM dokter WHERE id_dokter=?";
    $stmt = mysqli_prepare($koneksi, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_dokter);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($koneksi);
            echo "<script>
                    alert('Data dokter berhasil dihapus');
                    window.location.href = 'indexdokter.php';
                </script>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID Dokter tidak ditemukan.";
}
