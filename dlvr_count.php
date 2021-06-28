<?php
echo "<h6>DELIVERED</h6><hr />";
include('config.php');
$query = "SELECT COUNT(*) AS'disp' from dispatchproduct";
if($result = mysqli_query($connection,$query))
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo"<h1>". $row["disp"]."</h1>";
    }
}
?>