<?php
    $p_id = $_POST['p_id'];
    $servername ="localhost";
    $username ="root";
    $password = "";
    $databasename = "satpuda_online_shop_db";
    $output ="";
   
    $connection = mysqli_connect($servername,$username,$password,$databasename) or die("Database not connected");
    $query = "select p_id,p_img,p_name from product where p_id='$p_id'";
    $result = mysqli_query($connection,$query) or die("query not executed");
   
    if(mysqli_num_rows($result)>0)
    {
        $output.="<center><form action='updt-product-img.php' method='POST' enctype='multipart/form-data' id='img-updt' class='form-group' name='img-updt'><table class='table w-50 mt-5 mb-2 table-bordered table-hover'>
        <thead class='thead-dark'><tr><th colspan='2' class='text-center'>Product Image Update</th></tr></thead>";
        while($row = mysqli_fetch_assoc($result))
        {
        $output.="<tr><th>Produt Id</th><th><input type='hidden' name='p_id' id='p_id' value='{$row["p_id"]}'>{$row["p_id"]}&nbsp;{$row["p_name"]}</th><tr>
                   <tr><th><img class='img-fluid' src='Assets/upload-images/{$row["p_img"]}' width='100' height='60'></th><th><input type='file' name='p_img' id='p_img' class='w-100 form-control'required></th></tr>
                   <tr><th colspan='2'><center><button class='btn img-update btn-warning'value='submit' type='submit' data-id='{$row["p_id"]}' id='img-update' name='submit'>Update</button></center></th></tr>";
        }
       echo $output.="</table></form></center>";
    }
  
?>

