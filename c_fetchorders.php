<?php
session_start();
error_reporting(0);
$name = $_SESSION['c_fname'];
$c_id = $_SESSION['c_id'];
// echo "<h1>Hello $name  $c_id </h1>";
include('config.php');
$query = "select * from orders where c_id ={$c_id}";
$result = mysqli_query($connection,$query);
$output ="";
$total ="";
if(mysqli_num_rows($result)>0)
{
    $output.="<table class='table' id='order'><tr><th colspan='6'>ORDERED PRODUCT DETAILS</th></tr><tr><th>#</th><th>ORDER ID</th><th>PRODUCT</th><th>PRICE</th><th>QUANTITY</th><th>TOTAL</th></tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        $total;
     $output.="<tr>
                <td style='color:green;'><i class='fas fa-check-circle'></i></td>
                <td>{$row["ordid"]}</td>
                <td>{$row["p_name"]}</td>
                <td>{$row["p_price"]}</td>
                <td>{$row["p_quantity"]}</td>
                <td>{$row["total"]}</td>
               </tr>";
               $total +=$row["total"];
    }
    echo $output.="<tr><th colspan='4'>Grand Total</th><th>{$total}</th><th></th></tr></table>";
}
?>
<!--ordid c_id p_id p_name p_price  p_quantity  total  payment  cart_date payment_date-->