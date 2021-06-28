<?php

                $p_name = $_POST['p_name'];
                $pdesc = $_POST['pdesc'];
                $c_name = $_POST['c_name'];
                $sc_name = $_POST['sc_name'];
                $p_brand = $_POST['p_brand'];
                $p_price = $_POST['p_price'];
                $p_search = $_POST['p_search'];
                $p_id = $_POST['p_id'];
                if(!$c_name=="" AND !$sc_name=="")
                {
                $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("DataBase not connected");
                $q = "UPDATE product SET p_name='$p_name',pdesc='$pdesc',c_name='$c_name',sc_name='$sc_name',p_brand='$p_brand',p_price=$p_price,p_search='$p_search' where p_id = '$p_id'";
                if(mysqli_query($connection,$q))
                    {
                        echo 1; 
                    }
                    else
                    {
                    echo 0;
                    }   
                }
                else
                {
                    echo 0;
                }
?>