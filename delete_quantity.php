<?php
       $p_id = $_POST['p_id'];
        $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
        $q= "delete from product_quantity where p_id='$p_id'";
        $result = mysqli_query($connection,$q);
        if($result)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
?>