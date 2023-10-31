<?php
session_start();
require '../koreksi.php';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
    
  $result1 = mysqli_query($conn, "SELECT * from user WHERE email = '$email' ");
  if (mysqli_num_rows($result1) > 0) {
    $row1  = mysqli_fetch_assoc($result1);

    if (password_verify($password, $row1['password'])) {
      $_SESSION['email'] = $email; 
      $_SESSION['login'] = true;
      header("location:../index.php");
      exit;
    }
    else{
        echo "<script> alert( 'password salah!!');
                document.location.href='../login/login.php';
                </script>";
    }
  }
  else{
    echo "<script> alert( 'email tidak ditemukan!!');
                document.location.href='../login/login.php';
                </script>";
  }
  $error = true;
}
?>