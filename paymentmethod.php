<?php
session_start();
$cid = $_SESSION["c_id"];
date_default_timezone_set('Asia/Kolkata');
$date = date('d:m:y:h:i:s');
$payment = $_POST['payment'];

// echo "Customer Id: ".$cid."Current Time: ".$date."Payment Method: ".$payment;
include('config.php');
$query = "update cart set payment='{$payment}',payment_date='{$date}' where c_id =$cid";
$result =mysqli_query($connection,$query) or die("Query not executer properly");
if($result)
{
    $query1 = "insert into orders select * from cart where c_id={$cid}";
    $result1 = mysqli_query($connection,$query1) or die("not copied data cart to orders");
    if($result1)
    {
        $query2 = "delete from cart where c_id={$cid}";
        $result2 = mysqli_query($connection,$query2) or die("record not deleted from cart");
        if($result2)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }
    else
    {
        echo"Data not copied from cart to orders";
    }
    
}
else
{
    echo"order not successful";
}
?>