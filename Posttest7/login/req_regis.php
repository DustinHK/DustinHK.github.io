<?php
require '../koreksi.php';


if(isset($_POST['register'])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    if($password == $cpassword){
        $password = password_hash($password,PASSWORD_DEFAULT);
        $result  = mysqli_query($conn,"SELECT email from user WHERE email = '$email' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('email sudah ada !!!');
            document.location.href='../login/login.php';
            </script>";
        }else{
            $sql = "INSERT INTO user VALUES ('','$nama','$email','$password')";
            $result_query = mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn) > 0){
            echo "<script> alert( 'Registrasi Berhasil!!');
            document.location.href='../login/login.php';
            </script>";
            }else{
                echo "<script> alert( 'Registrasi gagal!!');
                document.location.href='../login/login.php';
                </script>";
            }
        }
    }else{
        echo "<script> alert('password tidak sama !!!');
        document.location.href='../login/login.php';
        </script>";
    }
}
?>