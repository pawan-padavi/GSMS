<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Satpuda.com</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
   <style>
   .mt
   {
       margin-top:100px;
   }
   .thumbnail
   {
       height:80px;
       width:75px;
       border:5px solid white;
   }
   .pd
   {
       text-align:center;
       text-margin-top:10px;
   }
   .prod-number
   {
       width:50px;
   }
  #payment_methods li
   {
        display:flex;
   }
   #payment_methods li
   {
       /* background-color:whitesmoke; */
       padding:10px;
       border:2px solid indigo;
       margin:5px;
       color:indigo;
       border-radius:5px;
   }
   #payment_methods li:last-child
   {
       border:0px solid white;
   }
   .ms
   {
       color:tomato;
   }
   </style>
</head>
<body>
    <?php
        include('C_header.php');
    ?>
    
    <div class="container">
    <div class="row"><col><div id="message"></div></div>
    <div class="row">
        <?php
    //      $_SESSION["shoping-cart"][$pid]= array("p_id"=>$p_id,"c_id"=>$c_id,"cart_id"=>$cart_id,
    //      "p_img"=>$row["p_img"],"p_name"=>$row["p_name"],"p_qnt"=>$row["p_qnt"],"p_measure"=>$row["p_measure"],"p_price"=>$row["p_price"],
    //    "c_format"=>$row["c_format"]);
    //    $path ='Assets/upload-images/';

        $cart = $_SESSION["shoping-cart"];
        // echo"<pre>";
        // print_r($cart);
        // echo"</pre>";
            $output="";
                 $output.='<div class="col-md-6 col-lg-6 col-sm-12 mt">
                 <table class="table">
                 <tr><th scope="col" colspan="6">CART ITEMS DETAIL</th></tr>
                 <tr scope="row">
                 <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col" class="text-center" colspan="2">#</th>
                </tr>';
                foreach($cart as $c)
                {
                    if(!empty($c))
                    {
                    $output.="<tbody><form><tr scope='row'>
                    <input type='hidden' name='p_id' id='p_id' value='{$c["p_id"]}'/>
                    <input type='hidden' name='cart_id' id='cart_id' value='{$c["cart_id"]}'/>
                    <input type='hidden' name='c_id' id='c_id' value='{$c["c_id"]}'/>
                    <td scope='col'> <img name='p_img' id='p_img' class='thumbnail'src='Assets/upload-images/{$c["p_img"]}' alt='Image not found' value='{$c["p_img"]}'></img></td>
                    <td scope='col' class='pd'><input type='hidden' name='p_name' id='p_name' value='{$c["p_name"]}'>{$c["p_name"]}-{$c["p_qnt"]}{$c["p_measure"]}</td>
                    <td scope='col' class='pd'><input type='hidden' class='iprice' name ='iprice' id='iprice' value='{$c["p_price"]}'/>{$c["p_price"]}{$c["c_format"]}</td>
                    <td scope='col' class='pd'><input data-id='{$c["p_id"]}' class='iquantity' name='iquantity' id='iquantity' type='number' value='1' min='1' max='10' /></td>
                    <td scope='col' class='pd'><button type='button' class='btn btn-primary del-cart' data-id='{$c["p_id"]}'><span><i class='fa fa-trash'></i></span></button></td>
                    <td scope='col' class='pd'><button type='submit' class='btn btn-info add-to-order' data-id='{$c["p_id"]}'>Confirm</button></td>
                    </tr></form></tbody>";
                    }
                }
            echo $output.="</table></div>";    
        ?>
    <div class="col-md-6 col-lg-6 col-sm-12 mt">
    <table class="table">
    <tr><th colspan="4">ORDER DETAILS</th></tr>
    <tr>
    <th>Product</th>
    <th>Price</th>
    <th>quantity</th>
    <th>Total</th>
    </tr>
    <?php
    $cid =$_SESSION["c_id"];
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
    $query = "SELECT * from cart where c_id=$cid";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
            <tr><td><?php echo $row["p_name"];?></td>
            <td><?php echo $row["p_price"];?></td>
            <td><?php echo $row["p_quantity"];?></td>
            <td><?php echo $row["total"];?></td></tr>
            
    <?php
        $total = $total + $row["total"];
    }
    }
    ?>
    <tr><td colspan="2"></td>
    <td><b>Grand Total</b></td>
    <td><b><span class="fas fa-rupee-sign"></span>
    <?php echo $total;?>
    </b></td></tr>
    <tr><td colspan="2"></td>
    <td><b> <button type="button" data-toggle="collapse" data-target="#view_pay_method" class="btn btn-success">Make Payment</button> </b></td>
    <td></td></tr>
    <tr><td></td>
    <td colspan="2"><div id="payment_methods">
    <ul id="view_pay_method" class="collapse">
    <span class="ms">Some Payment method not working</span>
        <li><span><input type="radio" name="" id=""disabled></span>&nbsp;Debit Cart</li>
        <li><span><input type="radio" name="" id=""disabled></span>&nbsp;Credit Cart</li>
        <li><span><input type="radio" name="" id="" disabled></span>&nbsp;Online Banking</li>
        <li><span><input type="radio" name="" id=""></span>&nbsp;Cash on Delivery</li>
        <li><button type="submit" class="btn btn-info ordplace w-100">Place Order</button></li>
    </ul></div>
    </td>
    <td></td></tr>
    </table></div></div>
    <button class="btn btn-primary" data-toggle="collapse" data-target="#datahide">Lern more</button>
    <div class="row">
    <div class="col-md-12">
    <p class="collapse" id="datahide">After Add to cart --> set Product quantity--->click to order for confirm order -->Select Payment method and Checkout</p>
    </div></div>
    </div>
    <?php
        include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
    $(document).ready(function(){
    $('.add-to-order').on("click",function(e){
        e.preventDefault();
        var p_id = $('#p_id').val();
        var cart_id = $('#cart_id').val();
        var c_id = $('#c_id').val();
        var p_name = $('#p_name').val();
        var p_price = $('#iprice').val();
        var p_quantity = $('#iquantity').val();
        $.ajax({
            url:"add-db-cart.php",
            type:"POST",
            data:{p_id:p_id,c_id:c_id,cart_id:cart_id,p_name:p_name,p_price:p_price,p_quantity:p_quantity},
            success:function(data)
            {
                $('#message').html(data);
                $('#message').addClass('mt mb-5');
                setTimeout(() => {
                    document.location.reload();
                }, 2000);
            }
        })
    })
    })
    </script>
    <script>
    $(document).ready(function(){
    //script starts Delete products from Cart
        $(document).on("click",".del-cart",function(e){
            e.preventDefault();
            var p_id = $(this).data('id');
            // alert("This Id Send for Delete "+ p_id);
            if(confirm("Do you want to Delete this Product form Cart"))
            {
            $.ajax({
                url:"del-cart.php",
                type:"POST",
                data:{p_id:p_id},
                success:function(data)
                {
                    document.location.reload();
                }
            });
            }
        })
    // script ended for delete product from cart
    //script starts for price calculation
    });
     </script>
</body>
</html>