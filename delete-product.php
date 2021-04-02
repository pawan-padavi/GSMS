<?php
    $p_id =$_POST['p_id'];
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $q = "Delete FROM product where p_id='$p_id'";
    
    if(mysqli_query($connection,$q))
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
?>