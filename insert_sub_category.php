<?php
     $sc_id = $_POST['sc_id'];
     $c_name = $_POST['c_name'];
     $sc_name =$_POST['sc_name'];
     $sp_ck = $_POST['sp_ck'];

     $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("database not connect");
     $q = "insert into product_sub_category VALUES($sc_id,'$c_name','$sc_name','$sp_ck')";
     if(mysqli_query($connection,$q))
     {
         echo 1;
     }
     else
     {
         echo 0;
     }
     mysqli_close($connection);
?>