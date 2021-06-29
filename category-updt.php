<?php

    $c_id =  $_POST['c_id'];
    $c_name = $_POST['c_name'];
    $p_ck =  $_POST['p_ck'];
    if(!$c_name == "" AND !$p_ck =="")
    {
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $q = "UPDATE  product_category set c_name = '$c_name', p_ck = '$p_ck' WHERE c_id = $c_id";
    if(mysqli_query($connection,$q))
    {
        echo 1;
    }
    }
    else
    {
        echo 0;
    }
?>