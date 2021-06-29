<?php
echo "<h6>CATEGORIES</h6><hr />";
include('config.php');
$query = "SELECT COUNT(*) AS'cate' from product_category";
if($result = mysqli_query($connection,$query))
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo"<h1>". $row["cate"]."</h1>";
    }
}
?>