<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Top Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #283149;

        }

        h1 {
            text-align: center;
            color: #fff;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
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
    <h1>Top Up</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="tel" id="nomor_telepon" name="nomor_telepon" required><br><br>

        <label for="jumlah_topup">Jumlah Top Up (Rp):</label>
        <input type="number" id="jumlah_topup" name="jumlah_topup" required><br><br>

        <label for="bukti_transfer">Bukti Transfer (Gambar):</label>
        <input type="file" id="bukti_transfer" name="bukti_transfer" accept="image/*"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $jumlah_topup = $_POST['jumlah_topup'];

        // Memeriksa apakah bukti_transfer diunggah
        if (isset($_FILES['bukti_transfer']['name']) && !empty($_FILES['bukti_transfer']['name'])) {
            $bukti_transfer = $_FILES['bukti_transfer']['name'];

            if (!empty($bukti_transfer)) {
                $uploadDir = 'uploads/';
                $uploadFile = $uploadDir . basename($bukti_transfer);
                move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], $uploadFile);

                // Menampilkan hasil inputan
                echo "<div class='result-container'>";
                echo "<div class='result-box'>";
                echo "<h2 class='result-heading'>Hasil Inputan:</h2>";
                echo "<div class='result-text'>Nama: $nama</div>";
                echo "<div class='result-text'>Nomor Telepon: $nomor_telepon</div>";
                echo "<div class='result-text'>Jumlah Top Up (Rp): $jumlah_topup</div>";
                echo "<div class='result-text'>Bukti Transfer:</div>";
                echo "<img class='result-image' src='$uploadFile' alt='Bukti Transfer'>";
                echo "</div>";
                echo "</div>";
            }
        }
    }
    ?>

    

</body>
</html>
</body>
</html>
