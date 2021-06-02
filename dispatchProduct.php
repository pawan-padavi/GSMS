<?php
include('config.php');
$id =$_POST["id"];
$ordid =$_POST['ordid'];
$dp_id = date('ymdis');
$p_id = $_POST["pid"];
$qnt = $_POST["qnt"];
$payment=$_POST["payment"];
$dp_from = date('Y:m:d');
$dlvrto =date('Y:m:d',strtotime('+2 day'));
// echo "ID: $id PID: $p_id QNT: $qnt PAYMENT: $payment DPID: $dp_id ORDID: $ordid DISPATCH: $dp_from  Deliver: $dlvrto";
$query ="INSERT INTO dispatchproduct values({$dp_id},{$ordid},{$id},{$p_id},{$qnt},'{$payment}','{$dp_from}','{$dlvrto}')"; 
$query1 ="UPDATE product_quantity SET p_stock = p_stock-$qnt WHERE p_id=$p_id";
if(mysqli_query($connection,$query))
{
   if(mysqli_query($connection,$query1))
   {
    echo"Data Dispatched";
   }
   else
   {
       echo "Data not dispatched";
   }
}
else
{
    echo "Failed";
}
?>