<?php
include('../backend/config.php');
    $link = "../";
    $admin = "admin";
    include("../backend/config.php");
    $query = "SELECT * FROM booking";
    $sql = mysqli_query($con, $query);
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
    ?>

    <div class="main-content">
        <div class="content">
            <div class="admin-info">
                <img src="../img/profile-icon.png" alt="Profile Icon">
                <p class="w32 k2d-bold">Nama : X- Nama -X<?php ?></p>
                <p class="w32 k2d-bold">Kata Laluan : ************</p>
                <p class="w32 k2d-bold">No. Tel : 01X-XXXXXXX</p>
                <p class="w32 k2d-bold">Emel : XXXXXX@gmail.com</p>
                <a href="./admin-edit.php"><button class="edit-button" >Edit</button></a>
            </div>

        <div class="tempahan-info">
<<<<<<< HEAD

=======
>>>>>>> be03cfd264d83abff42faeb9607ea7f7356c7021
            <div class="label">
                <p class="k2d-bold">Tambah Slot</p>
            </div>
            <form action="../backend/main.php" class="add-slot" method="POST">
                <div class="select-date">
                    <label for="date">Tarikh</label><input type="date" name="date" id="date" style="margin-left: 20px;">
                </div>
                <button type="submit" name="submit" class="add-button">+ Tambah</button>
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
<<<<<<< HEAD
                    <!-- <tr>
=======
                    <?php
                        $bil = 1; 
                        while($row = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
>>>>>>> be03cfd264d83abff42faeb9607ea7f7356c7021
                        <td>
                            <button class="button-container k2d-bold <?php echo ($row['status'] == 0) ? "bc-red" : "bc-green"; ?>"><?php echo $bil;?></button>
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
<<<<<<< HEAD
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
                    </tr> -->
                    <?php
                         // Loop through each booking and create a table row
                        $list = mysqli_query($con, "SELECT s.id as slot_id, s.date , b.nama_pelanggan, b.status FROM slot s LEFT JOIN booking b ON s.id = b.id ORDER BY s.id");

                        while ($row = mysqli_fetch_array($list)) {

                            echo "<tr>";
                            echo "<td><div class=\"button-container k2d-bold bc-red\">".$row['slot_id']."|".$row['date']."</div></td>";
                            echo "<td>" . $row['nama_pelanggan'] . "</td>";
                            
                            $status = "";
                            if ($row["nama_pelanggan"]) {
                                if ($row["status"] == 0) {
                                    $status = "Menunggu";
                                }
                            } else {
                                $status = "Selesai";
                            }

                            echo "<td>" . $status . "</td>";
                            echo "</tr>";
                        $bil++;
                        }
                    }
                    ?>
                </table>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
