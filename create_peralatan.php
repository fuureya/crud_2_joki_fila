<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIENCIO CENTER - Tambah Peralatan</title>
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
            <h2>Tambah Data Peralatan</h2>
            <form action="action_tambah_peralatan.php" method="POST">
                <div class="form-group">
                    <label for="nama_peralatan">Nama Peralatan:</label>
                    <input type="text" class="form-control" id="nama_peralatan" name="nama_peralatan" required>
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi:</label>
                    <input type="text" class="form-control" id="kondisi" name="kondisi">
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi:</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                <a href="indexperalatan.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh4ap4Zd4z+IetGqDz0W5iq/8iV0p4P6O+C5JbK1wY4k5Baq4E+g2jcF5w" crossorigin="anonymous">
    </script>
</body>

</html>