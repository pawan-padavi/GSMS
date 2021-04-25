<?php
    session_start();
    $aid = $_SESSION["aid"];
    if($_SESSION["aid"]==$aid)
    {
        session_unset();
        // session_destroy();
        header('location:Admin-login.php'); 
    }
?>