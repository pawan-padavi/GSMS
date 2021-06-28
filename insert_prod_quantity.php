
<?php
    $p_qnt_id =$_POST['p_qnt_id'];
    $p_id =$_POST['p_id'];
    $p_qnt =  $_POST['p_qnt'];
    $p_measure = $_POST['p_measure'];
    $p_stock = $_POST['p_stock'];

    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("data base not connect");
    $q ="insert into product_quantity values($p_qnt_id,'$p_id',$p_qnt,'$p_measure',$p_stock)";
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