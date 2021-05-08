<?php
    session_start();
    $c_id = $_SESSION["c_id"];
    // print_r($_SESSION["c_id"]);
    // echo $_SESSION["c_usrname"];
    // echo $_SESSION["c_lname"];
    // echo $_SESSION["c_fname"];
    // $unset = session_unset("c_id,c_usrname,c_lname,c_fname");
    // $destroy = session_destroy("c_id,c_usrname,c_lname,c_fname");
    if(isset($_SESSION["c_id"]))
    {
        unset($_SESSION["c_id"]);
         header('location:c_login.php');
    }
?>
<!-- 
 $_SESSION["c_usrname"] = "{$row["c_email"]}";
 $_SESSION["c_fname"] = "{$row["c_fname"]}";
 $_SESSION["c_lname"] = "{$row["c_lname"]}";
 $_SESSION["c_id"] = "{$row["c_id"]}"; -->
