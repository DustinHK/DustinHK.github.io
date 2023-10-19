<?php
require "koreksi.php";
$id = $_GET['id'];


$result = mysqli_query($conn,"DELETE FROM top_up WHERE id = '$id'");

if ($result) {
    echo "
    <script>
        alert('Data Top Up berhasil Hapus!');
        document.location.href = 'lihattopup.php'
    </script>";
} else {
    echo "
    <script>
        alert('Data Top Up Gagal Hapus!');
        document.location.href = 'lihattopup.php'
    </script>";
}

?>