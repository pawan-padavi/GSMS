<?php
session_start();
$c_usrname = $_POST['c_usrname'];
$c_pwd = $_POST['c_pwd'];
//  echo "Welcome to login page".$c_usrname;
$connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
$query = "select * from client_registration where c_email ='{$c_usrname}' AND c_password = '{$c_pwd}'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
         $_SESSION["c_usrname"] = "{$row["c_email"]}";
         $_SESSION["c_fname"] = "{$row["c_fname"]}";
         $_SESSION["c_lname"] = "{$row["c_lname"]}";
         $_SESSION["c_id"] = "{$row["c_id"]}";
        
    }
    mysqli_close($connection);
    echo 1;
}

?>