<?php
     $c_id = $_POST['c_id'];
     $c_name =$_POST['c_name'];
     $p_ck = $_POST['p_ck'];

     $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("database not connect");
     $q = "insert into product_category values($c_id,'$c_name','$p_ck')";
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