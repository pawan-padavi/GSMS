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
       height:250px;
       width:350px;
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
    <div class="row"><div class="col-md-12"><div id="message mb-2"></div></div></div>
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
                 <small><table class="table table-borderless">
                 <tr><th style="border-bottom:1px solid black;" scope="col" colspan="6">PRODUCT CONFIRMATION TABLE</th></tr>';
                foreach($cart as $c)
                {
                    if(!empty($c))
                    {
                    $output.="<tbody><form><tr scope='row'>
                    <input type='hidden' name='p_id' id='p_id' value='{$c["p_id"]}'/>
                    <input type='hidden' name='cart_id' id='cart_id' value='{$c["cart_id"]}'/>
                    <input type='hidden' name='c_id' id='c_id' value='{$c["c_id"]}'/>
                    <td scope='col' style='color:indigo;font-size:20px;'> <img name='p_img' id='p_img' class='thumbnail'src='Assets/upload-images/{$c["p_img"]}' alt='Image not found' value='{$c["p_img"]}'></img><br>
                    <input type='hidden' name='p_name' id='p_name' value='{$c["p_name"]}'>{$c["p_name"]}-{$c["p_qnt"]}{$c["p_measure"]}&nbsp;&nbsp;
                    <input type='hidden' class='iprice' name ='iprice' id='iprice' value='{$c["p_price"]}'/>{$c["p_price"]}{$c["c_format"]}  &nbsp;&nbsp; <input style='width:150px; border:2x solid indigo; color:green;' type='text' name='ctotal' id='ctotal' value='Total: {$c["p_price"]}' disabled/><br><br>
                    <input data-id='{$c["p_id"]}' class='iquantity' name='iquantity' id='iquantity' type='number' value='1' min='1' max='10' />&nbsp; &nbsp;
                    <button type='submit' class='btn btn-success add-to-order' data-id='{$c["p_id"]}'><i class='fas fa-check'></i> Confirm</button>&nbsp; &nbsp;
                    <button type='button' class='btn btn-danger del-cart' data-id='{$c["p_id"]}'><span><i class='fa fa-trash'></i>&nbsp;Remove</span></button><br>
                    </td>
                    </tr></form></tbody>";
                    }
                   
                }
            echo $output.="</table></small></div>";    
        ?>
    <div class="col-md-6 col-lg-6 col-sm-12 mt">
    <small><table class="table table-borderless">
    <tr><th colspan="5" style="color:red;">Make sure to product order final return policy not allowed yet in pendamic*</th></tr>
    <tr><th style="border-bottom:1px solid black;" colspan="5">ORDER DETAILS</th></tr>
    <tr><th>Product</th> <th>Price</th><th>quantity</th><th>Total</th><th>#</th> </tr>
    <?php
    $cid =$_SESSION["c_id"];
    include('config.php');
    $query = "SELECT * from cart where c_id=$cid";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
            <tr><td><input type="hidden" name="cid" id="cid"  value='<?php echo $row["c_id"];?>'/>
            <?php echo $row["p_name"];?><input type="hidden" name="pname" id="pname" value='<?php echo $row["p_name"];?>'></td>
            <td><input type="hidden" name="p_price" id="p_price" value="<?php echo $row["p_price"];?>" /><?php echo $row["p_price"];?></td>
            <td><input style="font-weight:bolder; background:white; width:50px; border:none;" type="hidden" name="p_quantity" id="p_quantity" value="<?php echo $row["p_quantity"];?>" /><?php echo $row["p_quantity"];?></td>
            <td><input style="font-weight:bolder; background:white; width:50px; border:none;" type="hidden" name="total" id="total" value="<?php echo $row["total"];?>"/><?php echo $row["total"];?></td>
            <td><button data-id='<?php echo $row["p_name"];?>' data-qnt='<?php echo $row["p_quantity"];?>' class="btn text-danger delete-item"><i class="fa fa-trash"></i></button></td></tr>
            
    <?php
        $total = $total + $row["total"];
    }
    }
    ?>
    <tr><td colspan="3" style="border:1px solid indigo; border-right:none;"><b>Grand Total</b></td>
    <td colspan="2"style="border:1px solid indigo; border-left:none;">
    <b><span class="fas fa-rupee-sign"></span>
    <?php echo $total;?>
    </b></td></tr>
    <tr><td colspan="2"></td>
    <td colspan="3"><b> <button type="button" id="paymethod" data-toggle="collapse" data-target="#view_pay_method" class="btn btn-success"><span class="far fa-credit-card"></span>&nbsp;Pay</button> </b></td>
    </tr>
    <tr><td></td>
    <td colspan="3"><div id="payment_methods">
    <ul id="view_pay_method" class="collapse">
    <span class="ms">online payment gateway under working</span>
        <li><span><input type="radio" name="paymentmethod" id="paymentmethod1" value="Debit_card" disabled /></span>&nbsp;Debit Cart</li>
        <li><span><input type="radio" name="paymentmethod" id="paymentmethod2" value="credit_card" disabled /></span>&nbsp;Credit Cart</li>
        <li><span><input type="radio" name="paymentmethod" id="paymentmethod3" value="online_banking" disabled /></span>&nbsp;Online Banking</li>
        <li><span><input type="radio" name="paymentmethod" id="paymentmethod4" value="cash_on_delivery" checked /></span>&nbsp;Cash on Delivery</li>
        <li><button type="submit" class="btn btn-info ordplace w-100" id="product-order">Place Order</button></li>
    </ul></div>
    </td>
    <td></td></tr>
    </table></small></div></div>
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
    $(document).on("click",".delete-item",function(){
        var item = $(this).data('id');
        var qnt = $(this).data('qnt');
        var cid = $('#cid').val();
        if(confirm("Do you want to delete ?"))
        {
            $.ajax({
                url:"delete-cart-items.php",
                type:"POST",
                data:{item:item,cid:cid,qnt:qnt},
                success:function(data)
                {
                    $('#message').html("Data Deleted Successfully");
                    $('#message').addClass('mt-5 alert alert-info');
                    setTimeout(() => {
                        document.location.reload();
                    }, 600);
                }
            });
        }
    })
    });
</script>
//order
<script>
     $(document).ready(function(){
         $('.iquantity').on("change",function(){
             var iqt = $(this).val();
             var price = $('#iprice').val();
            var total = iqt*price;
            $('#ctotal').val('Total: '+total);
            //  alert(total);
         });
         $('#product-order').on("click",function(){
            var pname =$('#pname').val();
              var payment = $('input[name="paymentmethod"]:checked').val();
                // alert(payment);
                $.ajax({
                    url:"paymentmethod.php",
                    type:"POST",
                    data:{payment:payment,pname:pname},
                    success:function(data)
                    {
                        if(data == 1)
                        {
                            alert("Order placed successfully");
                        }
                        else if(data == 0)
                        {
                            alert("Order not place successfully");
                        }
                        else
                        {
                            alert(data);
                        }
                        alert(data);
                        location.replace('C_myaccount.php');
                    }
                });
         });
     });
</script>
</body>
</html>