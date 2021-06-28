<?php
echo "<h6>SUB-CATEGORIES</h6><hr />";
include('config.php');
$query = "SELECT COUNT(*) AS'sub' from product_sub_category";
if($result = mysqli_query($connection,$query))
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo"<h1>". $row["sub"]."</h1>";
    }
}
?>