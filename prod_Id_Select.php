<?php
    include('config.php');
    $q = "SELECT product.p_name,product.p_id FROM product LEFT OUTER JOIN product_quantity ON product.p_id=product_quantity.p_id WHERE product_quantity.p_id IS NULL or product_quantity.p_stock<=0";
    $result = mysqli_query($connection,$q);
    $output ="";
    if(mysqli_num_rows($result) > 0)
    {
        $output.="<select name='p_id' id='p_id' class='form-control' required>
        <option disabled selected>Select Product Name</option>";
        while($row = mysqli_fetch_assoc($result))
        {
        $output.="<option value='{$row["p_id"]}'>{$row["p_id"]}-{$row["p_name"]}</option>";
        }
        $output.="</select>";
    }
    echo $output;
?>