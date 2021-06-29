<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> sub product_selectTag</title>
    <!-- <link rel="stylesheet" href="Assets/css/bootstrap.css"> -->
</head>
<body>
<?php
    $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connected");
    $q = "select sc_name from product_sub_category";

    $result = mysqli_query($connection,$q) or die("query not fired");
    $output = "";
    if(mysqli_num_rows($result)>0)
    {
        $output.="<select id='sc_name' name='sc_name' class='form-control w-100' required><option disabled selected> Select sub Category</option>";
        while($row = mysqli_fetch_assoc($result))
        {
            $output.="<option value={$row["sc_name"]}>{$row["sc_name"]}</option>";   
        }
    }
   echo $output.="</select>";
?>    

</body>
</html>
