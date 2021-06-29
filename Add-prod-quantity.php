<?php
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-prod-quantity.php</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
</head>
<body>
<?php
        include('header.php');
    ?>
    <div class="container"><div class="row"><div class="mt-5 col-md-12 col-lg-12 col-sm-12">
        <div id="message"></div>
    <center><table class="table table-bordered mt-5 table-hover w-50">
        <form name="add-prod-quantity" id="add-prod-quantity" class="form-group">
    <thead class="thead-dark"><tr scope="row"><th scope="col" class="text-center" colspan="2">Add Product Quantity form</th></tr>
    </thead>    
    <tbody>
        <tr scope="row"><th scope="col">ID</th><td scope="col"><input class="form-control w-100" type="hidden" id="p_qnt_id" name="p_qnt_id" value="<?php echo date('Yms'); ?>"><?php echo date('Yms'); ?></td></tr>
        <!-- fetch product id/product name -->
        <tr scope="row"><th scope="col">Product Name</th><td scope="col"><div id="view-prod"></div></td></tr>
        <tr scope="row"><th scope="col">Net Weight</th><td scope="col"><input class="form-control w-100" type="number" name="p_qnt" id="p_qnt" required placeholder="Enter product weight only"></td></tr>
        <tr scope="row"><th scope="col">Unit</th><td scope="col"><select class="form-control w-100" name="p_measure" id="p_measure" required>
            <option disabled selected>Select Measurement</option>
            <option value="&#13199"><b>&#13199</b></option>
            <option value="gm">gm</option>
            <option value="&#x2113">&#x2113</option>
            <option value="mtr">mtr</option>
        </select></td></tr>
        <tr scope="row"><th scope="col">Stock</th><td scope="col"><input type="number" name="p_stock" id="p_stock" class="form-control w-100" required></td></tr>
        <tr scope="row"><th scope="col" colspan="2" class="text-center"><button type="submit" name="add_prod_qty" id="add_prod_qty" class="btn btn-success add-prod-qnt"><span><i class="fas fa-plus"></i></span>&nbsp;Add</button></th></tr>
        </form>
        <tr><th colspan="2" class='text-center'><a href="products.php"><button class="btn btn-info">Go to Products Page</button></a></th><tr>
        </tbody>
    </table>
    
</center>
    </div></div></div>
<?php
        include('footer.php');
?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
        $(document).ready(function(){
            //fetch _id from product table for select tag
            $.ajax({
                url:"prod_id_select.php",
                type:"POST",
                success:function(data)
                {
                    $('#view-prod').html(data);
                }
            });
          //insert data to product-quantity
          $(document).on("click",".add-prod-qnt",function(e){
            e.preventDefault();
            
            // var formData = new FormData(this);
            var p_qnt_id = $('#p_qnt_id').val();
            var p_id = $('#p_id').val();
            var p_qnt = $('#p_qnt').val();
            var p_measure = $('#p_measure').val();
            var p_stock = $('#p_stock').val();
           
            $.ajax({
                url:"insert_prod_quantity.php",
                type:"POST",
                data:{p_qnt_id:p_qnt_id, p_id: p_id,p_qnt:p_qnt,p_measure:p_measure,p_stock:p_stock},
                success:function(data)
                {
                    if(data == 1)
                    {
                        $('#message').removeClass();
                        $('#message').html('Quntity Added Successfully');
                        $('#message').addClass('alert bg-success mt-2 text-light text-center');
                        setTimeout(Anim,5000);
                        function Anim(){
                        document.location.replace('products.php');
                                    }
                    }
                    else
                    {
                        $('#message').html('all field are required or product quntity already Added');
                        $('#message').addClass('alert mt-2 bg-danger text-center text-light');
                        setTimeout(Anim,5000);
                        function Anim(){
                        document.location.reload();
                                    }
                    }
                }
            })
          })
        })
    </script>
</body>
</html>