<?php
require_once "koneksi.php";
session_start();
// $koneksi = new mysqli('localhost', 'root', 'root','crud');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");
if ($query == TRUE) {
    $_SESSION['username'] = $username;
    header("location:index.php");
} else {
    echo "gagal login";
}
