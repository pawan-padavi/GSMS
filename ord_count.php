<?php
echo "<h6>ORDERS</h6><hr />";
include('config.php');
$query = "SELECT COUNT(*) AS'orders' from orders";
if($result = mysqli_query($connection,$query))
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo"<h1>". $row["orders"]."</h1>";
    }
}
?>