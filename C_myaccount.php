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
        <h5>Name: <a href="#"> <?php echo $_SESSION["c_fname"]?> <?php echo $_SESSION["c_lname"]?></a></h5>
        <h5>Email: <a href="#"> <?php echo $_SESSION["c_usrname"]?></a></h5>
        <h5>ID: <a href="#"> <?php echo $_SESSION["c_id"]?></a></h5>
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