<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome GSMS.com</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/css/all.css">
    <link rel="stylesheet" href="Assets/css/owl.carousel.css">
    <link rel="stylesheet" href="Assets/css/owl.theme.green.css">
    <style>
    body
    {
        /* background-image:url('Assets/grocery.jpg'); */
        background-color:;
        background-repeat:no-repeat,repeat;
        background-position:center;
        background-size:cover;
        opacity:1;
    }
    .mt
    {
        margin-top:100px;
    }
    .owl-carousel{
        position:static;
    }
    #cart-nd-qunt div
    {
        display:block;
        padding:5px;
    }
    #message
    {
        position:relative;
    }
    .sd
    {
        box-shadow:10px 2px 20px 0px black;
    }
    .sd:hover
    {
        box-shadow:0px 5px 20px 0px green;
    }
    #search_submit
    {
            box-shadow:0px 5px 5px 0px indigo;
            background:black;
            color:white;
    }
    #search:hover{
     background-color:black;
     color:white;
     text-transform:capitalize;
    }
    </style>
</head>
<body>
    <?php
        include('C_header.php');
    ?>
    <div class="container"><div class="row"><div class="offset-md-2"></div><div class="col-md-8 mt">
    <table class="table table-borderless"><tr><th><input type="text" name="search" id="search" class="form-control w-100"></th><th><span><button class="btn" id="search_submit">Search</button></span></th></tr></table>
    </div><div class="offset-md-2"></div></div></div>
    <div class="container"><div class="row"><div class="mt-1 col-md-12">
    <div class="owl-carousel owl-theme mt-2 crsl">
    <div class="item bg-danger "><img src="Assets/images/1.jpg" class="img-fluid" alt="Image not supported"></div>
    <div class="item bg-warning "><img src="Assets/images/2.jpg" class="img-fluid" alt="Image not supported"></div>
    <div class="item bg-dark "><img src="Assets/images/8.jpg" class="img-fluid" alt="Image not supported"></div>
    <div class="item bg-light "><img src="Assets/images/3.jpg" class="img-fluid" alt="Image not supported"></div>
    <div class="item bg-success "><img src="Assets/images/6.jpg" class="img-fluid" alt="Image not supported"></div>
    <div class="item bg-warning "><img src="Assets/images/5.jpg" class="img-fluid" alt="Image not supported"></div>
    <div class="item bg-danger "><img src="Assets/images/7.jpg" class="img-fluid" alt="Image not supported"></div>    
    <div class="item bg-dark "><img src="Assets/images/4.jpg" class="img-fluid" alt="Image not supported"></div>
    </div>    
    </div></div>
    <div id="message"></div>
    <div id="show-search-Products" class="mt-5"></div>
    <div id="show-Products"></div>
    
</div>
    <?php
        include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="Assets/js/owl.carousel.js"></script>
    <script src="CHeader.js"></script>
    <!-- jquery script for carouserl -->
    <script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({  
            items:3,
            margin:20,
            loop:true,
            // nav:true,
            mouseDrag:true,
            autoplay:true,
            autoplayTimeout:2000,
            // stagePadding:50,   
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    itmes:3,
                    nav:false,
                },
                1000:{
                    items:3,
                    nav:false,
                }
            }
        });
    })
    </script>
    <!-- carouserl script ends -->
    <!-- fetch products starts -->
    <script>
    $(document).ready(function(e){
        
        $.ajax({
            url:"c_fetch-product.php",
            type:"POST",
            success:function(data)
            {
                $('#show-Products').html(data);
            }
        });
        
        $('#search').keyup(function(){
            $('.crsl').hide();
            $('#show-Products').hide();
            var search = $(this).val();
            $.ajax({
                url:"c_search-product.php",
                type:"POST",
                data:{search:search},
                success:function(data)
                {
                    $('#show-search-Products').html(data);
                }
            });
        })
    })
    </script>
    <!-- fetch products ends -->
    <!-- product Add to cart starts -->
    <script>
        $(document).ready(function(){
            $(document).on("click",".Add-cart",function(e){
                e.preventDefault();
                var p_id = $(this).data('id');
                // alert(p_id);
                 $.ajax({
                url:"c_add-cart.php",
                type:"POST",
                data:{p_id:p_id},
                success:function(data)
                {

                        $('#message').html(data); 
                       setTimeout(() => {
                           $('#cartload').load(' #cartload');
                       }, 100);
                }
                 })
            })
        })
    </script>
    <!-- product Add to cart script ends -->
</body>
</html>