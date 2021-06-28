<?php

    $sc_id =  $_POST['sc_id'];
    $c_name = $_POST['c_name'];
    $sc_name = $_POST['sc_name'];
    $sp_ck =  $_POST['sp_ck'];
    if(!$sc_name=="" AND !$sp_ck=="")
    {
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $q = "UPDATE  product_sub_category set c_name = '$c_name', sc_name = '$sc_name', sp_ck = '$sp_ck' WHERE sc_id = $sc_id";
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