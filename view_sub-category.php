<?php
    $conn=mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Connection Failed");
    $sql="select * FROM product_sub_category";
    $result=mysqli_query($conn,$sql) or die("SQL Query failed");
    $output= "";
    if(mysqli_num_rows($result) > 0)
    {
        $output = '<center><form id=""><table class="table table-md mb-5 table-bordered table-hover">
        <thead class="thead-dark text-center">
        <tr scope="row">
        <th scope="col">Sub Category Id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Sub Category Name</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
        </tr></thead>';
        while ($row=mysqli_fetch_assoc($result)) {
            $output .="<tbody class='text-center'><tr><td><input type='hidden' name='sc_id' id='sc_id' value='{$row["sc_id"]}'>{$row["sc_id"]}</td>
            <td><input type='hidden' name='c_name'id='c_name' class='form-control w-50' value='{$row["c_name"]}'>{$row["c_name"]}</td>
            <td><input type='hidden' name='sc_name'id='sc_name' class='form-control w-50' value='{$row["sc_name"]}'>{$row["sc_name"]}</td>
            <td><button data-id='{$row["sc_id"]}' class='btn sub-cat-delete btn-danger'>Delete</button></td>
            <td><button data-sc_uid='{$row["sc_id"]}' class='btn sub-cat-update btn-warning'>Update</button></td>
            </tr></tbody>";
        }
        $output .="</table></form></center>";
        mysqli_close($conn);
        echo $output;
    }
    else
    {
    echo"<h2>No record found</h2>";
    } 
?>