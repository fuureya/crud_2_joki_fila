<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna Baru</title>
    <!-- CSS di sini -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Style untuk tombol Kembali ke Login */
        .back-to-login {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-login a {
            text-decoration: none;
        }

        .back-to-login button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-to-login button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Daftar Pengguna Baru</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <input type="submit" value="Daftar">
        </form>

        <!-- PHP Script untuk koneksi dan operasi database -->
        <?php

        require_once "koneksi.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $nama = $_POST["nama"];

            // Mengecek apakah username sudah ada dalam database
            $checkQuery = "SELECT * FROM user WHERE username = '$username'";
            $result = $koneksi->query($checkQuery);

            if ($result->num_rows > 0) {
                $alertMessage = "Username sudah digunakan. Mohon masukkan username yang berbeda.";
            } else {
                // Jika username belum ada, melakukan proses INSERT
                $insertQuery = "INSERT INTO user (username, password, nama) VALUES ('$username', '$password', '$nama')";

                if ($koneksi->query($insertQuery) === TRUE) {
                    $alertMessage = "Pendaftaran berhasil. Anda dapat login sekarang.";
                } else {
                    $alertMessage = "Terjadi kesalahan saat mendaftar: " . $koneksi->error;
                }
            }
        }

        $koneksi->close();

        ?>
        <!-- Akhir PHP Script -->

        <!-- Script untuk menampilkan pesan pemberitahuan -->
        <script>
            var alertMessage = "<?php echo $alertMessage; ?>";

            if (alertMessage !== "") {
                alert(alertMessage);
            }
        </script>

        <!-- Tombol Kembali ke Login -->
        <div class="back-to-login">
            <a href="login_copy.php">
                <button>Kembali ke Login</button>
            </a>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Jiencio University Hospital</p>
    </footer>
</body>

</html>