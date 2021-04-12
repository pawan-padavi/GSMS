<?php
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $query = "SELECT * FROM product inner join product_quantity on product.p_id=product_quantity.p_id";
    $result =  mysqli_query($connection,$query);
    $output = "";
    $price = 300;
    if(mysqli_num_rows($result)>0)
    {
        $output.='<div class="row">';
        while($row = mysqli_fetch_assoc($result))
        {
            $star = rand(3,5);
            $price += $row["p_price"];
             $output.= "<div class='col-md-3 col-lg-3 col-sm-12 mb-3'>
             <div class='card border border-light'>
            <div class='card-body'><center>
            <img class='' height='70' src='Assets/upload-images/{$row["p_img"]}'></center>
            <center><small>{$row["p_name"]}&nbsp;{$row["p_qnt"]}<sub>{$row["p_measure"]}</sub></small></center>
            <div class='text-center'><div class='badge badge-danger'><del>$price</del></div>
            <div class='badge badge-success'><stong>{$row["p_price"]}&nbsp;{$row["c_format"]}</strong></div>&nbsp;<div class='badge badge-warning text-light'>$star<i class='fa fa-star'></i></div>
            <div id='cart-nd-qunt'>
            <div><button data-id='{$row["p_id"]}' class='btn Add-cart btn-info'><strong>Add To Cart<i class='fas fa-shopping-cart fa-1x'></i> </strong></button></div>
            </div></div>
            </div>
            </div></div>";
            $price = 300;
        }
        echo $output.="</div>";
    }
?>