<?php
include('config.php');
$id =$_POST["id"];
$ordid =$_POST['ordid'];
$dp_id = date('ymdis');
$p_id = $_POST["pid"];
$qnt = $_POST["qnt"];
$payment=$_POST["payment"];
$dp_from = date('Y:m:d H:i:s');
$d =date('d')+1;
$dlvrto =date('Y:m:d',strtotime('+2 day'));
// echo "ID: $id PID: $p_id QNT: $qnt PAYMENT: $payment DPID: $dp_id ORDID: $ordid";
$query ="INSERT INTO dispatchproduct values({$dp_id},{$ordid},{$id},{$p_id},{$qnt},'{$payment}','{$dp_from}','{$dlvrto}')"; 
if($result = mysqli_query($connection,$query))
{
    
        echo"Data Dispatched";
   
}
else
{
    echo "Failed";
}
?>