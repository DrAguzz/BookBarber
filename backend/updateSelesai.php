<?php
    include('./config.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM booking WHERE id = $id";
    $sql = mysqli_query($con, $query);
    $row = mysqli_fetch_array($sql);
    if($row['status' == 0]){
        $q_update = "UPDATE booking SET status = 1 WHERE id = $id";
        $sql_upt = mysqli_query($con, $q_update);
        echo"
        <script>
            alert('Berjaya Di kemaskini');
            window.location.href='../Admin/admin-main.php'
        </script>
        ";
    }else if($row['status' == 1]){
        echo"
        <script>
            alert('Sudah Di tetapkan sebelum ini');
            window.location.href='../Admin/admin-main.php'
        </script>
        ";
    }
?>