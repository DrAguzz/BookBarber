<?php
    include('./config.php');
        $date = $_POST['date'];
        $query1 = "INSERT INTO slot VALUES('','$date','null')";
        $sql1 = mysqli_query($con, $query1);
        echo '
        <script>
            alert("Berjaya Di tambah");
            window.location.href="../Admin/admin-main.php"
        </script>
        ';
?>