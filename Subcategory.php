<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Sub-category.php page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
</head>
<body>
    <?php
    include('header.php');
    ?>
    <div class="container"><div class="row"><div class="mt-5 col-md-12 col-lg-12 col-sm-12">
            <!-- <button class="btn btn-danger" data-toggle="collapse" data-target="#message"><span>&times</span></button> -->
            <div class="alert alert-dismissible" role="alert" id="message"></div>
            <!-- sub-category update view -->
            <div id="sub-update-data"></div>           
           <center><a href="Add-Sub-category.php"><button class="btn btn-primary mb-5"><i class="fa fa-plus"></i> Add Sub-Category</button></a></center>
           <!-- sub category display view -->
           <div id="view_sub_category"></div>
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
            $.ajax({
                url:"view_sub-category.php",
                type:"POST",
                success:function(data){
                    $('#view_sub_category').html(data);
                }
               });
               // Delete  sub category code
            $(document).on("click",".sub-cat-delete",function(e){
                 e.preventDefault();
                if(confirm("Do you really want to delete this record"))
                {
                var sc_id = $(this).data("id");
                var ent = sc_id;
            //    alert(ent);
               $.ajax({
                    url:"sub-category-delete.php",
                    type:"POST",
                    data:{sc_id: sc_id},
                    success:function(data)
                    {
                        if(data == 1)
                        {
                            // alert('Record Deleted');
                            $(ent).closest("tr").remove();
                            document.location.reload();
                        }
                        else
                        {
                            alert("cant delete record");
                        }
                    }
                })
            }
            })
                // update sub category starts
        $(document).on("click",".sub-cat-update",function(e){
            e.preventDefault();
            var sc_id = $(this).data('sc_uid');
            // alert(sc_id);
            $.ajax({
                url:"sub-category-update.php",
                type :"POST",
                data :{sc_id:sc_id},
                success:function(data)
                {
                    $('#sub-update-data').html(data);
                    // e.preventDefault();
                }
            })
        })
        //update code for update sub-category
        $(document).on("click",".sc-update-submit",function(e){
            e.preventDefault(); 
            var sc_id = $("#sc_id").val();
            var c_name = $("#c_name").val();
            var sc_name = $('#sc_name').val();
            var sp_ck = $("#sp_ck").val();

            $.ajax({
                url:"sub-category-updt.php",
                type: "POST",
                data:{sc_id: sc_id,c_name: c_name,sc_name: sc_name,sp_ck: sp_ck},
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
                        alert('Data not updated');
                        $('#message').html('Data not updated');
                        $('#message').addClass('text-light bg-warning border border-warning text-center mb-2');
                       
                    }
                }
            })
        })
        })
    </script>
</body>
</html>