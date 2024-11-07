
<div class="header">
        <div class="img">
            <img src="<?php echo $link; ?>img/barber-tools-pattern1.jpg" alt="Header Image">
        </div>
        <div class="text"><h1 class="k2d-bold">Barber Book</h1></div>
        <!-- Admin login link -->
        <a href="<?php echo $link; ?>Admin/admin-login.php" class="admin-link"><?php 
    if($admin == "admin"){ 
        echo "Logout"; 
    }else{ 
            echo "Login";
    } ?></a>
    </div>
   