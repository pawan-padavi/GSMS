<?php
        $conn=mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Connection Failed");
        $sql="select * FROM product_category";
        $result=mysqli_query($conn,$sql) or die("SQL Query failed");
        $output= "";
        if(mysqli_num_rows($result) > 0)
        {
            $output = '<center><form id="view"><table class="table table-md table-bordered table-hover">
            <thead class="thead-dark text-center">
            <tr scope="row">
            <th scope="col">Category Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">#</th>
            <th scope="col">#</th>
            </tr></thead>';
            while ($row=mysqli_fetch_assoc($result)) {
                $output .="<tbody class='text-center'><tr><td><input type='hidden' name='c_id' id='c_id' value='{$row["c_id"]}'>{$row["c_id"]}</td>
                <td><input type='hidden' name='c_name'id='c_name' class='form-control w-100' value='{$row["c_name"]}'>{$row["c_name"]}</td>
                <td><button data-id='{$row["c_id"]}' class='btn cat-delete btn-danger'>Delete</button></td>
                <td><button data-uid='{$row["c_id"]}' class='btn cat-update btn-warning'>Update</button></td>
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