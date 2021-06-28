<?php
    session_start();
    $aid = $_SESSION["aid"];
    if($_SESSION["aid"]==$aid)
    {
        unset($_SESSION["aid"]);
        
        header('location:Admin-login.php'); 
    }
?>