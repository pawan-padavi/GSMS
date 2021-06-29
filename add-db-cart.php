<?php
session_start();
$p_id = $_POST['p_id'];
$c_id = $_POST['c_id'];
$cart_id = date('ydmis')+rand(1,100);
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_quantity = $_POST['p_quantity'];
$total = $p_price*$p_quantity;

$connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
$query ="INSERT INTO cart(cart_id,c_id,p_id,p_name,p_price,p_quantity,total) VALUES($cart_id,$c_id,'{$p_id}','{$p_name}',$p_price,$p_quantity,$total)";
$result = mysqli_query($connection,$query);
if($result)
{
     unset($_SESSION['shoping-cart'][$p_id]);
    
    echo'<div class="alert alert-success alert-dismissible">Product confirm to order<button class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times</span></button></div>';
}
else
{
     unset($_SESSION['shoping-cart'][$p_id]);
    echo '<div class="alert alert-danger alert-dismissible">ohh sorry some problems arise....<button class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times</span></button></div>';
}

?>
