<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Gaya CSS lainnya */

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('gambarbg.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo {
            height: 80px;
            margin-right: 10px;
        }

        .judul {
            font-size: 2em;
            margin-top: 0;
            color: #090926;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            padding: 20px;
        }

        .kotak_login {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .tulisan_login {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .form_login {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .tombol_login {
            margin-top: 10px;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            width: calc(50%);
            /* Menggunakan calc untuk membagi setengah dari lebar dengan jarak 5px */
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .tombol_masuk {
            background-color: #4CAF50;
            color: white;
        }

        .tombol_daftar {
            margin-top: 10px;
            background-color: #2196F3;
            color: white;
        }

        .tombol_login:hover {
            opacity: 0.8;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 5px 0;

            flex-shrink: 0;
        }

        /* Style untuk tombol HOME */
        .tombol_home {
            display: block;
            width: 100%;
            margin-top: 20px;
            padding: 12px 0;
            background-color: #f39c12;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            box-sizing: border-box;
        }

        .tombol_home:hover {
            background-color: #e67e22;
        }
    </style>
</head>

<body><br>
    <div class="logo-container">
        <img src="logo.jpg" alt="Logo Jiencio" class="logo">
        <h1 class="judul">JIENCIO UNIVERSITY HOSPITAL</h1>
    </div>

    <main>
        <div class="kotak_login">
            <p class="tulisan_login">Login User</p>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="text" name="username" class="form_login" placeholder="Username atau email ..">
                <input type="password" name="password" class="form_login" placeholder="Password ..">

                <div style="display: flex; justify-content: space-between; width: 100%;">
                    <button type="submit" name="login" class="tombol_login tombol_masuk">MASUK</button>
                    <a href="daftar.php" class="tombol_login tombol_daftar">DAFTAR</a>
                </div>

                <a href="home.php" class="tombol_home">HOME</a>
            </form>

            <?php

            // Lakukan pemeriksaan login saat tombol login ditekan
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
                // Lakukan koneksi ke database
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "crud2";

                $koneksi = new mysqli($servername, $username, $password, $dbname);

                if ($koneksi->connect_error) {
                    die("Koneksi gagal: " . $koneksi->connect_error);
                }

                // Ambil data dari form
                $inputUsername = $_POST['username'];
                $inputPassword = $_POST['password'];

                // Lakukan query untuk memeriksa apakah data username dan password sesuai di database
                $query = "SELECT * FROM user WHERE username='$inputUsername' AND password='$inputPassword'";
                $result = $koneksi->query($query);

                if ($result->num_rows > 0) {
                    // Jika data sesuai, arahkan ke halaman indexutama.php
                    //header("Location: index.php");
                    echo "<script>window.location.href='indexutama.php';</script>";
                    // exit();
                } else {
                    // Jika data tidak sesuai, tampilkan pesan kesalahan
                    $errorMessage = "Maaf, username dan password salah. Silahkan daftar untuk dapat masuk.";
                    echo '<div class="error-message">
                            <div class="error-box">
                                ' . $errorMessage . '
                            </div>
                        </div>';
                }

                $koneksi->close();
            }
            ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Rumah Sakit Elit Singapura - JIENCIO CENTER | Hubungi kami untuk informasi lebih lanjut
                atau saran melalui info@rumahsakitelitsingapura.com</p>
        </div>
    </footer>
</body>

</html>