<?php
$aid = $_POST['aid'];
// echo "ID $aid";
        $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db");
        $query = "SELECT aid,fname,lname,usrname,pwd FROM admin_registration WHERE aid = $aid";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
        {
            echo "Your Data<br><hr>";
            while($row = mysqli_fetch_assoc($result))
            {
                echo"<br>ID: ". $row["aid"];
                echo"<br>Name: ". $row["fname"];
                echo"<br>Lname: ". $row["lname"];
                echo"<br>Username: ". $row["usrname"];
                echo"<br>Password: ". $row["pwd"];
            }
        }
        else
        {
            echo "<br>ID not Matched";
        }
?>