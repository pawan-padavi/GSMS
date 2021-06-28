<?php
        $sc_id=$_POST['sc_id'];
        $conn=mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Connection Failed");
        $sql="select * FROM product_sub_category where sc_id =$sc_id";
        $result=mysqli_query($conn,$sql) or die("SQL Query failed");
        $output= "";
        if(mysqli_num_rows($result) > 0)
        {
            $output = '<form id="sc-update-data"><table class="table  table-bordered table-hover">
            <thead class="thead-dark text-center">
            <tr scope="row">
            <th scope="col">Sub Category Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Sub Category Name</th>
            <th scope="col"Check Product</th>
            <th scope="col"> Operations</th>
            </tr></thead>';
            while ($row=mysqli_fetch_assoc($result)) {
                $output .="<tbody class='text-center'><tr><td><input type='hidden' name='sc_id' id='sc_id' value='{$row["sc_id"]}'>{$row["sc_id"]}</td>
                <td><input type='hidden' name='c_name'id='c_name' class='form-control w-100' value='{$row["c_name"]}'>{$row["c_name"]}</td>
                <td><input type='text' name='sc_name'id='sc_name' class='form-control w-100' value='{$row["sc_name"]}' required></td>
                <td><input type='text' name='sp_ck'id='sp_ck' class='form-control w-100' value='{$row["sp_ck"]}' required></td>
                <td><input type='submit' id='sc-update-submit' class='btn btn-success sc-update-submit' value='Save'></td></tr></tbody>";
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