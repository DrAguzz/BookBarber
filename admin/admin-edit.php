<?php
    include('../backend/config.php');
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
<style>
    .back-link {
        float: right;
        text-align: right;
        height: 0;
        margin-top: 50px;
        margin-right: 10px; /* Optional: Add spacing from the edge */
        text-decoration: none;
        color: #333; /* Set the color as needed */
        font-weight: bold; /* Optional for emphasis */
    }
</style>
<body bgcolor="#2F1D00">
    <?php 
        require("../component/header/header.php");
    ?>

    <div class="content">
        <form class="form-container" >
            <div class="form-header">
                <h3 class="k2d-bold">Edit Admin</h3>
                <br>
                <img src="../img/profile-icon.png" alt="Profile Icon">
            </div>
            <div class="form">
                <?php
                    $result = mysqli_query($con, "SELECT * FROM admin WHERE id = 1");
                    $row = mysqli_fetch_array($result);
                ?>
                <label for="" class="k2d-medium">Nama</label>
                <input type="text" value="<?php echo $row['name']; ?>">
                <br><br>
                <label for="" class="k2d-medium">Kata Laluan Baru</label>
                <input type="text">
                <br><br>
                <label for="" class="k2d-medium">Sahkan Kata Laluan</label>
                <input type="text">
                <br><br>
                <label for="" class="k2d-medium">No. Tel</label>
                <input type="text"value="<?php echo $row['notel']; ?>">
                <br><br>
                <label for="" class="k2d-medium">Emel</label>
                <input type="text" value="<?php echo $row['email']; ?>">
            </div>
            <button type="submit" class="submit-button">Simpan</button>
            <a href="javascript:history.back()" class="back-link">Kembali</a>
        </form>
    </div>
</body>
</html>
