<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <style>
   *{
       box-sizing:border-box;
   }
    
    #right li
    {
        display:flex;
        background-color:pink;
        padding:20px;
        margin:10px;
        align: left 0px;
        width:200px;
    }
    .menu
    {
        position:fixed;
        z-index:1;
        border-right:1px solid indigo;
    }
    .menu li
    {
        display:block;
        padding:15px;
        color:indigo;
        margin:15px;
        
    } 
    .menu li:hover
    {
        color:orange;
    }
    .main
    {
        padding:10px;
    }
    .prod li
    {
        display:inline-flex;
        padding:50px;
        margin:30px;
        border-radius:10px;
        text-align:center;
        font-weight:bolder;
        box-shadow:6px 2px 2px 1px gray;
        width:250px;
        height:200px;
    }
    </style>
</head>
<body>
<?php
include('header.php');
?>
<div container><div class="row">
<div class=" mt-5 col-md-2 col-lg-2 col-sm-2 mb-5">
<div class="main menu mt-5 btn">
<ul>
    <li><i class='fas fa-desktop fa-2x'></i> </li>
    <li><i class='fas fa-briefcase fa-2x'></i> </li>
    <li><i class='fas fa-calculator fa-2x'></i> </li>
    <li><i class='fas fa-cart-plus fa-2x'></i></li>
    <li><i class='fas fa-user fa-2x'></i></li>
    <li><i class='fas fa-cog fa-2x'></i></li>
    
</ul>
</div>
</div>
<div class=" mt-5 col-md-10 col-lg-10 col-sm-10 mb-5 prod">
<ul>
<li style="background:red;" class="mt-5"><span id="prod_count"></span></li>
<li style="background:gold;" class="mt-5"><span id="ord_count"></span></li>
<li style="background:green;" class="mt-5"><span id="disp_count"></span></li>
<li style="background:orange;"  class="mt-5"><span id="dlvr_count"></span></li>
<li style="background:chocolate;" class="mt-5"><span id="cust_count"></span></li>
<li style="background:lightblue;" class="mt-5"><span id="c_count"></span></li>
<li style="background:brown;" class="mt-5"><span id="u_count"></span></li>
<li style="background:silver;" class="mt-5"><span id="s_count"></span></li>
<li style="background:TOMATO;" class="mt-5"><span id="t_count"></span></li>
</ul>
</div>
</div>
</div></div>
<script src="Assets/js/chart.js"></script>
<script src="Assets/js/jquery.js"></script>
<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/all.js"></script>
<script src="CHeader.js"></script>
<script>
    $(document).ready(function(){
        prod_count();
        ord_count();
        disp_count();
        dlvr_count();
        cust_count();
        cate_count();
        sub_count();
        g_total_count();
        t_count();
        function prod_count()
        {
            $.ajax({
                    url:"prod_count.php",
                    success:function(data)
                    {   
                        $('#prod_count').html(data);
                    }
            });
        }
        function ord_count()
        {
            $.ajax({
                    url:"ord_count.php",
                    success:function(data)
                    {   
                        $('#ord_count').html(data);
                    }
            });
        }
        function disp_count()
        {
            $.ajax({
                    url:"disp_count.php",
                    success:function(data)
                    {   
                        $('#disp_count').html(data);
                    }
            });
        }
        function dlvr_count()
        {
            $.ajax({
                    url:"dlvr_count.php",
                    success:function(data)
                    {   
                        $('#dlvr_count').html(data);
                    }
            });
        }
        function cust_count()
        {
            $.ajax({
                    url:"cust_count.php",
                    success:function(data)
                    {   
                        $('#cust_count').html(data);
                    }
            });
        }
        function cate_count()
        {
            $.ajax({
                    url:"cate_count.php",
                    success:function(data)
                    {   
                        $('#c_count').html(data);
                    }
            });
        }
        function sub_count()
        {
            $.ajax({
                    url:"sub_count.php",
                    success:function(data)
                    {   
                        $('#u_count').html(data);
                    }
            });
        }
        function g_total_count()
        {
            $.ajax({
                    url:"g_total_count.php",
                    success:function(data)
                    {   
                        $('#s_count').html(data);
                    }
            });
        }
        function t_count()
        {
            $.ajax({
                    url:"gsms_count.php",
                    success:function(data)
                    {   
                        $('#t_count').html(data);
                    }
            });
        }
    });
</script>
</body>
</html>