<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GSMS</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
</head>
<body>
    <?php
    include('header.php');
    ?>
    <div class="container"><div class="row"><div class="col-md-6 col-lg-6 col-sm-6 mt-5">
    <button class="btn border border-dark mt-5" id="time"></button>
    <div class="mt-1" id="product_orders">
    <!-- ordes displayed -->
    </div></div>
    <div class="col-md-6 col-lg-6 col-sm-6 mt-5"><div class="mt-5 border border-dark">Right Side<hr color="green"></div></div>
    </div></div>
    <?php
    include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
    $(document).ready(function(){
        var date = new Date();
        $('#time').html(date);
        
        $.ajax({
            url:"fetchorders.php",
            success:function(data)
            {
                $('#product_orders').append(data);
            }
        })
    })
    </script>
</body>
</html>