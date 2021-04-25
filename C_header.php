<?php
    session_start();
    error_reporting(0);

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
            margin-left:60%;
        }
        .shopping
        {
            font-size:20px;
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
        .navbar li
        {
            display:inline-flex;
            /* background-color:whitesmoke; */
            margin-left:0px;
            /* padding:5px; */
            font-size:10px;
            /* border:.5px solid whitesmoke; */
            /* border-radius:10px 0px 0px 10px; */
        }
        .navbar button
        {
            text-transform:uppercase;
        }
        .navbar li:hover{
            color:white;
        }
        #cart
        {
            font-size:15px;
            color:white;
            
        }
        /* #userinfo a:visited
        {
            color:indigo;
        } */ 
    </style>
</head>
<body><div class="head container-fluid alert-info">
<div><div class="row"><div class="btn text-left text-dark" data-toggle="collapse" data-target="#navbarHide"><i id="menuhide" class="fas fa-list fa-2x"></i></div><div class="text-center"><a id="B_name"class="navbar-brand"><h3><i class="fa fa-shopping-cart"></i>GSMS.com</h3></a></div><div class="offset-md-4 offset-sm-1 offset-xs-1"></div><div class="mt-1"><sup>
    <div class="badge badge-pill badge-warning"><b id="cart">
    <?php $count = count($_SESSION["shoping-cart"]); 
        echo $count;
     ?></b></div></sup><a href="c_mycart.php" class="mt-2 shopping"><i class="fa fa-shopping-cart fa-1x text-warning"></i></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="userinfo"><a href="C_myaccount.php"><?php echo " Hi '".$c_fname." ".$c_lname."'"; ?></a></div></div></div>

<div class="container-fluid"><div class="row"><div class="col-md-12 col-lg-12 col-sm-4">
<div class="pos-f-t">
  <div class="collapse" id="navbarHide">
    <nav class="navbar navbar-expand-lg navbar-info">
    <ul class="navbar-nav">
    <li class="nav-item"><a href="index.php" class="nav-link"><div class="btn btn-warning"><i class="fab fa-windows"></i>All Categories</div></a></li>
    <li class="nav-item"><a href="C_spices.php" class="nav-link"><div class="btn btn-warning"><i class="fab fa-product-hunt"></i>Spices</div></a></li>
    <li class="nav-item"><a href="C_driedlegumes.php" class="nav-link"><div class="btn btn-warning"><i class="fab fa-first-order"></i>Dried Legumes</div></a></li>
    <li class="nav-item"><a href="C_grains.php" class="nav-link"><div class="btn btn-warning"><i class="fa fa-list-alt"></i>Grains</div></a></li>
    <li class="nav-item"><a href="C_other.php" class="nav-link"><div class="btn btn-warning"><i class="fa fa-list-alt"></i>Other</div></a></li>
    <li class="nav-item"><a href="C_newproducts.php" class="nav-link"><div class="btn btn-warning"><i class="fab fa-bandcamp"></i>New Products</div></a></li>
    <li class="nav-item"><a href="C_mycart.php" class="nav-link"><div class="btn btn-warning"><i class="fa fa-shopping-cart"></i>My Cart</div></a></li>
    <li class="nav-item"><a href="C_myaccount.php" class="nav-link"><div class="btn btn-warning"><i class="fas fa-user"></i>My Account</div></a></li>
    <li class="nav-item"><a href="c_logout.php" class="nav-link"><button class="btn btn-danger">Logout</button></a></li>
    </ul>
    </nav>
    </div></div>
    <!-- <span id="dp"><ul class="list-unstyled"><li>Logout</li></ul></span> -->
    </div></div></div></div>
    
    <!-- <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script> -->
</body>
</html>