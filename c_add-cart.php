<?php
error_reporting(0);
$pid = $_POST['p_id'];
setcookie($pid,$pid,time()+86400,"/");
$product = $_COOKIE[$pid];
echo "Add To Cart ".$product;

$connnection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
$query = "Insert into cart values (cid ,pid, userid,)";
$result = mysqli_query($connnection,$result);
//padavi pawnasing randansing
//this page is only use for add cart
//padavi pawansingrandiasg