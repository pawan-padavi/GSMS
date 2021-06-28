<?php
$dp_id = $_POST["dp_id"];
$d_status = $_POST["d_status"];
include('config.php');
$query = "INSERT INTO product_delivery(dp_id,d_status) VALUES($dp_id,'$d_status')";
$result =mysqli_query($connection,$query) or die("Id not matched");
if($result)
{
    echo 1;
}
else
{
    echo 0;
}
?>