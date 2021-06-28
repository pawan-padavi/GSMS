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
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-lg-6 col-sm-6 mt-5">
    <!-- Customers -->
    <div id="customers" class="mt-5"></div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-6 mt-5">
    <!-- Transactions -->
    <div id="transactions" class="mt-5"></div>
    </div>
    </div></div>
    
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
        $(document).ready(function(){
            function customers()
            {
                $.ajax({
                    url:"fetchcustomers.php",
                    success:function(data)
                    {
                        $('#customers').html(data);
                    }
                });
            }
            customers();
            $(document).on("click","#cust_delete",function(){
           var c_id = [];
            $(":checkbox:checked").each(function(key){
                c_id[key] = $(this).val();
            });
            if(c_id=="")
            {
                alert("You are not select data for delete");
            }
            else
            {
            if(confirm("Do You really want to Delete this"))
            {
                $.ajax({
                    url:"delete-customer.php",
                    type:"POST",
                    data:{c_id: c_id},
                    success:function(data)
                    {
                      alert(data);
                      setTimeout(() => {
                          $('#customers').load(" #customers");
                          customers();
                      }, 100);
                    }
                });   
            }
          }
        });
    });
    </script>
</body>
</html>
