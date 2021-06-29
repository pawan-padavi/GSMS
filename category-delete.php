<?php
    $c_id =$_POST['id'];
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $q = "Delete from product_category where c_id = $c_id";
    
    if(mysqli_query($connection,$q))
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
?>