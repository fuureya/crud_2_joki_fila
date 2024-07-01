<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Tambah Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
    /* CSS Styles */
    body {
        background-image: url('gambarbg.jpg');
        background-size: cover;
        background-position: center;
        color: black;
    }

    .logo {
        height: 1.2em;
        margin-right: 30px;
    }

    .navbar-nav .nav-item .nav-link {
        color: #fff;
    }

    .navbar-nav .nav-item .nav-link.active,
    .navbar-nav .nav-item .nav-link:hover {
        color: #fff;
    }

    /* tambahkan CSS lain sesuai kebutuhan */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">JIENCIO CENTER</a>
        <!-- ... -->
    </nav>

    <div class="container">
        <br>
        <h2>
            <center><img src="logo.jpg" alt="Logo Jiencio" class="logo">TAMBAH DATA PASIEN</center>
        </h2>

        <form action="simpan_pasien.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="usia">Usia:</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <a href="indexpasien.php" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-T7H825K8TOZ8hZOGkG/lz9700KVaT6MZfJgwCqBn0BwKx0c+gdrjQ79qjk7o7Fqf" crossorigin="anonymous">
    </script>

</body>

</html>