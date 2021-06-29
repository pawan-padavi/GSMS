<?php
    $p_stock = $_POST['p_stock'];
    $p_id = $_POST['p_id'];
    // echo $p_stock." Prod ID: ".$p_id;
    include('config.php');
    $query = "UPDATE product_quantity SET p_stock = p_stock + $p_stock WHERE p_id=$p_id";
    if(mysqli_query($connection,$query))
    {
        echo "data updated";
    }
    else 
    {
        echo "data not update";
    }

?>