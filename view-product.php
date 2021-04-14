<?php
    $conn=mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Connection Failed");
    $sql="SELECT product.p_id, product.p_name, product.p_img, product.pdesc, product.c_name, product.sc_name, product.p_brand, product.p_price, product.c_format, product_quantity.p_qnt, product_quantity.p_measure FROM product LEFT JOIN product_quantity ON product.p_id=product_quantity.p_id";
    $result=mysqli_query($conn,$sql) or die("SQL Query failed");
    $output= "";
    if(mysqli_num_rows($result) > 0)
    {
        $output = '<small><form id=""><table class="table table-md table-hover">
        <thead class="text-center">
        <tr scope="row">
        <th scope="col">ID</th>
        <th scope="col"> Name</th>
        <th scope="col"> Image</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Qty</th>
        <th scope="col">Dlt</th>
        <th scope="col">updt</th>
        <th scope="col">updt img</th>
        </tr></thead>';
        while ($row=mysqli_fetch_assoc($result)) {
            $output .="<tbody class='text-center'><tr><td><input type='hidden' name='p_id' id='p_id' value='{$row["p_id"]}'>{$row["p_id"]}</td>
            <td><input type='hidden' name='p_name'id='p_name' class='form-control w-100' value='{$row["p_name"]}'>{$row["p_name"]}</td>
            <td><img src='Assets/upload-images/{$row["p_img"]}'alt='image not found' height='60'></img></td>
            <input type='hidden' name='pdesc'id='pdesc' class='form-control w-100' value='{$row["pdesc"]}'>
            <td><input type='hidden' name='c_name'id='c_name' class='form-control w-100' value='{$row["c_name"]}'>{$row["c_name"]}</td>
            <input type='hidden' name='sc_name'id='sc_name' class='form-control w-100' value='{$row["sc_name"]}'>
            <input type='hidden' name='p_brand'id='p_brand' class='form-control w-100' value='{$row["p_brand"]}'>
            <td><input type='hidden' name='p_price'id='p_price' class='form-control w-100' value='{$row["p_price"]}'>{$row["p_price"]}&nbsp;<span class='fas fa-rupee-sign'></span></td>
            <td><input type='hidden' name='p_qnt' id='p_qnt' class='form-control w-100' value='{$row["p_qnt"]}'>{$row["p_qnt"]}&nbsp;{$row["p_measure"]}</td>
            <td><button data-prod_delete='{$row["p_id"]}' class='btn product-delete btn-danger'><i class='fas fa-trash'></i></button></td>
            <td><button data-prod_update='{$row["p_id"]}' class='btn product-update btn-warning'><i class='fas fa-edit'></i></button></td>
            <td><button data-prod_img='{$row["p_id"]}' class='btn product-img-updt btn-secondary'><i class='fas fa-edit'></i>img</button></td>
            </tr></tbody>";
        }
        $output .="</table></form></small>";
        mysqli_close($conn);
        echo $output;
    }
    else
    {
    echo"<h2>No record found</h2>";
    } 
?>
