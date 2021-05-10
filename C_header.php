<?php
    session_start();
    error_reporting(0);

    if($_SESSION["c_id"]!="")
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
         .newheader{
            position:fixed;
            z-index:1;
            margin-bottom:auto;
            box-sizing:border-box;
            box-shadow:10px 5px 20px 0px black;
        }
        
        }
        a:hover{
            color:red;
        }
       
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
            color:red;
        }
        .newheader div
        {
            padding:5px;
        }
    .newheader div .btn:hover
        {
            background-color:green;
            color:white;
            font-weight:bolder;
        }
    .newheader
        {
            /* background-color:lightblue; */
            background-image:linear-gradient(to left, pink,white);
        }
        .newheader 
        {
            font-weight:bolder;
        }
       
    </style>
</head>
<body>

<div class="container-fluid newheader"><div class="row">
<div class="nav-item"><a href="index.php" class="nav-link"><div class="btn "><i class="fab fa-windows"></i>All Categories</div></a></div>
    <div class="nav-item"><a href="C_spices.php" class="nav-link"><div class="btn"><i class="fab fa-product-hunt"></i>Spices</div></a></div>
    <div class="nav-item"><a href="C_driedlegumes.php" class="nav-link"><div class="btn  "><i class="fab fa-first-order"></i>Legumes</div></a></div>
    <div class="nav-item"><a href="C_grains.php" class="nav-link"><div class="btn"><i class="fa fa-list-alt"></i>Grains</div></a></div>
    <div class="nav-item"><a href="C_other.php" class="nav-link"><div class="btn"><i class="fa fa-list-alt"></i>Other</div></a></div>
    <div class="nav-item"><a href="C_newproducts.php" class="nav-link"><div class="btn"><i class="fab fa-bandcamp"></i>New</div></a></div>
    <div class="nav-item"><a href="C_mycart.php" class="nav-link"><div class="btn"><i class="fa fa-shopping-cart"></i><div class="badge badge-pill"><b id="cart">
    <?php $count = count($_SESSION["shoping-cart"]); 
        echo $count;
     ?></b></div>My Cart</div></a></div>
    <div class="nav-item"><a href="C_myaccount.php" class="nav-link"><div class="btn  "><i class="fas fa-user"></i><small class="text-uppercase"><?php echo " Hi '".$c_fname."' "; ?></small></div></a></div>
    <div class="nav-item"><a href="c_logout.php" class="nav-link"><button class="btn btn-danger" style="width:100px"><i class="fas fa-sign-out-alt"></i></button></a></div>
</div></div>

    <!-- <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script> -->
</body>
</html>