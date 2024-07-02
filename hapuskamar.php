<?php
include "koneksi.php";

if (isset($_GET['id_kamar'])) {
    $id_kamar = htmlspecialchars($_GET["id_kamar"]);

    // Query untuk menghapus data kamar
    $sql = "DELETE FROM kamar WHERE id_kamar=?";
    $stmt = mysqli_prepare($koneksi, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_kamar);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($koneksi);
            echo "<script>
                    alert('Data kamar berhasil dihapus');
                    window.location.href = 'indexkamar.php';
                </script>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . mysqli_error($koneksi) . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($koneksi) . "</div>";
    }
} else {
    echo "<div class='alert alert-danger'>ID kamar tidak ditemukan.</div>";
}
