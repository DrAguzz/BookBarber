<?php
    $link = "./";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/component/component.css">
        <link rel="stylesheet" href="./css/landingPage.css">
        <link rel="stylesheet" href="./css/font/font.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <style>
    
    </style>
    <body bgcolor="#2F1D00">
        <?php 
            require("./component/header/header.php");
            require("./component/navbar/nav.html");
        ?>

    <div class="content">
        <div class="container">
            <!-- Image Section with Cropped Background -->
            <div class="image-container"></div>

            <!-- Text Section -->
            <div class="text-container">
                <h1 class="k2d-bold">Gaya Rambut Terbaik Di Kolej Kediaman!</h1>
                <p class="k2d-bold">
                    Kami ada untuk memenuhi kebutuhan penampilan Anda dengan layanan potong rambut berkualitas dan nyaman, tepat di Kolej Kediaman. Kami mengutamakan kepuasan dan gaya Anda, dengan sentuhan profesional dari tukang gunting berpengalaman. Tidak perlu jauh-jauh keluar, cukup kunjungi kami dan nikmati potongan rambut yang sesuai dengan kepribadian dan gaya hidup Anda.
                </p>
            </div>
        </div>
        <div class="container-img">
        <div class="image-box image1"></div>
        <div class="image-box image2"></div> 
        <button class="button">TEMPAH</button> 
    </div>
    </div>
    </body>
</html>