<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
if($_SESSION["c_id"]!="")
{
  $pid = $_POST['p_id'];
  $p_id = $_SESSION["pid"] = $pid;
  $c_id = $_SESSION["c_id"];
  $cart_id = date('dmhis');
  if(in_array($p_id,$_SESSION["shoping-cart"][$pid]))
  {
    echo'<div class="alert alert-danger alert-dismissible">This product Already Added in cart<button class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times</span></button></div>';
  }
  else
  {
    echo '<div class="alert alert-success alert-dismissible">Now Product is Added in your cart<button class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times</span></button></div>';
  }
        $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
        $query = "SELECT * FROM product inner join product_quantity on product.p_id=product_quantity.p_id WHERE product.p_id='{$p_id}' AND product_quantity.p_id='{$p_id}'";
        $result =  mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
        {
            $output.='<div class="row">';
            while($row = mysqli_fetch_assoc($result))
            {
        //This statement use to add cart
       $_SESSION["shoping-cart"][$pid]= array("p_id"=>$p_id,"c_id"=>$c_id,"cart_id"=>$cart_id,
      "p_img"=>$row["p_img"],"p_name"=>$row["p_name"],"p_qnt"=>$row["p_qnt"],"p_measure"=>$row["p_measure"],"p_price"=>$row["p_price"],
      "c_format"=>$row["c_format"]);
                                
          }
          
}
} 
      
       // echo "<pre>"; print_r($cart);echo "</pre>";
      
          //  setcookie($pid,$pid,time()+86400,"/");
        //   print_r($_SESSION["shoping-cart"]);
        //   // unset($_SESSION["shoping-cart"]);
        //  echo "</pre>";
        //  echo count($_SESSION["shoping-cart"]);

        // $product = $_COOKIE[$pid];
        // echo "Add To Cart ".$product;      
        ?>