<?php
        $c_id=$_POST['id'];
        $conn=mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Connection Failed");
        $sql="select * FROM product_category where c_id =$c_id";
        $result=mysqli_query($conn,$sql) or die("SQL Query failed");
        $output= "";
        if(mysqli_num_rows($result) > 0)
        {
            $output = '<form id="update-data"><table class="table  table-bordered table-hover">
            <thead class="thead-dark text-center">
            <tr scope="row">
            <th scope="col">Category Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Products Available</th>
            <th scope="col"> Operations</th>
            </tr></thead>';
            while ($row=mysqli_fetch_assoc($result)) {
                $output .="<tbody class='text-center'><tr><td><input type='hidden' name='c_id' id='c_id' value='{$row["c_id"]}'>{$row["c_id"]}</td>
                <td><input type='text' name='c_name'id='c_name' class='form-control w-100' value='{$row["c_name"]}'></td>
                <td><input type='text' name='p_ck'id='p_ck' class='form-control w-100' value='{$row["p_ck"]}'> <span class='text-info'>1 Indicates Products Available</span></td>
                <td><input type='submit' id='update-submit' class='btn btn-success update-submit' value='Update'></td></tr></tbody>";
            }
            $output .="</table></form>";
            mysqli_close($conn);
            echo $output;
        }
        else
        {
        echo"<h2>No record found</h2>";
        }
?>