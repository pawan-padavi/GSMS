<?php
        $p_id=$_POST['p_id'];
        $conn=mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Connection Failed");
        $sql="select * FROM product where p_id ='$p_id'";
        $result=mysqli_query($conn,$sql) or die("SQL Query failed");
        $output= "";
        if(mysqli_num_rows($result) > 0)
        {
            $output = '<center><form id="product-updt" name="product-updt"><table class="table mt-2 table-md w-50 table-bordered table-hover">
            <thead class="thead-dark"><tr><th colspan="2" class="w-50 text-center">Product Update Form</th></tr></thead>';
            while ($row=mysqli_fetch_assoc($result)) {
                $output .="<tbody class='text-center'>
                <input type='hidden' name='p_id' id='p_id' class='form-control' value='{$row["p_id"]}' required>
                <tr><th class='text-right bg-light'>Name</th><td><input type='text' name='p_name' id='p_name' class='form-control w-100' value='{$row["p_name"]}' required></td></tr>
                <tr><th class='text-right bg-light'>Description</th><td><input type='text' name='pdesc'id='pdesc' class='form-control w-100' value='{$row["pdesc"]}' required></td></tr>
                <tr><th class='text-right bg-light'>Category</th><td><div id='cat_name'></div></td></tr>
                <tr><th class='text-right bg-light'>Sub-Category</th><td><div id='scat_name'></div></td></tr>
                <tr><th class='text-right bg-light'>Brand</th><td><input type='text' name='p_brand' id='p_brand' class='form-control w-100' value='{$row["p_brand"]}' required></td></tr>
                <tr><th class='text-right bg-light'>Price</th><td><input type='number' name='p_price' id='p_price' class='form-control w-100' value='{$row["p_price"]}' required></td></tr>
                <tr><th class='text-right bg-light'>Search Keyword</th><td><input type='text' name='p_search' id='p_search' class='form-control w-100' value='{$row["p_search"]}' required></td></tr>
                <tr><td colspan='2'><input type='submit' id='product-update-submit' class='btn btn-success product-update-submit' value='Update'></td></tr></tbody>";
            }
            $output .="</table></form><a href='products.php'><button type='button' class='btn btn-info'>Go To Products Page</button></a><center>";
            mysqli_close($conn);
            echo $output;
        }
        else
        {
        echo"<h2>No record found</h2>";
        }
?>
<script>
        $(document).ready(function(){
            $.ajax({
                url:"p_category_select.php",
                type:"POST",
                success:function(data)
                {
                    $('#cat_name').html(data);
                }
            });
            $.ajax({
                url:"p_sub_categoryselect.php",
                type:"POST",
                success:function(data)
                {
                    $('#scat_name').html(data);
                }
            });
        });
</script>