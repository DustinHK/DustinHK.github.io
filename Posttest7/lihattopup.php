<?php
require 'koreksi.php';

$result = mysqli_query($conn, "SELECT * FROM top_up");

$top_up = [];

while ($row = mysqli_fetch_assoc($result)){
    $top_up[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP UP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dash-main {
    width: auto;
    margin-top: 106px;
    padding: 32px;
    border-radius: 16px;
    background-color: transparent;
}
title{
    color: var(--secondary-color);
}

.leading-btn {
    text-align: end;
}

.dash-main table {
    width: 100%;
    border: 2px solid #ABABAB;
    border-collapse: collapse;
}

.dash-main table thead {
    background-color: #EFEFEF;
}

.dash-main table th, td {
    padding: 8px;
    border: 1px solid #ABABAB;
}

.action {
    text-align: center;
}

.add-btn {
    background-color: #494f5f;
    padding: 8px;
    border: none;
    border-radius: 4px;
    font-weight: 500;
    color: var(--secondary-color);
}

.edit-btn {
    background-color: #494f5f;
    padding: 8px;
    border: none;
    border-radius: 4px;
}

.delete-btn {
    background-color: #494f5f;
    padding: 8px;
    border: none;
    border-radius: 4px;
}
.history-btn {
    background-color: #5BC0DE;
    padding: 8px;
    border: none;
    border-radius: 4px;
    font-weight: 500;
    color: var(--secondary-color);
}
td {
    color: var(--secondary-color);
}

.add-btn:hover {
    filter: brightness(90%);
}

.edit-btn:hover {
    filter: brightness(90%);
}

.delete-btn:hover {
    filter: brightness(90%);
}

.history-btn:hover {
    filter: brightness(90%);
}


.add-data {
    height: 100vh;
    background-color: #EFCD00;
    display: flex;
    justify-content: center;
    align-items: center;
}

.add-form-container {
    background-color: white;
    padding: 64px;
    border-radius: 32px;
}

.add-form-container h1 {
    text-align: center;
}

.add-form-container hr {
    border: 2px solid #FFDD00;
    margin-bottom: 24px;
}

.add-form-container form {
    display: flex;
    flex-direction: column;
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
            <section class="dash-main">
                <h1 style="color: white;">TOPUP</h1>
                <hr><br>
                <div class="leading-btn">
                    <a href = "topup.php"><button class="add-btn">Tambah</button></a>
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Jumlah</th>
                            <th>Bukti Transfer</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <script>
            var icon = document.getElementById("icon");
            icon.onclick = function(){
                document.body.classList.toggle("light-theme");
            }
        </script>
                    <tbody>
                        <?php $i = 1; foreach($top_up as $top) :?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $top["nama"] ?></td>
                            <td><?php echo $top["telepon"] ?></td>
                            <td><?php echo $top["jumlah"] ?></td>
                            <td><?php echo $top["bukti"] ?></td>
                            <td class="action">
                            <a href="edit.php?id=<?php echo $top['id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                            <a href="hapus.php?id=<?php echo $top["id"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>