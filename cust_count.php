<?php
echo "<h6>CUSTOMERS</h6><hr />";
include('config.php');
$query = "SELECT COUNT(*) AS'customers' from client_registration";
if($result = mysqli_query($connection,$query))
{
    while($row=mysqli_fetch_assoc($result))
    {
    echo"<h1>". $row["customers"]."</h1>";
    }
}
?>