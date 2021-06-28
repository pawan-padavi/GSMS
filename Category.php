<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Category.php page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
</head>
<body>
    <?php
    include('header.php');
    ?>
    <div class="container"><div class="row"><div class="col-md-12 col-lg-12 col-sm-12">
    <div  class="alert alert-dismissable" id="message"></div>
    <div id="update-data" class="mt-5"></div>
           <center><a href="Add-category.php"><button class="btn btn-primary mt-5 mb-5"><i class="fa fa-plus"></i> Add Category</button></a></center>
    <div id="view_category"></div>
    </div></div></div>
    
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
    $(document).ready(function(){
        //dispay data
            $.ajax({
                url:"view_category.php",
                type:"POST",
                success:function(data){
                    $('#view_category').html(data);
                }
               });
// Delete  category code
            $(document).on("click",".cat-delete",function(){
                // e.preventDefault();
                if(confirm("Do you really want to delete this record"))
                {
                var c_id = $(this).data("id");
                var ent = c_id;
            //    alert(ent);
               $.ajax({
                    url:"category-delete.php",
                    type:"POST",
                    data:{id: c_id},
                    success:function(data)
                    {
                        if(data == 1)
                        {
                            $(ent).closest("tr").fadeOut();
                            // document.location.reload();
                        }
                        else
                        {
                            alert("cant delete record");
                        }
                    }
                })
            }
            })
            // update category starts
        $(document).on("click",".cat-update",function(e){
            e.preventDefault();
            var c_id = $(this).data('uid');
            // alert(c_id);
            $.ajax({
                url:"category-update.php",
                type :"POST",
                data :{id:c_id},
                success:function(data)
                {
                    $('#update-data').html(data);
                    // e.preventDefault();
                }
            })
        })
        //update code for update category
        $(document).on("click",".update-submit",function(e){
            e.preventDefault();
            var c_id = $("#c_id").val();
            var c_name = $("#c_name").val();
            var p_ck = $("#p_ck").val();

            $.ajax({
                url:"category-updt.php",
                type: "POST",
                data:{c_id: c_id,c_name: c_name,p_ck: p_ck},
                success:function(data)
                {
                    if(data == 1)
                    {
                        alert("data updated");
                        $('#message').removeClass('bg-warning');
                        $('#message').html('Data inserted Successfully');
                        $('#message').addClass('text-light bg-success border border-success text-center mb-2');
                        // alert(" Sub Category Update Successfully");
                        // document.location.reload(); 
                    }
                    else
                    {
                        alert("data not updated");
                        $('#message').html('Data not inserted');
                        $('#message').addClass('text-light bg-warning border border-warning text-center mb-2');
                    }
                }
            })
        })
    });
    </script>
</body>
</html>