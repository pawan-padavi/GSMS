<?php
include('config.php');
$query ="SELECT * FROM orders";
$result = mysqli_query($connection,$query) or die("Query Not Executed");
$output ="";
if(mysqli_num_rows($result)>0)
{
    $output.="<table class='table table-hover'><tr>
    <th>Cust ID</th>
    <th>Product</th>
    <th>Payment</th>
    <th>#</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        $output.="<tr>
                <td>{$row["c_id"]}</td>
                <td>{$row["p_name"]}</td>
                <td>{$row["payment"]}</td>
                <td></td>
                </tr>";
    }
    echo $output.="</table>";
    echo date('ydmis').+rand(1,100);
}
?>
<!--ordid
    c_id
    p_id 
    p_name
    p_price
    p_quantity
    total
    payment
    cart_date
    payment_date -->