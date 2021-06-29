<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Products.php page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <style>
        #product-update-data{
            
        }
        #buttons li
        {
            display:inline-flex;
            padding:5px;
        }
        #buttons li button
        {
            border-radius:5px 5px 5px 5px;
        }
        #buttons li button:hover
        {
            background:indigo;
            color:white;
        }
        .sd
        {
            /* border:2px solid red; */
            box-shadow:0px 5px 5px 0px indigo;
            background:black;
            color:white;
        }
    </style>
</head>
<body>
    <?php
    include('header.php');
    ?> 
    <div class="container "><div class="row"><div class="mt-5 col-md-12 col-lg-12 col-sm-12">
    <div id="message1" class='mt-2'></div> <div class='mt-2' id="message"></div><center><div id="view_q_delete"></div></center><center><div id="delete"></div></center>
    <div id="product-update" class="mt-5"></div>
    <div id="view-img-updt" class="mt-5"></div>
           <center class="mt-5">            
           <div id="buttons"><ul>
                   <li><a href="add-products.php"><button class="btn sd"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Products</button></a></li>
                   <li><a href="#product-images.php"><button class="btn sd"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Images</button></a></li>
                   <li><a href="#add-product-discount.php"><button class="btn sd"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Discount</button></a></li>
                   <li><a href="Add-prod-quantity.php"><button class="btn sd"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Quantity</button></a></li>
               </ul>
            </div>
           </center>
    <div id="view-product"></div>
    </div></div></div>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
    $(document).ready(function(){
        
       //fetch product data and set on view-product div
       function viewproduct()
       {
        $.ajax({
            url:"view-product.php",
            type:"POST",
            success:function(data)
            {
                $('#view-product').html(data);
            }
        });
       }
       viewproduct();
     //Delete data from product table
        $(document).on("click","#delete-button",function(e){
           e.preventDefault();
           var p_id = [];
        //    alert("you select delete button");
            $(":checkbox:checked").each(function(key){
                p_id[key] = $(this).val();
            });
            if(p_id=="")
            {
                alert("You are not select data for delete");
            }
            else
            {
            if(confirm("Do You really want to Delete this"))
            {
            $.ajax({
                url:"delete-product.php",
                type:"POST",
                data:{p_id: p_id},
                success:function(data)
                {
                       $('#message').html(data);
                       $('#message').addClass('alert bg-success text-center text-light mt-5');
                       setTimeout(() => {
                           $('#view-product').load(" #view-product");
                           viewproduct();
                       }, 100);
                }
            })
            }}
        });
        // fetch data for update product
        $(document).on("click",".product-update",function(e){
            e.preventDefault();
            var p_id = $(this).data('prod_update');
            $.ajax({
                url:"product-update.php",
                type:"POST",
                data:{p_id:p_id},
                success:function(data)
                {
                    $('#product-update').html(data);
                    $('#view-product').hide();
                     $('#delete').hide();
                    $('#message').hide();
                    $('#delete-button').hide();
                }
            });
        });
        //update product data 
        $(document).on("click",".product-update-submit",function(e){
            e.preventDefault(); 
            var p_id = $("#p_id").val();
            var p_name = $("#p_name").val();
            var pdesc = $("#pdesc").val();
            var p_brand = $("#p_brand").val();
            var c_name = $("#c_name").val();
            var sc_name = $("#sc_name").val();
            var p_search = $("#p_search").val();
            var p_price = $("#p_price").val();
            $.ajax({
                url:"product-updt.php",
                type: "POST",
                data:{p_id: p_id, p_name: p_name, pdesc:pdesc, p_brand:p_brand, p_search:p_search, p_price:p_price, c_name: c_name, sc_name: sc_name},
                success:function(data)
                {
                    if(data == 1)
                    {
                        // alert("data updated");
                        $('#message1').removeClass();
                        $('#message1').html('Data updated Successfully');
                        $('#message1').addClass('text-light bg-success  alert border border-success text-center mt-2 mb-2');
                        // alert(" Sub Category Update Successfully");
                        
                    }
                    else
                    {
                        alert('Data not updated');
                        $('#message').html('Data not updated');
                        $('#message').addClass('text-light bg-warning alert border border-warning text-center mb-2');
                       
                    }
                }
            })
        })
        //view product quntity table for delete data
        $('#delete').on("click",function(e){
            e.preventDefault();
            $.ajax({
                url:"p_qnt_delete_selet.php",
                type:"POST",
                success:function(data)
                {
                    $('#view_q_delete').html(data);
                    $('#view-product').hide();
                    $('#delete').hide();
                    $('#message').hide();
                }
            })
        })
        //delete product quantity
        $(document).on("click",".p_qnt_select",function(e){
            e.preventDefault();
           var p_id = $(this).data('id');
            $.ajax({
                url:"delete_quantity.php",
                type:"POST",
                data:{p_id: p_id},
                success:function(data)
                {
                    if(data==1)
                    {
                        $('#message1').removeClass();
                        $('#message1').html("Deleted Quantity");
                        $('#message1').addClass('alert bg-light text-success text-center');
                        setTimeout(Anim,1);
                        function Anim(){
                        document.location.reload();
                                    }
                    }
                    else
                    {
                        $('#message1').html("Not Deleted Quantity");
                        $('#message1').addClass('alert bg-light text-danger text-center');
                    }
                }
            })
        })
        //view image updation form
        $(document).on("click",".product-img-updt",function(e){
            e.preventDefault();
            var p_id = $(this).data('prod_img');
            $.ajax({
                url : "product-img-update.php",
                type : "POST",
                data : {p_id:p_id},
                success : function(data){
                    $('#view-img-updt').html(data);
                    $('#view-product').hide();
                    $('#delete-button').hide();
                }
            })
        })  
    });
    $(document).on("change","#p_stock",function(){
        var p_stock = $(this).val();
        var p_id = $(this).data('id');
        $.ajax({
            url:"p_stock_update.php",
            type:"POST",
            data:{p_stock:p_stock,p_id:p_id},
            success:function(data)
            {
                $('#p_stock').load(' #p_stock');
                viewproduct();
            }
        })
    })
    </script>
</body>
</html>