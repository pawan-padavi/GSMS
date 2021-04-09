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
        <p class="text-danger">select cr.c_fname,c.c_id, p.p_id, p.p_name from product p inner JOIN cart c inner join client_registration cr ON p.p_id=c.p_id AND c.c_id=cr.c_id</p>
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