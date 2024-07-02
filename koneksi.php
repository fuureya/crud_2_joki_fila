<?php

$host = "localhost";
$user = "root";
$password = "root";
$db = "crud2";

$koneksi = mysqli_connect($host, $user, $password, $db);
if (!$koneksi) {
        die("Koneksi Gagal:" . mysqli_connect_error());
}
