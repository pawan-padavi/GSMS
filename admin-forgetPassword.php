<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to principleRegistration.php page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
</head>
<body>
    <div class="container">
    <div class="row"><div class="offset-md-3"></div><div class="col-md-6 mt-5">
    <table class="table table-bordered table-hover">
        <form  id="recoverPassword" name="recoverPassword" class="form-group">
        <thead class="bg-info"><tr><th class="text-center" colspan="2">Recover Username or Password Form </th></tr></thead>
        <tbody><tr><th>Admin ID</th><td><input class="form-control" type="number" name="aid" id="aid"></td></tr>
        <tr><th colspan="2" ><center><button type="submit" class="btn btn-success">Recover Username and Password</button></center></th></tr>
        <tr><th colspan="2" ><center><a href="Admin-login.php"><button type="button" class="btn btn-primary">Login</button></a></center></th></tr>
        </form>
        </tbody>
    </table>
    <div id="message"></div>
    <center><div id="print"></div></center>
    </div><div class="offset-md-3"></div></div>
    </div>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
        $(document).ready(function(){
            $('#aid').on("focus",function(){
                $(this).addClass('bg-warning text-light');
            });
            $('#aid').on("blur",function(){
                $(this).removeClass('bg-warning text-light');
            });
            
            $('#recoverPassword').on("submit",function(e){
                $(this).hide();
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"admin-recoverPassword.php",
                    type:"POST",
                    data:formData,
                    contentType:false,
                    processData:false,
                    success:function(data)
                    {
                        $('#message').html(data);
                        $('#message').addClass('bg-primary text-light text-weight-bolder alert');
                        $('#print').addClass('btn btn-info');
                        $('#print').html('Print');
                        
                        $('#print').on("click",function(){
                           window.print();
                            
                        })
                    }
                });
            });
        });
    </script>
</body>
</html>