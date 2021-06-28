<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Registration-page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <style>
        a{
            outline:none;
        }
    </style>
</head>
<body>
    <?php 
    // include('header.php');
    ?>

<div class="container"><div class="row"><div class="col-md-12 col-lg-12 col-sm-12">
<?php
date_default_timezone_set('Asia/Kolkata');
// echo date_default_timezone_get();
?>
<div id="message"></div>
<table class="table table-bordered table-hover table-sm mt-2">
<thead class="thead-dark"><tr scope="row"><th scope="col" colspan="4" class="text-center">Admin Registration</th></tr></thead>
<tbody>
<form id='Admin-registration' class="form-group Admin-registration" enctype="multipart/form-data">
<tr scope="row"><th scope="col">Unique Id*</th><th scope="col">First Name*</th><th scope="col">Middle Name*</th><th scope="col">Lastname*</th></tr>
<tr scope="row"><td scope="col"><input type="hidden" id="aid" name="aid" value="<?php echo date('Yhis'); ?>"><input type="number" name="cmpunqid" id="cmpunqid" class="form-control" placeholder="Company provided Uniq id" required></td>
                <td scope="col"><input type="text" name="fname" id="fname" class="form-control" placeholder="Self name" required></td>
                <td scope="col"><input type="text" name="mname" id="mname" class="form-control"placeholder="Father name" required></td>
                <td scope="col"><input type="text" name="lname" id="lname" class="form-control" placeholder="Surname" required></td></tr>
<tr scope="row"> <th scope="col">Admin Photo*</th><td scope="col" colspan="3"><input type="file" name="profile" id="profile" class="bg-light form-control" required></td></tr>
<tr scope="row"><th scope="col">Username/Email*</th><th scope="col">Password*</th><th scope="col">Repassword*</th><th scope="col">Company Name*</th></tr>
<tr scope="row"><td scope="col"><input type="text" name="usrname" id="usrname" class="form-control" placeholder="Username or Email" required></td>
                <td scope="col"><input type="password" name="pwd" id="pwd" class="form-control" placeholder="Enter Strong password" required></td>
                <td scope="col"><input type="text" name="rpwd" id="rpwd" class="form-control" placeholder='Enter Password for Recheck' required><span id="pw"></span></td>
                <td scope="col"><input type="text" name="cmpname" id="cmpname" class="form-control" placeholder="Company name" required></td></tr>
<tr scope="row"><td scope="col" class="text-center" colspan="4"><input type="submit" value="Register" name="ad-submit" id="ad-submit" class="btn btn-success w-50 form-control"></td></tr>
</form>
<tr scope="row"><th scope="col "colspan="4"><a href="Admin-login.php"><center><button style="width:200px;" class="btn btn-info">Login</button></center></a></th></tr>
</tbody>
</table>
</div></div></div>

    <?php
    //  include('footer.php');
     ?>
    <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
        $(document).ready(function(){

            $('#pwd,#rpwd,#cmpunqid,#fname,#mname,#lname,#usrname,#cmpname').on("focus",function(){
                $(this).addClass('border border-success bg-secondary text-light');
            })
            $('#pwd,#rpwd,#cmpunqid,#fname,#mname,#lname,#usrname,#cmpname').on("blur",function(){
                $(this).removeClass('border border-success bg-secondary text-light');
            })
            
            $('#Admin-registration').on("submit",function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:"insert-Admin-registration.php",
                type:"POST",
                data:formData,
                contentType:false,
                processData:false,
                success:function(data)
                {
                    if(data == 0 && data !=11)
                    {
                        $('#message').html('Data not inserted');
                        $('#message').addClass('bg-danger alert mt-2 alert-dismissable text-light');
                        setTimeout(fresh,5000);
                        function fresh()
                        {
                            document.location.reload();
                        }
                    }
                    else if(data == 11)
                    {
                        $('#pw').html('Please Check Password are not matched');
                        $('#pw').addClass('text-danger');
                        setTimeout(fresh,5000);
                        function fresh()
                        {
                            document.location.reload();
                        }
                    }
                    else
                    {
                        $('#pw').hide();
                        $('#message').html(data);
                        $('#message').addClass('bg-info mt-2 alert alert-dismissable text-light');
                        $('#Admin-registration').trigger('reset');
                        setTimeout(fresh,5000);
                        function fresh()
                        {
                            document.location.reload();
                        }
                    }
                }
            });
        });

        })
    </script>
</body>
</html>