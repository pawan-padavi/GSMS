<?php
    session_start();
    if($_SESSION["c_usrname"]!="")
    {
        $username =$_SESSION["c_usrname"];
        $c_fname =$_SESSION["c_fname"];
        $c_lname =$_SESSION["c_lname"];
    }
    else
    {
        header('location:c_login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="Assets/css/bootstrap.css">-->
    <link rel="stylesheet" href="anchor.css">
    <style>
        .pos{
            margin-left:72%;
        }
         .head{
            position:fixed;
            z-index:1;
            margin-bottom:auto;
        }
        .nav-link{
            font-weight:bold;
            color:#000000;

        }
        a:hover{
            color:red;
        }
        #B_name{
            color:green;
        }
        #B_name:hover{
            color:red;
        }
        .m{
            margin-left:3%;
        }
        #user{
            color:green;
        }
        #user:hover{
            color:red;
        }
        .ot
        {
            outline:none;
        }
        #userinfo
        {
            color:white;
            font-size:1em;
        }
        #userinfo a
        {
            text-decoration:none;
            font-size: 1em;
            font-weight:bolder;
            text-transform:uppercase;
            color:indigo;
        }
        #userinfo a:hover
        {
            color:white;
        }
        /* #userinfo a:visited
        {
            color:indigo;
        } */
    </style>
</head>
<body>
<div class="container-fluid head"><div class="row"><div class="col-md-12 col-lg-12 col-sm-12">
<div class="pos-f-t">
  <div class="collapse" id="navbarHide">
    <nav class="navbar navbar-expand-lg navbar-info bg-light">
    <a id="B_name"class="navbar-brand"><h3><i class="fa fa-shopping-cart"></i>GSMS.com</h3></a>
    <ul class="navbar-nav">
    <li class="nav-item"><a href="#C_allcategories.php" class="nav-link"><i class="fab fa-windows"></i>All Categories</a></li>
    <li class="nav-item"><a href="C_spices.php" class="nav-link"><i class="fab fa-product-hunt"></i>Spices</a></li>
    <li class="nav-item"><a href="C_driedlegumes.php" class="nav-link"><i class="fab fa-first-order"></i>Dried Legumes</a></li>
    <li class="nav-item"><a href="C_grains.php" class="nav-link"><i class="fa fa-list-alt"></i>Grains</a></li>
    <li class="nav-item"><a href="C_other.php" class="nav-link"><i class="fa fa-list-alt"></i>Other</a></li>
    <li class="nav-item"><a href="C_newproducts.php" class="nav-link"><i class="fab fa-bandcamp"></i>New Products</a></li>
    <li class="nav-item"><a href="C_mycart.php" class="nav-link"><i class="fa fa-shopping-cart"></i>My Cart</a></li>
    <li class="nav-item"><a href="C_myaccount.php" class="nav-link"><i class="fas fa-user"></i>My Account</a></li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item"><a href="c_logout.php" class="nav-link"><button class="btn btn-danger">Logout</button></a></li>
    </ul>
    </nav>
    </div></div>
    <div class="bg-success"><span class="btn text-left text-light" data-toggle="collapse" data-target="#navbarHide"><i id="menuhide" class="fas fa-list fa-2x"></i></span><span class="text-center text-light"><b>GSMS</b></span><span class="mt-1 mb-1 pos"><i class="fa fa-shopping-cart text-warning"></i></span><span id="userinfo"><a href="C_myaccount.php"><?php echo " Hi ".$c_fname." ".$c_lname; ?></a></span></div>
    <!-- <span id="dp"><ul class="list-unstyled"><li>Logout</li></ul></span> -->
    </div></div></div>
    
    <!-- <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script> -->
</body>
</html>