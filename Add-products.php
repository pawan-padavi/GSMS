<?php
date_default_timezone_set('Asia/Kolkata');
// echo date_default_timezone_get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Add-category page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">

<style>
#pd_ck{
    height:30px;
    width:30px;
}
</style>

<style>
</style>    
</head>
<body>
    <?php
         include('header.php');
    ?>
    <div class="container"><div class="row"><div class="mt-5 col-md-12 col-lg-12 col-sm-12">
    <center><small>
    <form id="product-data" enctype="multipart/form-data" class="form-group">
    <table class="table table-hover table-md mt-5 ">
        <thead class="thead-dark">
        <tr scope="row"><th scope="col" colspan="4" class="text-center w">Add Product Detail</th></tr>
        </thead>
        <tbody>
                <tr scope="row"><th scope="col" class="text-left">Product Name</th><th scope="col"><input type="text" name="p_name" id="p_name" class="form-control w-100" required></th>
                <th scope="col" class="text-left">Product Image</th><th scope="col"><input type="file" name="p_img" id="p_img" class="form-control w-100 bg-light" required></th>
                <tr scope="row"><th scope="col" class="text-left">Product Description</th><th scope="col"><textarea name="pdesc" id="pdesc" cols="30" rows="1" class="form-control w-100" required></textarea></th>
                
                <th scope="col" class="text-left">Product Category</th><th scope="col"><div id="category"></div></th></tr>

                <tr scope="row"><th scope="col" class="text-left">Product Brand</th><th scope="col"><input type="text" name="p_brand" id="p_brand" class="w-100 form-control" required></th>

                <th scope="col" class="text-left">Product Sub Category</th><th scope="col"><div id="sub-category"></div></th></tr>

                <tr scope="row"><th scope="col" class="text-left">Currency Format</th><th scope="col"><input type="hidden" name="c_format" id="c_format" value="&#8377" class="form-control w-50"><i class="fa fa-rupee-sign"></i></div></th>
                <th scope="col" class="text-left">Product Price</th><th scope="col"><input type="number" name="p_price" id="p_price" class="form-control w-100" required></th></tr>

                <tr scope="row"><th scope="col" class="text-left">Serching Keyword</th><th scope="col"><input type="text" name="p_search" id="p_search" class="form-control w-100" required></th>
                <th scope="col" class="text-left">Product Available</th><th scope="col"><input type="checkbox" name="pd_ck" id="pd_ck" required></th></tr>
                <tr scope="row"><th scope="col" colspan="4"><center><button type="submit" class="btn btn-success" name="p_submit" id="p_submit">Add Product Detail</button></center></th></tr>
        </form>    
        <tr scope="row"><th scope="col" colspan="4"><center><a href="products.php"><button type="button" class="btn btn-info" name="p_view" id="p_view">View Product Detail</button></a></center></th></tr>
        </tbody>
    </table></small>
    <div id="message"></div>
    </center>
    </div></div></div>
    <?php
        // include('footer.php');
    ?>

    <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>

    <script>
    $(document).ready(function(){
        //fetch category for select tag
        $.ajax({
                url:"p_category_select.php",
                type:"POST",
                success:function(data)
                {
                    $('#category').html(data);
                }
           });
        // fetch sub category for sub category select tag
        $.ajax({
                url:"p_sub_categoryselect.php",
                type:"POST",
                success:function(pwn)
                {
                    $('#sub-category').html(pwn);
                }
        }); 
        $('#product-data').on("submit",function(e){
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url:"insert-product.php",
                type:"POST",
                data:formData,
                contentType:false,
                processData:false,
                success:function(data)
                {
                    if(data == 1)
                    {
                    
                        $('#message').removeClass();
                        $('#message').html('Data inserted Successfully');
                        $('#message').addClass('bg-success alert alert-dismissable text-light');
                        $('#product-data').trigger('reset');
                    }
                    else
                    {
                        $('#message').html('Data not inserted');
                        $('#message').addClass('bg-danger alert alert-dismissable text-light');
                    }
                }
            });
        });
    });
    </script>
</body>
</html>