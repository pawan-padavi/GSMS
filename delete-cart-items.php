<!-- item:item,cid:cid -->
<?php
        $item = $_POST['item'];
        $cid = $_POST['cid'];

        $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connected");
        $command = "delete from cart where c_id = {$cid} AND p_name = '{$item}'";
        $query = mysqli_query($connection,$command) or die("Query not executed properly");
?>