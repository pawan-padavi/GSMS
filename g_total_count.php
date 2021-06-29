<?php
echo "<h6>GROSS TOTAL</h6><hr />";
include('config.php');
$query = "SELECT SUM(total) AS'total' from orders";
if($result = mysqli_query($connection,$query))
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo"<h1>". $row["total"]."</h1>";
    }
}
?>