

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../img/gg/logo1.png">
    <title>DHK GAMING STORE</title>
</head>

<body>
    <div class="banner">
    <video autoplay loop muted>
        <source src="../assets/100 Photo - Logo Reveal After Effects Templates.mp4">
    </video>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="../login/req_regis.php" method="post">
                <h1>REGISTER</h1>
                <span>Buat Akun</span>
                <input type="text" placeholder="nama" name="nama">
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <input type="password" placeholder="cpassword" name="cpassword">
                <button name="register">Registrasi</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="../login/req_login.php" method="post">
                <h1>LOGIN</h1>
                <span>Gunakan Password dan Email </span>
                <br>
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <br>
                <button type="submit" name="login" >Login</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>DHK GAMING STORE!</h1>
                    <p>Jika anda telah memiliki akun anda dapat langsung login</p>
                    <button class="hidden" id="login">Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>SELAMAT DATANG!</h1>
                    <p>Registrasi untuk dapat melakukan top up</p>
                    <button class="hidden" id="register" >Register</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="script.js"></script>
</body>

</html>