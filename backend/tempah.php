<?php
    include("./config.php");
        $nama = $_POST['nama'];
        $notel = $_POST['notel'];

        $query = "INSERT INTO booking VALUE('','$nama', '$notel','','0')";
        $sql = mysqli_query($con, $query);

        header("location: ../tempah.php");
?>