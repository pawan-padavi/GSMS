<?php
include('config.php');
// dp_id       ordid          c_id    p_id  p_quantity  payment 
$query ="SELECT * FROM dispatchproduct order by c_id DESC";
$result = mysqli_query($connection,$query) or die("Query Not Executed");
$output ="";
if(mysqli_num_rows($result)>0)
{
    $output.="<div class='card'><table class='text-dark table table-sm table-hover table-warning table-borderless' style='border:none;'>
    <div class='header'><thead class='text-dark'>
    <tr><th class='bor' colspan='6' style='border-bottom:1px solid black;'>DISPATCHED PRODUCTS</th></tr>
    <tr>
    <th class='bor' style='border-bottom:5px solid black;'>CUSTOMER</th>
    <th class='bor' style='border-bottom:5px solid black;'>PRODUCT</th>
    <th class='bor' style='border-bottom:5px solid black;'>QNT</th>
    <th class='bor' style='border-bottom:5px solid black;'>PAYMENT</th>
    <th class='bor' style='border-bottom:5px solid black;'>DLVR AT</th>
    <th class='bor' style='border-bottom:5px solid black;'>DISPATCHED</th>
    </tr></thead></div>";
    while($row = mysqli_fetch_assoc($result))
    {
        $output.="<tr>
                <td class='bor' style='border-bottom:1px solid lightblue;'>{$row["c_id"]}</td>
                <td class='bor' style='border-bottom:1px solid lightblue;'>{$row["p_id"]}</td>
                <td class='bor' style='border-bottom:1px solid lightblue;'>{$row["p_quantity"]}</td>
                <td class='bor' style='border-bottom:1px solid lightblue;'>{$row["payment"]}</td>
                <td class='bor' style='border-bottom:1px solid lightblue;'>{$row["deliverd_at"]}</td>
                <th class='bor' style='border-bottom:1px solid lightblue; text-align:center;'><i class='fas fa-check-circle fa-2x'></i></th>
                </tr>";
    }
    echo $output.="</table></div>";
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