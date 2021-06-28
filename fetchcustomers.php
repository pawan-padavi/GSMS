<?php
    include('config.php');
    $query= "SELECT client_registration.* from client_registration";
    $result = mysqli_query($connection,$query) or die("query not execute properly");
    $output = "";
    if(mysqli_num_rows($result)>0)
    {
        $output .= "<table style='border:none' class='table table-borderless table-sm table-striped'>
        <thead style='background:indigo; color:white;'>
        <tr><th>Fname</th><th>Lname</th><th>Mobile</th><th>Email</th><th><i id='cust_delete' class='fas fa-trash fa-2x text-danger'></i></th></tr></thead><tbody>";
        while($row = mysqli_fetch_assoc($result))
        {
            $output .="<tr><td>{$row["c_fname"]}</td>
            <td>{$row["c_lname"]}</td>
            <td>{$row["c_mobile"]}</td><td>{$row["c_email"]}</td>
            <td><input style='height:2em; width:2em;' type='checkbox' name='c_id' id='c_id' value='{$row["c_id"]}'/></td>
            </tr>";
        }
        echo $output.="</tbody></table>";
    }
?>
<!--  c_id 
 c_fname 
 c_mname
 c_lname
 c_mobile
 c_email
 c_profilepic
 c_village
 tehsil
 district
 state
 pincode
 c_password   -->