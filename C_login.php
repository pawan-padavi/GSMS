<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GSMS.com</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <style>
    body{
        background-image:url("Assets/upload-images/padavi_pawnsing_dk_08032021123626.jpg");
        background-repeat:no-repeat,repeat;
            background-size:cover;
            background-color:#cccccc;
            opacity:1.0;
    }
    </style>
</head>
<body>
    <?php
        // include('C_header.php');
    ?>
    <div class="container mb-5"><div class="row"><div class="offset-md-3"></div><div class="col-md-6 mt-5 col-lg-6 col-sm-6">
        <form  name="c_login" id="c_login" class="form-group">
        <table class="table table-borderless">
        <tr scope="row"><th scope="col" colspan="2"><h1 class="text-center text-info"><i class="fa fa-user"></i></h1></th></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><input type="text" name="c_usrname" id="c_usrname" class="form-control w-50" placeholder="Enter Username/email" required></center></th></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><input type="password" name="c_pwd" id="c_pwd" class="form-control w-50" placeholder="Enter Password" required></center></th></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><input type="submit" id="login_submit" class="btn btn-success"></center></th></tr>
        </form>
        <tr scope="row"><th scope="col" colspan="2"><center><a href="C_registration.php"><button type="button" class="btn btn-info">New Registation</button></a><button class="btn btn-danger ml-5">Forget Password</button></center></th></tr>
        <tr></tr>
        </table>
    </div><div class="offset-md-3"></div></div></div>
    <div id="message"></div>
    
    
    <?php
        // include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <!-- <script src="CHeader.js"></script> -->
    <script>
       $(document).ready(function(){
        $('#login_submit').on("submit",function(){
            var username =$('#usrname').val();
            alert("Good Afternoon Padavi pawnasing");

        })
       })
    </script>
</body>
</html>