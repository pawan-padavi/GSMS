<?php
    session_start();
    session_unset("aid,usrname,profile");
    session_destroy("aid,usrname,profile");
    if(session_unset() && session_destroy())
    {
        header('location:Admin-login.php');
    }
?>