<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to GSMS</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
</head>
<body>
    <?php
    include('header.php');
    ?>
    <div class="container"><div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 mt-5"><div class="mt-5 border border-primary py-5 px-5">
        <form id="dispatched_product"><table class="table table-bordered">
        <tr><th class="bg-light text-dark text-uppercase" colspan="2">delivery status</th></tr>
        <tr><th class="bg-light text-dark">ORDER ID</th><td><input type="number" name="dp_id" id="dp_id" class="form-control"></td></tr>
        <tr><th class="bg-light text-dark">STATUS</th><td><select name="d_status" id="d_status" class="form-control">
        <option disabled>select status</option>
        <option value="deliverd">Deliverd</option>
        <option value="return">Return</option>
        <option value="unkown_addr">Unknow Address</option>
        </select></td></tr>
        <tr><th class="bg-light text-dark"colspan="2"><button name="passdata" id="passdata" type="submit" class="btn btn-primary text-uppercase w-25">submit</button></th></tr>
        </table></form>
        </div></div>
        <div class="col-md-6 col-sm-6 col-lg-6 mt-5"><div id="deliver_products" class="mt-5 bg-info rounded text-dark border-primary py-5 px-5">
        </div></div>
    </div></div>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
        $(document).ready(function(){
            $('#passdata').click(function(e){
                e.preventDefault();
                var dp_id = $('#dp_id').val();
                var d_status = $('#d_status').val();
                $.ajax({
                    url:"delivery_product.php",
                    type:"POST",
                    data:{dp_id:dp_id,d_status:d_status},
                    success:function(data)
                    {
                        if(data == 1)
                        {
                            alert("Data Dispatched Successfully");
                            setTimeout(() => {
                                $('#deliver_products').load(' #deliver_produts');
                                deliver_products();
                            }, 100);
                        }
                        else
                        {
                            alert("Please Enter Correct Dispatch ID");
                            setTimeout(() => {
                                $('#deliver_products').load(' #deliver_produts');
                                deliver_products();
                            }, 100);
                        }
                    }
                })
            });
            function deliver_products()
            {
                $.ajax({
                    url:"deliver_products.php",
                    success:function(data)
                    {
                        $('#deliver_products').html(data);
                    }
                })
            }
            deliver_products();
        })
    </script>
</body>
</html>