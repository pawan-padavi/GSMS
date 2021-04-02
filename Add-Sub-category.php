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
        #sp_ck{
            align:left;
            height:30px;
            width:30px;
        }
    </style>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <div class="container"><div class="row"><div class=" mt-5 col-md-12 col-lg-12 col-sm-12">
    <form id="add-sub-category" name="add-sub-category" class="form-group">
        <table class="table table-bordered">
            <thead class="thead-dark"><tr scope="row"><th scope="col" colspan="2" class="text-center">Add Product Categories</th></tr></thead>
            <tr scope="row"><th scope="col" class="text-right">Product Sub-Category Id</th><td scope="col"><input type="hidden" class="form-control" id="sc_id" name="sc_id" value="<?php $date= date('yis'); echo $date;?>"><?php
        $date= date('yis'); echo $date;?></td></tr>

        <tr scope="row"><th scope="col" class="text-right">Product Category</th>
                        
        <td scope="col"><div id="category"></div></td></tr>

        <tr scope="row"><th scope="col" class="text-right">Sub-Category Name</th><td scope="col"><input type="text" name="sc_name" id="sc_name" class="form-control w-50" required></td></tr>
        <tr scope="row"><th scope="col" class="text-right">Products Available</th><td scope="col"><input type="checkbox" name="sp_ck" id="sp_ck" value="1" required></td></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><button type="submit" name="submit" class="add-sub-category btn w-50 btn-primary"><i class="fa fa-plus"></i>Add</button></center></th></tr>
        </form>   
        <tr scope="row"><th scope="col" colspan="2"><center><a href="Subcategory.php"><button  type="button"class="btn btn-info ">View Sub Category</button></a></center></th></tr></table> 
    </div></div></div>
    <?php
        include('footer.php');
    ?>

    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <!--jquery for category select-->
    <script>
        $(document).ready(function(){
         
                $.ajax({
                    url:"SC_selectTag.php",
                    type:"POST",
                    success:function(data){
                        $('#category').html(data);
                    }
                })
                    //Insert Data (insert-sub-category.php)
            $('#add-sub-category').on("submit",function(e){
            e.preventDefault();
            // var sc_id = $("#sc_id").val();var c_name = $("#c_name").val();var sc_name = $("#sc_name").val();
            // var sc_id = $("#sc_id").val();var c_name = $("#c_name").val();var sc_name = $("#sc_name").val();
             var formData = new FormData(this);

            // alert(sp_ck);
            $.ajax({
                url:"insert_sub_category.php",
                type: "POST",
                // data:{sc_id: sc_id,c_name: c_name, sc_name: sc_name, sp_ck: sp_ck},
                data:formData,
                contentType:false,
                processData:false,
                success:function(data)
                {
                    if(data == 1)
                    {
                        alert("Sub-category insert Successfully");
                        $('#add-sub-category').trigger('reset');
                        window.location.reload();
                    }
                    else
                    {
                        alert("Sub-category not inserted");
                        $('#add-sub-category').trigger('reset');
                    }
                }
            })
        })

        })
    </script>
    <!--ends jquery category select-->
</body>
</html>