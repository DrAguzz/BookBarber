<?php
    include('./config.php');
        $d = $_POST['date'];
        $date = date_format($d,"Y/m/d");
        $query1 = "INSERT INTO slot VALUES('','$date','null')";
        $sql1 = mysqli_query($con, $query1);
?>