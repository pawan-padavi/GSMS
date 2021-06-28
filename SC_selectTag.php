<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SC_selectTag</title>
    <!-- <link rel="stylesheet" href="Assets/css/bootstrap.css"> -->
</head>
<body>
<?php
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connected");
    $q = "select c_name from product_category";

    $result = mysqli_query($connection,$q) or die("query not fired");
    $output = "";
    if(mysqli_num_rows($result)>0)
    {
        $output.="<select id='c_name' name='c_name' class='form-control w-50' required><option disabled selected> Select Category</option>";
        while($row = mysqli_fetch_assoc($result))
        {
            $output.="<option value={$row["c_name"]}>{$row["c_name"]}</option>";   
        }
    }
   echo $output.="</select>";
?>    

</body>
</html>
