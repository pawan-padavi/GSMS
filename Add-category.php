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
        #p_ck{
            align:left;
            height:30px;
            width:30px;
        }
        .btn-submit
        {
            width:200px;
        }
    </style>
</head>
<body>
   
    <?php
            include('header.php');
    ?>
    <div class="container"><div class="row"><div class="mt-5 col-md-12 col-lg-12 col-sm-12">
       <center> <table class="table table-bordered w-50 mt-5">
        <form id="add-category" name="add-category" class="form-group">
            <thead class="thead-dark"><tr scope="row"><th scope="col" colspan="2" class="text-center">Add Product Categories</th></tr></thead>
            <tr scope="row"><th scope="col" class="text-right">Product Category Id</th><td scope="col"><input type="hidden" class="form-control" name="c_id" value="<?php
        $date= date('yis'); echo $date;?>"><?php
        $date= date('yis'); echo $date;?></td></tr>
        <tr scope="row"><th scope="col" class="text-right">Category Name</th><td scope="col"><input type="text" name="c_name" id="c_name" class="form-control" required></td></tr>
        <tr scope="row"><th scope="col" class="text-right">Products Available</th><td scope="col"><input type="checkbox" name="p_ck" id="p_ck" value="1"class="form-control" required></td></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><button  type="submit" name="submit" id="submit" class="btn btn-submit btn-primary"><i class="fa fa-plus"></i><span>&nbsp;&nbsp;Add</span></button></center></th></tr>
        </form> 
        <tr><th colspan="2"><center><a href="category.php"><button class="btn btn-info">View Product Categories</button></a></center></th></tr> </table></center>
        <div id="#m"></div>
             
    </div></div></div>
    <?php
        include('footer.php');
    ?>

    <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
        $(document).ready(function(){
            //  $('#message').hide();
            var message = "Data inserted successfully";
            // $('#message1').hide();


            $('#add-category').on("submit",function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"insert_category.php",
                    type:"POST",
                    data:formData,
                    contentType:false,
                    processData:false,
                    success:function(data)
                    {
                        if(data==1)
                        {
                            alert(message);
                            // $('#message').show();
                            $('#add-category').trigger("reset");
                             window.location.reload();
                        }
                        else
                        {
                            // alert('Data not inserted');
                            $('#add-category').trigger("reset");
                            // window.location.reload();
                        }
                    }

                })
            })

        });
    </script>
</body>
</html>