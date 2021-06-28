<?php
    $c_id = $_POST['c_id'];
    $c_fname = $_POST['c_fname'];
    $c_mname = $_POST['c_mname'];
    $c_lname = $_POST['c_lname'];
    $c_mobile = $_POST['c_mobile'];
    $c_email = $_POST['c_email'];
    $c_password = $_POST['c_password'];
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $query = "insert into client_registration(c_id,c_fname,c_mname,c_lname,c_mobile,c_email,c_password) values($c_id,'{$c_fname}','{$c_mname}','{$c_lname}',$c_mobile,'{$c_email}','{$c_password}')";
    $result = mysqli_query($connection,$query);
    if($result)
    {
        echo "Congratulation..(: id:$c_id";
    }
    else
    {
        echo "ohhhhh sorry!";
    }
?>