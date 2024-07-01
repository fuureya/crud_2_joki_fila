<?php
// Pastikan Anda memiliki file koneksi.php yang berisi koneksi ke database
include "koneksi.php";

// Cek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan dari form
    $nama = $_POST["nama"];
    $usia = $_POST["usia"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    // Query untuk menyimpan data pasien ke dalam database
    $sql = "INSERT INTO pasien (nama, usia, jenis_kelamin, alamat) VALUES ('$nama', '$usia', '$jenis_kelamin', '$alamat')";

    // Jalankan query
    $result = mysqli_query($kon, $sql);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Redirect ke halaman index pasien setelah berhasil menyimpan data
        header("Location: indexpasien.php");
    } else {
        // Jika query tidak berhasil, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . mysqli_error($kon);
    }

    // Tutup koneksi database
    mysqli_close($kon);
}
?>
