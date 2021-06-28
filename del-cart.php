<?php
session_start();
$p_id = $_POST['p_id'];
unset($_SESSION['shoping-cart'][$p_id]);
echo 0;
?>