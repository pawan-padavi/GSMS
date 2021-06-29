<?php
$connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connect"); 
$usrname = mysqli_real_escape_string($connection,$_POST['usrname']);
$pwd = $_POST['pwd'];
$q =" SELECT * FROM admin_registration WHERE usrname='{$usrname}' AND pwd='{$pwd}'";
    $result = mysqli_query($connection,$q);

    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            session_start();
            $_SESSION["aid"]="{$row["aid"]}";
            $_SESSION["usrname"]="{$row["usrname"]}";
            $_SESSION["fname"]="{$row["fname"]}";
            setcookie("sessiontime",'{$row["aid"]}',time()+600,"/");
            echo"<img src='";
           echo"Assets/upload-images/". $_SESSION["profile"]="{$row["profile"]}";
           echo "' height='80' width='80' style='border-radius:50px'>";
            echo 1;
        }
    }
    else
    {
        echo 0;
    }
?>