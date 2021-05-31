<?php
include('config.php');
$query ="SELECT orders.* FROM orders LEFT OUTER JOIN dispatchproduct ON orders.ordid=dispatchproduct.ordid WHERE dispatchproduct.ordid IS NULL order by orders.c_id DESC";
$result = mysqli_query($connection,$query) or die("Query Not Executed");
$output ="";
if(mysqli_num_rows($result)>0)
{
    $output.="<table class='text-dark table table-sm table-hover' style='border:none;'>
    <div class='header'><thead class='text-dark'>
    <tr><th class='bor' colspan='5' style='border-bottom:1px solid black;'>PRODUCT ORDERS</th></tr>
    <tr>
    <th class='bor' '>CUSTOMER</th>
    <th class='bor' >PRODUCT</th>
    <th class='bor' >QNT</th>
    <th class='bor' >PAYMENT</th>
    <th class='bor' >ACTION</th>
    </tr></thead></div>";
    while($row = mysqli_fetch_assoc($result))
    {
        $output.="<tr>
                <td class='bor'>{$row["c_id"]}</td>
                <td class='bor'>{$row["p_id"]}</td>
                <td class='bor'>{$row["p_quantity"]}</td>
                <td class='bor'>{$row["payment"]}</td>
                <th class='bor'><button data-payment='{$row["payment"]}' data-id='{$row["c_id"]}' data-pd='{$row["p_id"]}' data-qnt='{$row["p_quantity"]}' data-ordid ='{$row["ordid"]}' class='btn btn-success add-discard'><i class='fas fa-check-circle'> </i>Dispatch</button></th>
                </tr>";
    }
    echo $output.="</table>";
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