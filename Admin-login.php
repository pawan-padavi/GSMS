<?php
        session_start();
        if(isset($_SESSION["aid"])&& $_SESSION["usrname"])
        {
            header('location:dashboard.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <style>
        a{
            outline:none;
        }
        body{
            background-image:url("Assets/upload-images/padavi_pawnsing_dk_08032021123626.jpg");
            background-repeat:no-repeat,repeat;
            background-size:cover;
            background-color:#cccccc;
            opacity:1.0;
        }
        body:hover{
            opacity:1.0;
        }
    </style>
</head>
<body>
    
    <div class="container"><div class="row"><div class="offset-lg-2"></div><div class="col-lg-8">
    
        <form id="adminLogin" name="adminLogin" class="form-group">
        <center><table class="table mt-5  table-borderless">
        <tr scope="row"><th scope="col" colspan="2"><h1 class="text-center text-info"><i class="fa fa-user"></i></h1></th></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><input type="text" name="usrname" id="usrname" class="form-control w-50" placeholder="Enter Username/email" required></center></th></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><input type="password" name="pwd" id="pwd" class="form-control w-50" placeholder="Enter Password" required></center></th></tr>
        <tr scope="row"><th scope="col" colspan="2"><center><input type="submit" style="width:100px" value="Login" class="form-control btn btn-success"></center></th></tr>
        </form>
        <tr scope="row"><th scope="col" colspan="2"><center><a href="Admin-registration.php"><button type="button" class="btn btn-info">Admin Registration</button></a><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="admin-forgetPassword.php"><button type="button" class="btn btn-danger text-right">Forget Password</button></a></center></th></tr>
        </table>
        <div id="message"></div>
        </center>
    </div><div class="offset-lg-2"></div></div></div>
    <?php
        // include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
        $(document).ready(function(){

            $('#adminLogin').on("submit",function(e){
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url:"loginAdmin.php",
                    type:"POST",
                    data:formData,
                    contentType:false,
                    processData:false,
                    success:function(data)
                    {
                        if(data !=0)
                        {
                            $('#message').html(data);
                            $('#message').addClass('alert mt-2 text-success text-weight-bolder text-center border border-info w-50');
                             setTimeout(GoingToDashboard,5000);
                             function GoingToDashboard()
                             {
                                 document.location.replace('dashboard.php');
                             }
                        }
                        else if(data == 0)
                        {
                        $('#message').html(data);
                        $('#message').addClass('alert mt-2 text-danger text-center border border-danger w-50');
                        }
                        else
                        {
                            alert('here it is my fault');
                        }
                    }
                })
            });
        });
    </script>
</body>
</html>