<?php
    include('config.php');
    $query ="SELECT product_delivery.*,dispatchproduct.p_id FROM product_delivery join dispatchproduct on product_delivery.dp_id=dispatchproduct.dp_id";
    $result=mysqli_query($connection,$query) or die("Query not executed");
    $output="";
    if($result)
    {
        $output.='<table class="table table-sm table-bordered"><tr><th colspan="3" class="text-center">PRODUCT DELIVERY STATUS</th></tr><tr><th>DP_ID</th><th>Product id</th><th>Status</th></tr>';
        while($row = mysqli_fetch_assoc($result))
        {
            $output.="<tr><td>{$row["dp_id"]}</td><td>{$row["p_id"]}</td><td>{$row["d_status"]}</td><tr>";
        }
        echo $output.="</table>";
    }
    else
    {
        echo "<h1>Data not found</h1>";
    }
?>