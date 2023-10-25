<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

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
    // Mengalihkan pengguna kembali ke halaman formulir setelah mengirim data
    header("Location: proses.php");
    exit;
}
?>
</body>
</html>