<?php
// Lakukan koneksi ke database di sini
// Misalnya:
// $koneksi = mysqli_connect("localhost", "nama_user", "password", "nama_database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk menyimpan data ke dalam tabel users
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    // Jalankan query
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika berhasil disimpan, beri notifikasi sukses atau redirect ke halaman lain
        echo "Pendaftaran berhasil. Anda dapat login sekarang.";
    } else {
        // Jika gagal, beri pesan error atau tindakan lain yang sesuai
        echo "Terjadi kesalahan saat mendaftar.";
    }
}
?>
