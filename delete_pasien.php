<?php
include "koneksi.php";

// Periksa apakah parameter id_pasien telah diterima
if (isset($_GET['id_pasien'])) {
    // Ambil nilai id_pasien dari parameter
    $id_pasien = $_GET['id_pasien'];

    // Query untuk menghapus data pasien berdasarkan id_pasien
    $sql = "DELETE FROM pasien WHERE id_pasien = '$id_pasien'";

    // Jalankan query
    $result = mysqli_query($kon, $sql);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Redirect ke halaman index pasien setelah berhasil menghapus data
        header("Location: indexpasien.php");
    } else {
        // Jika query tidak berhasil, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . mysqli_error($kon);
    }

    // Tutup koneksi database
    mysqli_close($kon);
}
?>
