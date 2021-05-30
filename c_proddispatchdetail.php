<?php
$date = date('Y:m:d H:i:s');
session_start();
include('config.php');
echo "<h1>".strtoupper($_SESSION["c_fname"])." ID:".$_SESSION["c_id"]."</h1><br />";
$query = "SELECT dp.c_id,pd.p_name,dp.p_quantity,dp.dispatched_from,dp.deliverd_at FROM dispatchproduct dp INNER JOIN product pd ON dp.p_id=pd.p_id WHERE dp.c_id={$_SESSION["c_id"]}";
$result = mysqli_query($connection,$query) or die("Not Query Executed");
$output="";
if(mysqli_num_rows($result))
{
    $output="<table class='table'><tr><th colspan='4' class='text-danger bg-warning'>DISPATCED PRODUCT STATUS</th></tr>
    <tr><td>PRODUCT</td><td>QUANTITY</td><td>Dispatched from</td><td>Deliver at</td></tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        $output.="<tr><th>{$row["p_name"]}</th><th>{$row["p_quantity"]}</th><th>{$row["dispatched_from"]}</th><th>{$row["deliverd_at"]}</th></tr>";
    }
    echo $output."</table>";
}
?>