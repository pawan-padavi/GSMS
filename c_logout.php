<?php
    session_start();
    session_unset("c_id,usrname,c_lname,c_fname");
    session_destroy("c_id,usrname,c_lname,c_fname");
    if(session_unset() && session_destroy())
    {
        header('location:c_login.php');
    }
?>
<!-- 
 $_SESSION["c_usrname"] = "{$row["c_email"]}";
 $_SESSION["c_fname"] = "{$row["c_fname"]}";
 $_SESSION["c_lname"] = "{$row["c_lname"]}";
 $_SESSION["c_id"] = "{$row["c_id"]}"; -->
