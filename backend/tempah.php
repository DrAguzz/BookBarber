<?php
    include("./config.php");
        $nama = $_POST['nama'];
        $notel = $_POST['notel'];

        $query = "INSERT INTO booking VALUE('','$nama', '$notel','','0')";
        $sql = mysqli_query($con, $query);

        echo "
        <script>
            alert('Berjaya ditempah');
            alert('Cek Whatsapp anda kerana kami akan hubungi anda di Whatsapp');
            window.location.href='../tempah.php';
        </script>
        ";
?>