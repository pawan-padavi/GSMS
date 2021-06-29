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
            /* box-shadow:10px 5px 20px 0px black; */
        }
        a:hover{
            color:red;
        }
       
        }
        .navbar button
        {
            text-transform:uppercase;
        }
        .newheader li
        {
            display:inline-flex;
            box-sizing:border-box;
        }
        #cart
        {
            font-size:15px;
            color:red;
        }
        .newheader li a .btn
        {
            /* padding:5px; */
            margin-left:0px;
            border:2px solid indigo;
        }
    .newheader li .btn:hover
        {
            background-color:indigo;
            color:white;
        }
        .newheader 
        {
            font-weight:bolder;
            background:white;
        }
      .kt
      {
            box-shadow:0px 5px 5px 0px indigo;
            background:black;
            color:white;
      } 
    </style>
</head>
<body>

<div class="container-fluid newheader"><div class="row"><ul>
<li  class="nav-item"><a href="#" class="nav-link"><div style="align-left:100px;" class="btn kt">GSMS</div></a></li>
<li class="nav-item"><a href="index.php" class="nav-link"><div class="btn kt"><i class="fab fa-windows"></i>Home</div></a></li>
    <li class="nav-item n"><a href="C_spices.php" class="nav-link"><div class="btn kt"><i class="fab fa-product-hunt"></i>Spices</div></a></li>
    <li class="nav-item n"><a href="C_grains.php" class="nav-link"><div class="btn kt"><i class="fa fa-list-alt"></i>Grains</div></a></li>
    <li class="nav-item n"><a href="C_other.php" class="nav-link"><div class="btn kt"><i class="fa fa-list-alt"></i>Other</div></a></li>
    <li class="nav-item n"><a href="C_newproducts.php" class="nav-link"><div class="btn kt"><i class="fab fa-bandcamp"></i>New</div></a></li>
    <li class="nav-item n"><a href="C_mycart.php" class="nav-link"><div class="btn kt"><i class="fa fa-shopping-cart"></i><div class="badge badge-pill" id="cartload"><b id="cart">
    <?php $count = count($_SESSION["shoping-cart"]); 
        echo $count;
     ?></b></div>My Cart</div></a></li>
    <li class="nav-item n"><a href="C_myaccount.php" class="nav-link"><div class="btn kt"><i class="fas fa-user"></i><small class="text-uppercase"><?php echo " Hi '".$c_fname."' "; ?></small></div></a></li>
    <li class="nav-item n"><a href="c_logout.php" class="nav-link"><button class="btn kt" style="width:100px; color:red;"><i class="fas fa-sign-out-alt"></i></button></a></li>
    </ul>
</div></div>

    <!-- <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script> -->
</body>
</html>