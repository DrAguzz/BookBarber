<?php
    $link = "../";
    $admin = "admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/component/component.css">
    <link rel="stylesheet" href="../css/admin-edit.css">
    <link rel="stylesheet" href="../css/font/font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <title>Admin Page</title>
</head>
<body bgcolor="#2F1D00">
    <?php 
        require("../component/header/header.php");
    ?>

<div class="content">
        <div class="form-container" style="width: 500px;">
            <form action="../backend/login-admin.php" method="post">
            <div class="form-header">
                <h3 class="k2d-bold">Log Masuk Admin</h3>
            </div>
            <div class="form">
                <label for="" class="k2d-medium">Nama</label>
                <input type="text" name="nama">
                <br><br>
                <label for="" class="k2d-medium">Kata Laluan</label>
                <input type="password" name="pw">
            </div>
            <button type="submit" class="submit-button" name="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
