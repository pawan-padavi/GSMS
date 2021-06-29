<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Client Registration-page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <style>
   
    </style>
</head>
<body>
    <?php
    //  include('C_header.php');
     ?>

<div class="container"><div class="row"><div class="col-md-12 col-lg-12 col-sm-12">
<?php
date_default_timezone_set('Asia/Kolkata');
// echo date_default_timezone_get();
?>
<table style="margin-top:10%" class="table table-bordered table-hover">
<form  id="client-registration" class="form-group">
<thead class="thead-dark"><tr scope="row"><th scope="col" colspan="4" class="text-center">New User Registration</th></tr></thead>
<tbody>
        <tr scope="row"><th scope="col">First Name*</th><th scope="col">Middle Name*</th><th scope="col">Last Name*</th></tr>
        <tr scope="row"><td scope="col">
                        <input type="hidden" name="c_id" id="c_id" value="<?php echo date('dmyhis'); ?>">
                        <input type="text" name="c_fname" id="c_fname" class="form-control" placeholder="Self Name" required></td>
                        <td scope="col"><input type="text" name="c_mname" id="c_mname" class="form-control" placeholder="Father Name" required></td>
                        <td scope="col"><input type="text" name="c_lname" id="c_lname" class="form-control" placeholder="Surname" required></td> </tr>
        <tr scope="row"><th scope="col">Mobile Number*</th><th scope="col">Username/Email*</th><th scope="col">Password*</th></tr>
        <tr scope="row"><td scope="col"><input type="number" name="c_mobile" id="c_mobile" class="form-control" placeholder="Mobile Number" required></td>
        <th scope="col"><input type="email" name="c_email" id="c_email" class="form-control" placeholder="Enter Email" required></th>
        <th scope="col"><div class="input-group"><input type="password" name="c_password" id="c_password" class="form-control" placeholder="Enter password" requied><div class="input-group-append"><button type="button" id="eye" class="input-group-text bg-light btn"><i id="icn" class="fa fa-eye"></i></button></div></div></th></tr>
        <tr scope="row"><th scope="col" colspan="3"><center><input type="submit" value="Register" name="Register" class="btn btn-success"></center></th></tr>
</tbody>
</form>
<tr><th colspan="3"><a href="c_login.php"><center><button class="btn btn-info w-50">Login</button></center></a></th></tr>
</table>
<div id="message"></div>
</div></div></div>

    <?php
    //  include('footer.php');
    ?>
    <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script>
    $(document).ready(function(){
        $('#c_fname,#c_mname,#c_lname,#c_mobile,#c_email,#c_password').on("focus",function(){
            $(this).addClass('bg-warning text-light');
        });
        $('#c_fname,#c_mname,#c_lname,#c_mobile,#c_email,#c_password').on("blur",function(){
            $(this).removeClass('bg-warning text-light');
        });
       
        $('#eye').blur(function(){
            $('#icn').removeClass('fas fa-eye text-success');
            var see = $('#c_password').val();
            $('#c_password').attr('type','password');
            $('#c_password').val(see);
        })
        $('#eye').click(function(){
            $('#icn').addClass('fas fa-eye text-success');
            var see = $('#c_password').val();
            $('#c_password').attr('type','text');
            $('#c_password').val(see);
        })
        $('#client-registration').on("submit",function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:"c_registrationP.php",
                type:"POST",
                data:formData,
                contentType:false,
                processData:false,
                success:function(data)
                {
                    $('#message').html(data);
                }
            })
        })
    })
    </script>
</body>
</html>