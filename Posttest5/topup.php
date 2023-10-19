<?php
require 'koreksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $telepn = $_POST['telepon'];
    $jumlah = $_POST['jumlah'];
    $bukti = $_POST['bukti'];

    $result = mysqli_query($conn, "INSERT INTO top_up VALUES 
    ('', '$nama', '$telepn', '$jumlah', '$bukti')");

    if ($result) {
        echo "
        <script>
            alert('Data Pembelian Berhasil DiTambahkan!');
            document.location.href = 'lihattopup.php'
        </script>";
    }else {
        echo "
        <script>
            alert('Data Pembelian Gagal DiTambahkan!');
            document.location.href = 'topup.php'
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Top Up</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #283149;

        }

        h1 {
            text-align: center;
            color: #fff;
            margin-top: 100px;
        }

        form {
            max-width: 500px;
            /* margin: 0 auto; */
            margin-top: 100px;
            margin-left: auto;
            margin-right: 400px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #283149;

        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #fff;
        }

        input[type="text"],
        input[type="tel"],
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            width: 100%;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result-container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .result-heading {
            font-size: 20px;
            font-weight: bold;
        }

        .result-text {
            margin-top: 10px;
        }

        .result-image {
            margin-top: 10px;
            max-width: 100%;
        }

        .result-box {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
    </style>
</head>
<body>
<header class="header">
        <a href="#" class="logo"><img src="img/gg/logo1.png" alt="logo" width="70" height="65"></a>
        <input type="search" class="input-search"> 
        <button type="submit" class="input-submit">search</button>
        <nav class="navbar">
           
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#populer">Top Up</a>
            <a href="#contact">Contact</a>
        </nav>
        <img src="img/dark theme icon/moon.png" id="icon">
    </header>
    <h1>Top Up</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="tel" id="telepon" name="telepon" required><br><br>

        <label for="jumlah_topup">Jumlah Top Up:</label>
        <input type="number" id="jumlah" name="jumlah" required><br><br>

        <label for="bukti_transfer">Bukti Transfer (Gambar):</label>
        <input type="file" id="bukti" name="bukti" accept="image/*"><br><br>

        <input type="submit" name="tambah" value="Submit">
    </form>
</body>
</html>
</body>
</html>
