<?php
    $connection =mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $q = "select p_name,p_id from product";
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