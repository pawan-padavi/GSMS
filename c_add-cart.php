<?php
session_start();
if($_SESSION["cid"]!="")
{
error_reporting(0);
$pid = $_POST['p_id'];
//  setcookie($pid,$pid,time()+86400,"/");
$prod = $_SESSION["pid"] = $pid;
// $product = $_COOKIE[$pid];
// echo "Add To Cart ".$product;
echo $prod;

// $connnection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
// $query = "Insert into cart values (cid ,pid, userid,)";
// $result = mysqli_query($connnection,$result);
}
