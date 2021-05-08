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
</head>
<body>
    <?php
        include('C_header.php');
    ?>
    <div class="container"><div class="row"><div class="col-md-12 mt-5">
        <table class="table table-hovered table-bordered">
        <tr>
        <th class="bg-info"></th><td class="bg-info"></td><td colspan="2" align ="center" class="alert alert-success" valign="middle">
        <?php
                $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Database not connected");
                $query = "select ";
        ?>
        </td><th class="bg-info"></th><th class="bg-info"></th>
        </tr>
        <tr>
        <th class="text-uppercase font-weight-bold">Name:</th><td class="text-uppercase font-weight-bold"><a href="#"> <?php echo $_SESSION["c_fname"]?> <?php echo $_SESSION["c_lname"]?></a></td>
        <th class="text-uppercase font-weight-bold">Email:</th><td><a href="#"> <?php echo $_SESSION["c_usrname"]?></a></td>
        <th class="text-uppercase font-weight-bold">ID:</th><td><a href="#"> <?php echo $_SESSION["c_id"]?></a></td>
        </tr>
        </table>
        </div></div></div>    
    <?php
        include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
</body>
</html>