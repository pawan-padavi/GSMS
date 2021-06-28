<?php
 $c_id = $_POST['c_id'];
 $c_id =implode($c_id,",");

include('config.php');
 $q = "Delete FROM client_registration where c_id IN($c_id)"; 
 if(mysqli_query($connection,$q))
 {
     echo "Customer Deleted ";
 }
 else
 {
     echo "Customer not deleted";
 }
?>