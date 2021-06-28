<?php
    $p_id = $_POST['p_id'];
    $p_id =implode($p_id,",");
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connected");
    $q = "Delete FROM product where p_id IN($p_id)";
     
    if(mysqli_query($connection,$q))
    {
        echo "Record Delete Successful";
    }
    else
    {
        echo "we are sorry about inconvience!";
    }
?>