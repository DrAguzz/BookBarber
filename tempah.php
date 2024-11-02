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
    .content{
        display: flex;
        justify-content: center;
        align-item: center;
    }
    .form-container{
        margin-top: 50px;
        background-color: #EA9554;
        height: 400px;
        width: 1000px;
        border-radius: 20px;
    }

    .form-header{
        padding: 20px;
    }
    .form{
        padding: 10px 30px;
        display: flex;
        flex-direction: column;
        align-items: left;
    }
    .form input{
        height: 30px;
        border-radius: 8px;
        border-color: white;
    }
    .label{
        display: flex;
    }
    .slot-box{
        background-color: rgba(255, 255, 255, 1);
        border-radius: 8px;
        padding: 10px;
        margin-top: 8px;
    }
    .status{
        margin-left: 50px;
    }
    .button-container {
        position: relative;
        display: inline-block;
        background-color: #d3d3d3;
        border: none;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 5px; 
        padding: 10px 20px;
        padding-right: 30px;
        font-size: 18px;
        color: #1a1a1a;
        text-align: center;
        margin: 0 10px;
    }

    .button-container::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 8px;
        border-bottom-right-radius: 10px;
    } 
    .bc-green::after{
        background-color: #25D366;
    }
    .bc-red::after{
        background-color: #9B0000;
    }
     .green{
        color: #25D366;
     }   
     .red{
        color: #9B0000;
     }
</style>
<body bgcolor="#2F1D00">
    <?php 
        require("./component/header/header.php");
        require("./component/navbar/nav.html");
    ?>
    <div class="content">
        <div class="form-container">
            <div class="form-header">
                <h3 class="k2d-bold">Borang Tempahan Potong rambut</h3>
            </div>
            <div class="form">
                <label for="" class="k2d-medium">Nama</label>
                <input type="text">
            </div>
            <div class="form">
                <label for="" class="k2d-medium">No Tel</label>
                <input type="text">
            </div>
            <div class="form">
                <div class="label">
                    <p class="k2d-medium">Pilih Slot Kosong</p>
                    <p class="status k2d-medium">Status | <span class="green k2d-medium">Kosong</span> <span class="red k2d-medium">Ditempah</span></p>
                </div>

                <div class="slot-box">
                    <button class="button-container bc-red">
                        <p class="k2d-bold">1</p>
                    </button>
                    <button class="button-container bc-red">
                        <p class="k2d-bold">2</p>
                    </button>
                    <button class="button-container bc-red">
                        <p class="k2d-bold">3</p>
                    </button>
                    <button class="button-container bc-green">
                        <p class="k2d-bold">4</p>
                    </button>
                    <button class="button-container bc-green">
                        <p class="k2d-bold">5</p>
                    </button>
                    <button class="button-container bc-green">
                        <p class="k2d-bold">6</p>
                    </button>
                    <button class="button-container bc-red">
                        <p class="k2d-bold">7</p>
                    </button>
                    <button class="button-container bc-green">
                        <p class="k2d-bold">8</p>
                    </button>
                    <button class="button-container bc-green">
                        <p class="k2d-bold">8</p>
                    </button>
                    <button class="button-container bc-green">
                        <p class="k2d-bold">10</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>