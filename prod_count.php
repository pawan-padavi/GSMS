<?php
echo "<h6>PRODUCTS</h6><hr />";
include('config.php');
$query = "SELECT COUNT(*) AS'products' from product";
if($result = mysqli_query($connection,$query))
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo"<h1>". $row["products"]."</h1>";
    }
}
?>