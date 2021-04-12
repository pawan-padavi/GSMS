<?php
session_start();
$p_id = $_POST['p_id'];
$c_id = $_POST['c_id'];
$cart_id = $_POST['cart_id'];
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_quantity = $_POST['p_quantity'];
$total = $p_price*$p_quantity;



/* INSERT INTO cart(cart_id,c_id,p_id,p_name,p_price,p_quantity,total) VALUES(122211,80421023303,'prod-201836
','Red Chilli',500,2,1000);*/

?>