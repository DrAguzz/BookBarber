<?php
    include('./config.php');
        $date = date_format($_POST['date'],"Y/m/d");
        $query1 = "INSERT INTO slot VALUES('','$date','null')";
        $sql1 = mysqli_query($con, $query1);
?>