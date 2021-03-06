<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GSMS</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <style>
    
    </style>
</head>
<body>
    <?php
    include('header.php');
    ?>
    <div class="container"><div class="row"><div class="col-md-6 col-lg-6 col-sm-6 mt-5"> 
    <div class="mt-5" id="product_orders">
    <!-- ordes displayed -->
    </div></div>
    <div class="col-md-6 col-lg-6 col-sm-6 mt-5"><div class="mt-5" style="margin-left:20px;">
    <div id="dispatcheddata"></div></div></div>
    </div></div>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
    $(document).ready(function(){
        function dispatcheddata()
        {
        $.ajax({
                    url:"fetchdispatchproduct.php",
                    success:function(data)
                    {
                        $('#dispatcheddata').html(data);
                    }
            });
        }
        dispatcheddata();
        var date = new Date();
        $('#time').html(date);
        function productorders()
        {
        $.ajax({
            url:"fetchorders.php",
            success:function(data)
            {
                $('#product_orders').append(data);
            }
         });
        }
        productorders();
        $(document).on("click",".add-discard",function(){
            // alert("good night");
            var id = $(this).data("id");
            var pid = $(this).data("pd");
            var qnt =$(this).data("qnt");
            var ordid =$(this).data("ordid");
            var payment =$(this).data("payment");
            $.ajax({
                url:"dispatchProduct.php",
                type:"POST",
                data:{id:id,pid:pid,qnt:qnt,payment:payment,ordid:ordid},
                success:function(data)
                {
                    // alert(data);
                    setTimeout(() => {
                         $('#product_orders').load(' #product_orders');
                        // $('#dispatcheddata').load(' #dispatcheddata');
                        dispatcheddata();
                        productorders();
                    }, 100);
                }
            })
        })
    });
    </script>
</body>
</html>