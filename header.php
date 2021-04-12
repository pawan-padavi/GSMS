<?php
error_reporting(0);
session_start();
// $sessiontime = setcookie("stimeout",$_SESSION["aid"],time()-86400,"/");

if(isset($_SESSION["aid"])&& $_SESSION['aid']!=0)
{
    $_SESSION["aid"];
    $_SESSION["usrname"];
    $_SESSION["fname"];
    $profile=$_SESSION["profile"];  
    $path="Assets/upload-images/";
}
else
{
    echo"<script> alert('Session expired')</script>";
    header('location:Admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="Assets/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="Assets/css/all.css"> -->
    <link rel="stylesheet" href="anchor.css">
    <style>
        .nav-link{
            font-weight:bold;
            color:#000000;

        }
        #B_name{
            color:green;
        }
        #B_name:hover{
            color:red;
        }
        .m{
            margin-left:10%;
        }
        #user{
            color:green;
        }
        .head{
            position:fixed;
            z-index:1;
            margin-bottom:auto;
        }
        .navbar li
        {
            display:inline-flex;
            background-color:whitesmoke;
            margin:10px 0px 0px 10px;
            padding:5px;
            font-size:14px;
            border:.5px solid whitesmoke;
            border-radius:10px 0px 0px 10px;
        }
    </style>
</head>
<body>
<div class="container-fluid head"><div class="row"><div class="col-md-12 col-lg-12 col-sm-12">
    <nav class="navbar navbar-expand-lg navbar-info bg-light collapse" id="hidenav">
    <span id="B_name"class="vavbar-brand"><h2><i class="fa fa-shopping-cart"></i>GSMS.com</h2></span>
    <ul class="navbar-nav">
    <li class="nav-item"><a href="Dashboard.php" class="nav-link"><i class="fab fa-windows"></i> Dashboard</a></li>
    <li class="nav-item"><a href="Products.php" class="nav-link"><i class="fab fa-product-hunt"></i> Products </a></li>
    <li class="nav-item"><a href="Orders.php" class="nav-link"><i class="fab fa-first-order"></i> Orders</a></li>
    <li class="nav-item"><a href="Category.php" class="nav-link"><i class="fa fa-list-alt"></i> Category</a></li>
    <li class="nav-item"><a href="Subcategory.php" class="nav-link"><i class="fa fa-list-alt"></i>Sub-Category</a></li>
    <li class="nav-item"><a href="Users.php" class="nav-link"><i class="fa fa-users"></i> Users</a></li>
    <li class="nav-item"><a href="Edit-site.php" class="nav-link"><i class="fas fa-edit"></i> Edit-site</a></li>
    </ul>
    
        <a href="logout.php" class="nav-link"><button type="button" class=" ml-5 btn btn-danger">Logout</button></a>
    
    <!-- <span id="dp"><ul class="list-unstyled"><li>Logout</li></ul></span> -->
    </nav>
    <div class=" bg-warning clps"><span class="btn text-left text-light" data-toggle="collapse" data-target="#hidenav"><i id="menuhide" class="fas fa-list fa-2x"></i></span><span class="text-center text-light"><b>GSMS</b></span><span style="margin-left:70%"><?php echo"Hi "." <b>'". $_SESSION["fname"]."'</b> "."Welcome " ?></span>
    <!-- fetch user profile photo -->
    
    </div>
    <!-- <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script> -->
    <!-- <script>
    </script> -->
    </div></div></div>
</body>
</html>