<?php
    $link = "../";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/component/component.css">
    <link rel="stylesheet" href="../css/admin-main.css">
    <link rel="stylesheet" href="../css/font/font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <title>Admin Page</title>
</head>
<body bgcolor="#2F1D00">
    <?php 
        require("../component/header/header.php");
        require("../component/navbar/nav.php");
    ?>

    <div class="main-content">
        <div class="content">
            <div class="admin-info">
                <img src="../img/profile-icon.png" alt="Profile Icon">
                <p class="w32 k2d-bold">Nama : X- Nama -X</p>
                <p class="w32 k2d-bold">Kata Laluan : ************</p>
                <p class="w32 k2d-bold">No. Tel : 01X-XXXXXXX</p>
                <p class="w32 k2d-bold">Emel : XXXXXX@gmail.com</p>
                <button class="edit-button">Edit</button>
            </div>

            <div class="tempahan-info">
            <div class="label">
                <p class="k2d-bold">Maklumat Slot Tempahan</p>
                <p class="status k2d-bold">Status | <span class="green k2d-bold">Kosong</span> <span class="red k2d-bold">Ditempah</span></p>
            </div>
            <div class="slot-box">
                <!-- Add button-container elements for slots as needed -->
                <button class="button-container bc-red">1</button>
                <button class="button-container bc-red">2</button>
                <button class="button-container bc-red">3</button>
                <button class="button-container bc-green">4</button>
                <button class="button-container bc-green">5</button>
                <button class="button-container bc-green">6</button>
                <button class="button-container bc-green">7</button>
                <button class="button-container bc-green">8</button>
                <button class="button-container bc-green">9</button>
                <button class="button-container bc-green">10</button>
                <!-- Continue for all slots -->
            </div>

            <div class="label">
                <p class="k2d-bold">Tambah Slot</p>
            </div>
            <form class="add-slot" method="POST">
                <div class="select-date">
                    <label for="date">Tarikh</label><input type="date" name="date" id="date">
                </div>
                <div class="select-slot">
                    <label for="slot">Slot</label><input type="text" name="slot" id="slot">
                </div>
                <button type="submit" class="add-button">+ Tambah</button>
            </form>

            <div class="label">
                <p class="k2d-bold">Senarai Tempahan</p>
            </div>
            <div class="booking-list">
                <table>
                    <tr>
                        <th class="k2d-bold">Slot</th>
                        <th class="k2d-bold">Nama Pelanggan</th>
                        <th class="k2d-bold">Status</th>
                    </tr>
                    <tr>
                        <td>
                            <button class="button-container bc-red k2d-bold">1 | 10:30</button>
                        </td>
                        <td>
                            <p class="k2d-bold">X-Nama Pelanggan-X</p>
                        </td>
                        <td>
                            <p class="k2d-bold">Selesai</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="button-container bc-red k2d-bold">2 | 11:00</button>
                        </td>
                        <td>
                            <p class="k2d-bold">X-Nama Pelanggan-X</p>
                        </td>
                        <td>
                            <p class="k2d-bold">Selesai</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="button-container bc-red k2d-bold">3 | 11:30</button>
                        </td>
                        <td>
                            <p class="k2d-bold">X-Nama Pelanggan-X</p>
                        </td>
                        <td>
                            <p class="k2d-bold">Menunggu</p>
                        </td>
                    </tr>
                    <!-- <?php
                        // Hardcoded array of booking data
                        $bookings = [
                            ["slot" => "1 | 10:30", "name" => "X-Nama Pelanggan-X", "status" => "Selesai"],
                            ["slot" => "2 | 11:00", "name" => "X-Nama Pelanggan-X", "status" => "Menunggu"],
                            ["slot" => "3 | 11:30", "name" => "X-Nama Pelanggan-X", "status" => "Menunggu"]
                        ];

                        // Loop through each booking and create a table row
                        foreach ($bookings as $booking) {
                            echo "<tr>";
                            echo "<td class=\"button-container k2d-bold\">" . htmlspecialchars($booking['slot']) . "</td>";
                            echo "<td>" . htmlspecialchars($booking['name']) . "</td>";

                            // Display the status with color coding
                            if ($booking['status'] == 'Selesai') {
                                echo "<td><span class='green'>" . htmlspecialchars($booking['status']) . "</span></td>";
                            } else {
                                echo "<td><span class='red'>" . htmlspecialchars($booking['status']) . "</span></td>";
                            }

                            echo "</tr>";
                        }
                    ?> -->
                </table>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
