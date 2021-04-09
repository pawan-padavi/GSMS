<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
if($_SESSION["c_id"]!="")
{
 error_reporting(0);
$pid = $_POST['p_id'];
//  setcookie($pid,$pid,time()+86400,"/");

 $p_id = $_SESSION["pid"] = $pid;
 $c_id = $_SESSION["c_id"];
 $cart_id = date('dmhis');
// $product = $_COOKIE[$pid];
// echo "Add To Cart ".$product;

 $connnection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
 $query = "INSERT into cart(cart_id,c_id,p_id) VALUES($cart_id,$c_id,'{$p_id}')";
 $result = mysqli_query($connnection,$query);
// insert into cart(cart_id,c_id,p_id) VALUES(04154244,80421023303,'prod-201836')
 if($result)
 {
     
     echo "Added in cart"." ".$p_id;
 }
 else
 {
     echo 0;
 }
}
