<?php
require 'koreksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];

    $result = mysqli_query($conn, "INSERT INTO mahasiswa VALUES 
    ('', '$nama', '$nim', '$fakultas', '$prodi')");

    if ($result) {
        echo "
        <script>
            alert('Data Berhasil DiTambahkan!');
            document.location.href = 'dashboard.php'
        </script>";
    }else {
        echo "
        <script>
            alert('Data Gagal DiTambahkan!');
            document.location.href = 'tambah.php'
        </script>";
    }
}
?>
<?php
// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $password = $_POST["password"];

    // Menampilkan hasil inputan
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . "<br>";
    // Jangan menampilkan password dalam bentuk plaintext, ini hanya contoh
    echo "Password: " . $password . "<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tema Website</title>
    <!-- Tambahkan stylesheet atau gaya CSS sesuai tema Anda -->
</head>
<body>
    <h1>Selamat datang di Website Saya</h1>
    
    <?php
    // Sisipkan form inputan
    require('form.php');
    ?>
    
    <!-- Tambahkan konten lain sesuai tema Anda -->
</body>
</html>
