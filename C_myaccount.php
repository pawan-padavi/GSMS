<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Satpuda.com</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <style>
    .brd
    {
        border:none;
        /* background:linear-gradient(to left,white,yellow); */
        border:2px solid indigo;
        text-transform:capitalize;
    }
    .brd:hover
    {
        border:2px solid green;
        background-color:rgba(12,15,44,2);
        color:white;    
    }
    .s{
        margin-left:40%;
        color:white;
    }
    </style>
</head>
<body>
    <?php
        include('C_header.php');
    ?>
    <div class="container"><div class="row"><div class="col-md-6 mt-5">
    <button style="font-size:1em; font-weight:bolder;" class="btn border border-success btn-warning mt-5 text-uppercase w-100" data-toggle="collapse" data-target="#profile_data" id="update_profile"><i class="fas fa-edit fa-2x" area-hidden="true"></i> EDIT</button>
    <?php
                $c_id = $_SESSION["c_id"];
                $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connected");
                $query = "select * from client_registration where c_id =$c_id";
                $result = mysqli_query($connection,$query) or die("query not executed properly");
                if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
        ?>
        <div  id="profile_data" class="collapse">
        <form class="form-group" id="update-client-form" enctype="multipart/form-data">
        <table class="table table-hovered table-bordered mt-1 table-sm">
        <thead style="background:indigo; color:white;">
        <tr>
        <th  colspan="2"></div><input style="width:6em; border-radius:50%; border:4px solid white; height:4em;" type="image" src="Assets/upload-images/<?php echo $row['c_profilepic']; ?>" alt="image not found"></th><th style="line-height: 60px;">IDENTIFICATION: <?php echo $_SESSION["c_id"]?></th>
        </tr>
        </thead>
        <!--  -->
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">First Name</th><td colspan="4"><input class="form-control brd" type="text" name="c_fname" id="c_fname" value="<?php echo $row['c_fname']; ?>" required /></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Middle name</th><td colspan="4"><input class="form-control brd" type="text" name="c_mname" id="c_mname" value="<?php echo $row['c_mname']; ?>" required /></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Last name</th><td colspan="4"><input class="form-control brd" type="text" name="c_lname" id="c_lname" value="<?php echo $row['c_lname']; ?>" required /></td></tr>
        <tr><th colspan="6" class="text-dark bg-light"><h6>Address</h6></th></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Village</th><td colspan="4"><input class="form-control brd" type="text" name="c_village" id="c_village" value="<?php echo $row['c_village']; ?>" required /><?php $_SESSION["c_village"] = $row['c_village']; ?></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">City</th><td colspan="4"><input class="form-control brd" type="text" name="tehsil" id="tehsil" value="<?php echo $row['tehsil']; ?>" required /><?php $_SESSION["tehsil"] = $row['tehsil']; ?></td></tr>
        <tr><th colspan="2" class=" text-justify text-uppercase font-weight-bold">District</th><td colspan="4"><input class="form-control brd" type="text" name="district" id="district" value="<?php echo $row['district']; ?>" required /><?php $_SESSION["district"] = $row['district']; ?></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">State</th><td colspan="4"><input class="form-control brd" type="text" name="state" id="state" value="<?php echo $row['state'];?>" required /><?php $_SESSION["state"] = $row['state']; ?></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Pincode</th><td colspan="4"><input class="form-control brd" type="text" name="pincode" id="pincode" value="<?php echo $row['pincode']; ?>" required /><?php $_SESSION["pincode"] = $row['pincode']; ?></td></tr>
        <tr><th colspan="6" class="text-dark bg-light"><h6>Contact</h6></th></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Email</th><td colspan="4"><input class="form-control text-lowercase brd" type="text" name="c_email" id="c_email" value="<?php echo $row['c_email']; ?>" required /></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Mobile</th><td colspan="4"><input class="form-control brd" type="text" name="c_mobile" id="c_mobile" value="<?php echo $row['c_mobile']; ?>" required /></td></tr>
        <tr><th colspan="6" class="text-justify text-uppercase font-weight-bold"><span><input type="file" name="c_profilepic" id="c_profilepic" accept="image/*"></span><button class="btn btn-warning w-25 s" id="update-client">Update Data</button></th></tr>
        </table></form></div>

            
        <?php
                $c_id = $_SESSION["c_id"];
                $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connected");
                $query = "select * from client_registration where c_id =$c_id";
                $result = mysqli_query($connection,$query) or die("query not executed properly");
                if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
        ?>
        <div id="view_client_data">
        <form class="form-group"  enctype="multipart/form-data">
        <table class="table table-hovered table-bordered mt-1 table-sm">
        <thead style="background:indigo; color:white;">
        <tr>
        <th  colspan="2"></div><input style="width:6em; border-radius:50%; border:4px solid white; height:4em;" type="image" src="Assets/upload-images/<?php echo $row['c_profilepic']; ?>" alt="image not found"></th><th style="line-height: 60px;">IDENTIFICATION: <?php echo $_SESSION["c_id"]?></th>
        </tr>
        </thead>
        <!--  -->
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">First Name</th><td colspan="4"><input class="form-control brd" type="text" name="c_fname" id="c_fname" value="<?php echo $row['c_fname']; ?>" disabled /></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Middle name</th><td colspan="4"><input class="form-control brd" type="text" name="c_mname" id="c_mname" value="<?php echo $row['c_mname']; ?>" disabled /></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Last name</th><td colspan="4"><input class="form-control brd" type="text" name="c_lname" id="c_lname" value="<?php echo $row['c_lname']; ?>" disabled /></td></tr>
        <tr><th colspan="6" class="text-dark bg-light"><h6>Address</h6></th></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Village</th><td colspan="4"><input class="form-control brd" type="text" name="c_village" id="c_village" value="<?php echo $row['c_village']; ?>" disabled /><?php $_SESSION["c_village"] = $row['c_village']; ?></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">City</th><td colspan="4"><input class="form-control brd" type="text" name="tehsil" id="tehsil" value="<?php echo $row['tehsil']; ?>" disabled /><?php $_SESSION["tehsil"] = $row['tehsil']; ?></td></tr>
        <tr><th colspan="2" class=" text-justify text-uppercase font-weight-bold">District</th><td colspan="4"><input class="form-control brd" type="text" name="district" id="district" value="<?php echo $row['district']; ?>" disabled /><?php $_SESSION["district"] = $row['district']; ?></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">State</th><td colspan="4"><input class="form-control brd" type="text" name="state" id="state" value="<?php echo $row['state'];?>" disabled /><?php $_SESSION["state"] = $row['state']; ?></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Pincode</th><td colspan="4"><input class="form-control brd" type="text" name="pincode" id="pincode" value="<?php echo $row['pincode']; ?>" disabled /><?php $_SESSION["pincode"] = $row['pincode']; ?></td></tr>
        <tr><th colspan="6" class="text-dark bg-light"><h6>Contact</h6></th></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Email</th><td colspan="4"><input class="form-control text-lowercase brd" type="text" name="c_email" id="c_email" value="<?php echo $row['c_email']; ?>" disabled /></td></tr>
        <tr><th colspan="2" class="text-justify text-uppercase font-weight-bold">Mobile</th><td colspan="4"><input class="form-control brd" type="text" name="c_mobile" id="c_mobile" value="<?php echo $row['c_mobile']; ?>" disabled /></td></tr>
        </table></form></div>

                        <?php
                    }
                }
                        ?>

        </div><div class="col-md-6 mt-5"><div id="my_orders" class="mt-5">
        <!-- here display orders -->
        </div>
        <div id="dispatched">
        <!-- Here display dispached products and time to reached product to address -->
        </div></div></div></div>
        <?php                
                    }
                }
        ?>
    <?php
        include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
    $(document).ready(function(){
    function printDiv(divName)
    {
        var printcontents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printcontents;
        window.print();
        document.body.innerHTML =originalContents;
    }
    $(document).on("click",".print",function(){
        printDiv('my_orders');
    })
        function load()
        {
            $.ajax({
                url:"c_fetchorders.php",
                success:function(data)
                {
                    $('#my_orders').append(data);
                }
            })
        }
        load();
        function dispatchproduct()
        {
            $.ajax({
                url:"c_proddispatchdetail.php",
                success:function(data)
                {
                    $('#dispatched').append(data);
                }
            });
        }
        dispatchproduct();
        $('#update-client-form').on("submit",function(e){
            e.preventDefault();
           var formData = new FormData(this);
           $.ajax({
               url:"c_update-client.php",
               type:"POST",
               data:formData,
               contentType:false,
               processData:false,
               success:function(data)
               {
                  alert(data);
                  setTimeout(() => {
                      location.reload();
                  }, 600);
               }
           })
        });
    })
    $('#update_profile').click(function(){
        $('#view_client_data').hide();
    })
    </script>
</body>
</html>