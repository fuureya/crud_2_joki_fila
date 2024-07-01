<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id_dokter"]) && isset($_POST["nama"]) && isset($_POST["spesialisasi"]) && isset($_POST["no_hp"]) && isset($_POST["alamat"])) {
        $id_dokter = $_POST["id_dokter"];
        $nama = $_POST["nama"];
        $spesialisasi = $_POST["spesialisasi"];
        $no_hp = $_POST["no_hp"];
        $alamat = $_POST["alamat"];

        $sql = "UPDATE dokter SET nama=?, spesialisasi=?, no_hp=?, alamat=? WHERE id_dokter=?";
        $stmt = mysqli_prepare($kon, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssi", $nama, $spesialisasi, $no_hp, $alamat, $id_dokter);

            if (mysqli_stmt_execute($stmt)) {
                echo "Data dokter berhasil diperbarui.";
            } else {
                echo "Terjadi kesalahan saat memperbarui data dokter: " . mysqli_error($kon);
            }

            mysqli_stmt_close($stmt);
            mysqli_close($kon);
        } else {
            echo "Error: " . mysqli_error($kon);
        }
    } else {
        echo "Semua input diperlukan.";
    }
} else {
    echo "Metode request tidak valid.";
}
?>
