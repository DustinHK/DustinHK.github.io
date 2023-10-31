<?php
require "koreksi.php";
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM top_up where id=$id");

$top_up = [];

while ($row = mysqli_fetch_assoc($result)){
    $top_up[] = $row;
}

$top_up = $top_up[0];


if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $jumlah = $_POST['jumlah'];
    $bukti = $_POST['bukti'];

    $result = mysqli_query($conn, "UPDATE top_up SET nama = '$nama', telepon='$telepon', jumlah='$jumlah', bukti = '$bukti' WHERE id = '$id' ");

    if ($result) {
        echo "
        <script>
            alert('Data Top Up berhasil Diubah!');
            document.location.href = 'lihattopup.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Top Up Gagal Diubah!');
            document.location.href = 'edit.php'
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit TOPUP</title>
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
    <section class="add-data">
        <div class="add-form-container">
        <h1>Edit Top Up</h1>
        <form method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $top_up['nama']?>" required><br><br>

        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="tel" id="telepon" name="telepon" value="<?php echo $top_up['telepon']?>" required><br><br>

        <label for="jumlah_topup">Jumlah Top Up:</label>
        <input type="number" id="jumlah" name="jumlah" value="<?php echo $top_up['jumlah']?>" required><br><br>

        <label for="bukti_transfer">Bukti Transfer (Gambar):</label>
        <input type="file" id="bukti" name="bukti" value="<?php echo $top_up['bukti']?>" accept="image/*"><br><br>

        <input type="submit" name="edit" value="Submit">
    </form>
        </div>
    </section>
</body>
</html>