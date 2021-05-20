<?php
include('config.php');
$query ="SELECT * FROM orders";
$result = mysqli_query($connection,$query) or die("Query Not Executed");
$output ="";
if(mysqli_num_rows($result)>0)
{
    $output.="<table class='table table-hovered'><tr><th>#</th></tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        $output.="<tr><td>Padavi Pawansing Randansing</td></tr>";
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