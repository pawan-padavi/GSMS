<?php
include('config.php');
// dp_id       ordid          c_id    p_id  p_quantity  payment 
$query ="SELECT dispatchproduct.* FROM dispatchproduct left join product_delivery on dispatchproduct.dp_id=product_delivery.dp_id where product_delivery.dp_id is null";
$result = mysqli_query($connection,$query) or die("Query Not Executed");
$output ="";
if(mysqli_num_rows($result)>0)
{
    $output.="<table class='text-dark table table-sm table-hover' style='border:none;'>
    <div class='header'><thead class='text-dark'>
    <tr><th class='bor' colspan='6' style='border-bottom:1px solid black;'>DISPATCHED PRODUCTS</th></tr>
    <tr>
    <th class='bor' >DP_ID</th>
    <th class='bor' >CUSTOMER</th>
    <th class='bor' >PRODUCT</th>
    <th class='bor' >QNT</th>
    <th class='bor' >PAYMENT</th>
    <th class='bor' >DLVR AT</th>
    <th class='bor' >DISPATCHED</th>
    </tr></thead></div>";
    while($row = mysqli_fetch_assoc($result))
    {
        $output.="<tr>
                <td class='bor' >{$row["dp_id"]}</td>
                <td class='bor' >{$row["c_id"]}</td>
                <td class='bor' >{$row["p_id"]}</td>
                <td class='bor' >{$row["p_quantity"]}</td>
                <td class='bor' >{$row["payment"]}</td>
                <td class='bor' >{$row["deliverd_at"]}</td>
                <th class='bor text-center'><i class='fas fa-check-circle fa-2x'></i></th>
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