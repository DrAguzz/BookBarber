<?php
include('../backend/config.php'); // Includes the database configuration

// Define paths for linking assets and setting admin path
$link = "../";
$admin = "admin";

// Retrieve bookings data from the database
$query = "SELECT * FROM booking";
$sql = mysqli_query($con, $query);
$query2 = "SELECT * FROM admin";
$sql2 = mysqli_query($con, $query2);
$row = mysqli_fetch_array($sql2);

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
        require("../component/header/header.php"); // Include the header component
    ?>

    <div class="main-content">
        <div class="content">
            <!-- Admin Information Section -->
            <div class="admin-info">
                <img src="../img/profile-icon.png" alt="Profile Icon">
                <p class="w32 k2d-bold">X- <?php echo $row['name'];?> -X</p>
                <p class="w32 k2d-bold">Kata Laluan :  *****</p>
                <p class="w32 k2d-bold">No. Tel :  <?php echo  $row['notel'];?></p>
                <p class="w32 k2d-bold">Emel :  <?php echo $row['email'];?></p>
                <a href="./admin-edit.php"><button class="edit-button">Edit</button></a>
            </div>

            <!-- Add Slot Form -->
            <div class="tempahan-info">
                <div class="label">
                    <p class="k2d-bold">Tambah Slot</p>
                </div>
                <form action="../backend/main.php" class="add-slot" method="POST">
                    <div class="select-date">
                        <label for="date">Tarikh</label>
                        <input type="date" name="date" id="date" style="margin-left: 20px;">
                    </div>
                    <button type="submit" name="submit" class="add-button">+ Tambah</button>
                </form>

                <!-- Bookings List -->
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
                        <?php
                            $bil = 1; 
                            while($row = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td>
                                <a href="../backend/updateSelesai.php?id=<?php echo $row['id'];?>" class="button-container k2d-bold <?php echo ($row['status'] == 0) ? "bc-red" : "bc-green"; ?>" style="">
                                    <?php echo $bil; ?>
                                </a>
                            </td>
                            <td>
                                <p style="color: black;">
                                    <a href="https://www.wasap.my/6<?php echo htmlspecialchars($row['Notel_Pelanggan']); ?>/Awal%20nak%20potong%20X" style="color: black; text-decoration: underline;" class="k2d-bold">
                                        <?php echo htmlspecialchars($row['nama_pelanggan']); ?>
                                    </a>
                                </p>
                            </td>
                            <td>
                                <p class="k2d-bold"><?php echo ($row['status'] == 0) ? "Menunggu" : "Selesai"; ?></p>
                            </td>
                        </tr>
                        <?php 
                            $bil++;
                            }
                        ?>

                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
