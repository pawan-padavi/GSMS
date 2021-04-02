<?php
error_reporting(0);
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $q ="select p.p_name,pq.p_qnt,pq.p_stock, pq.p_id,pq.p_measure from product p JOIN product_quantity pq ON p.p_id=pq.p_id";
    $result = mysqli_query($connection,$q);
    $output = "";
    if(mysqli_num_rows($result)>0)
    {
        $output.="<form class='form-group mt-2 w-50' name='p_qnt_select' id='p_qnt_select'><table class='table table-bordered table-hover'>
        <thead class='thead-dark'><tr><th>ID</th><th>Product</th><th>Quantity</th><th>Stock</th><th>#</th></tr></thead>";
        while($row = mysqli_fetch_assoc($result))
        {
        $output.="<tr><th><input type='hidden' value='{$row["p_id"]}' name='p_id' id='p_id'>{$row["p_id"]}</th>
                  <th><input type='hidden' value='{$row["p_name"]}' name='p_name' id='p_name'>{$row["p_name"]}</th>
                  <th><input type='hidden' value='{$row["p_qnt"]}' name='p_qnt' id='p_qnt'>{$row["p_qnt"]}&nbsp;{$row["p_measure"]}</th>
                  <th><input type='hidden' value='{$row["p_stock"]}' name='p_stock' id='p_stock'>{$row["p_stock"]}</th>
                  <th><button class='btn btn-info p_qnt_select' data-id='{$row["p_id"]}'>Delete</button></th></tr>";
        }
        
    }
    echo $output.='</table></form>';
?>