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
        <link rel="stylesheet" href="./css/hubungi.css">
        <link rel="stylesheet" href="./css/font/font.css">

        <title>Document</title>
    </head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <body bgcolor="#2F1D00">
        <?php 
            require("./component/header/header.php");
            require("./component/navbar/nav.html");
        ?>

        <!-- Contact Section -->
        <div class="main-content">
            <p class="contact-header k2d-bold">Hubungi kami untuk sebarang pertanyaan</p>

            <div class="contact-info">
                <img src="./img/profile-icon.png" alt="Profile Icon" class="profile-icon">
                <div class="contact-details">
                    <p class="contact-name k2d-bold">X- Nama -X</p>
                    <p class="contact-phone k2d-bold">01X-XXXXXXX</p>
                    <p class="contact-email k2d-bold">XXXXXX@gmail.com</p>
                </div>
            </div>

            <div class="social-icons">
                <a href="" target="_blank">
                    <img src="./img/whatsapp-icon.png" alt="WhatsApp Icon">
                </a>
                <a href="" target="_blank">
                    <img src="./img/telegram-icon.png" alt="Telegram Icon">
                </a>
                <a href="" target="_blank">
                    <img src="./img/tiktok-icon.png" alt="TikTok Icon">
                </a>
            </div>
        </div>
    </body>
</html>