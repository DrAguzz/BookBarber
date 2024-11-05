<?php
    include('./config.php');
    $query1 = "SELECT * FROM admin WHERE id = 1";
    $sql1 = mysqli_query($con, $query1);
    $row = mysqli_fetch_array($sql1);
        $nama = $_POST['nama'];
        $pw = $_POST['pw'];
        $hashed = password_hash($pw, PASSWORD_DEFAULT);

        if($nama == $row['name']){
            if(password_verify($pw, $row['password'])){
                session_start();
                $_SESSION['admin'] = $nama;
                echo'
                <script>
                    alert("Berjaya");
                    window.location.href="../Admin/admin-main.php"
                </script>
                ';
            }else{
                echo'
                <script>
                    alert("Pass Anda Salah");
                    window.location.href="../Admin/admin-login.php"
                </script>
                ';
            }
        }else{
            echo'
            <script>
                alert("Nama Anda Salah");
                window.location.href="../Admin/admin-login.php"
            </script>
            ';
        }
?>