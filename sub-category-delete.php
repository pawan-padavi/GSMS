<?php
    $sc_id =$_POST['sc_id'];
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $q = "Delete from product_sub_category where sc_id = $sc_id";
    
    if(mysqli_query($connection,$q))
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
?>