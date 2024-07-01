<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Tambah Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
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

    .form-container {
        max-width: 500px;
        margin: 0 auto;
        margin-top: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Navbar Content -->
        <!-- ... -->
    </nav>

    <div class="container">
        <div class="form-container">
            <h2>Tambah Data Dokter</h2>
            <form action="tambah_dokter.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="spesialisasi">Spesialisasi:</label>
                    <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">Nomor HP:</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                <a href="indexdokter.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>
</body>

</html>