<?php
    // session_start();
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
   .mt
   {
       margin-top:100px;
   }
  
   </style>
</head>
<body>
    <?php
        include('C_header.php');
    ?>
    <div class="container"><div class="row"><div class="col-md-12 mt">
        <?php
        $cart = $_SESSION["shoping-cart"];
            // $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("Data not found"); 
            // $query = "select cr.c_fname,c.c_id, p.p_id, p.p_name from product p inner JOIN cart c inner join client_registration cr ON p.p_id=c.p_id AND c.c_id=cr.c_id";
            // $result = mysqli_query($connection,$query) or die("Data not found");
            $output="";
                 $output.='<table class="table table-success table-hover table-borderless"><thead class="thead-dark"><tr scope="row">
                <th scope="col">Cust Name</th>
                <th scope="col">Action</th>
                </tr></thead>';
                foreach($cart as $c)
                {
                    if(!empty($c))
                    {
                    $output.="<tbody><tr scope='row'>
                    <td scope='col'>{$c["p_id"]}</td>
                    <td scope='col'><button class='btn btn-primary del-cart' data-id='{$c["p_id"]}'><span><i class='fa fa-trash'></i></span></button></td>
                    </tr></tbody>";
                    }
                }
            echo $output.="</table>";    
        ?>

        <p class="text-danger">select cr.c_fname,c.c_id, p.p_id, p.p_name from product p inner JOIN cart c inner join client_registration cr ON p.p_id=c.p_id AND c.c_id=cr.c_id</p>
       
    </div></div>
    <div class="row"><div class="col-md-12">
    <button class="btn btn-primary" data-toggle="collapse" data-target="#datahide">Lern more</button>
    <p class="collapse" id="datahide">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi ullam totam laudantium quibusdam quisquam atque, dolores nihil aperiam velit iste, animi, deserunt ipsum excepturi ad consequuntur ex? Eligendi, pariatur quisquam cum incidunt harum tempore, cumque laborum repudiandae explicabo libero possimus! Dignissimos ipsum aliquam adipisci iure nemo vero a reprehenderit non alias, eaque iste esse magni ipsa commodi necessitatibus eum nihil aperiam quibusdam labore eius sint quis, voluptatem sapiente? Quisquam quo, inventore, ut quidem nisi officiis nihil saepe excepturi explicabo blanditiis facere necessitatibus. Quasi deserunt ratione temporibus laudantium earum? Velit libero officiis dolore quam modi necessitatibus commodi est esse neque provident eum repellendus unde sit itaque quidem, perspiciatis magni? Veniam vel adipisci sit aut ab a voluptate autem, dolore doloremque quibusdam! Numquam hic minus rerum officia, libero autem quia maxime beatae amet sed pariatur dignissimos quibusdam quo velit debitis! Ipsam veniam et rem quidem neque, reiciendis dicta nostrum error ratione, voluptas nam, sint vel eaque provident inventore aspernatur. Ullam nemo delectus deleniti beatae tenetur maxime deserunt vero ex suscipit natus debitis est consectetur quisquam, pariatur earum totam? Autem odio dolorem facilis totam magni, recusandae perspiciatis quibusdam et, blanditiis labore consectetur nostrum voluptatum adipisci soluta rerum est consequatur velit enim dolores fugit repellat non ex pariatur nulla! Dolore nesciunt, debitis quod explicabo provident, id harum accusamus, voluptas culpa aliquam optio. Rerum, aperiam illo. Repellendus sint nulla, id, aliquid natus molestias tempore autem aperiam nisi, esse dicta commodi asperiores. Obcaecati, officiis similique. Quidem voluptatum fuga cupiditate magni ab optio officiis dicta voluptatibus voluptate praesentium hic velit commodi similique nihil exercitationem ipsum explicabo est sapiente neque odio, sunt esse ducimus tempora corporis! Rem labore molestias quas atque commodi ducimus, rerum, temporibus voluptatibus eaque nam quod quae, debitis omnis fugit hic blanditiis esse illo fuga ullam numquam. Officiis aliquam saepe doloribus, placeat veniam, sequi, ipsam fugit libero officia voluptas laudantium id magnam porro inventore enim. Incidunt fuga iste veniam aliquid veritatis recusandae harum vero aut quia tempora repellendus doloremque blanditiis unde rerum voluptatem ut, magnam, possimus rem, repudiandae velit! Sapiente cum laboriosam doloribus deserunt, nostrum aliquam. Delectus dolorem sint ullam dolore est laboriosam minus aliquam, numquam suscipit repellendus tempora expedita ad ipsam voluptatibus. Nemo temporibus dicta illo aliquam quod, facere, iure, nisi ipsam error nulla alias mollitia! Quidem adipisci veritatis assumenda numquam repellendus maiores ad commodi et, quibusdam iusto illum fugiat culpa ipsam accusantium? Magni, placeat quos, laborum quae nulla commodi facere nihil, deleniti labore repudiandae harum voluptas necessitatibus! Consequuntur blanditiis quas exercitationem iure quis. At sequi velit sit dolorem optio eveniet ullam consequuntur doloribus sint dolorum minima inventore quibusdam, dolores unde dignissimos quisquam! Numquam maxime quidem odit molestias ipsa quo pariatur dolor sapiente, veritatis exercitationem, vel nam dolorum ipsum. Dignissimos fugit odio saepe expedita alias veniam magnam cupiditate ullam non nostrum, repellat eligendi soluta maiores obcaecati! Tenetur libero temporibus quam, ipsum earum repellendus ut eius suscipit, possimus corrupti est qui vitae inventore. Similique qui error perspiciatis hic! Porro deleniti, dicta, illo unde vel quam exercitationem corrupti, magnam ipsam dolorum vitae similique impedit perspiciatis voluptatibus?</p>
    </div></div>
    </div>
    <?php
        include('footer.php');
    ?>
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/all.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
    <script src="CHeader.js"></script>
    <script>
    $(document).ready(function(){
        $(document).on("click",".del-cart",function(){
            var p_id = $(this).data('id');
            // alert("This Id Send for Delete "+ p_id);
            if(confirm("Do you want to Delete this Product form Cart"))
            {
            $.ajax({
                url:"del-cart.php",
                type:"POST",
                data:{p_id:p_id},
                success:function(data)
                {
                    if(data == 0)
                    {
                    alert("Your Product outOf Cart");
                    document.location.reload();
                    }
                }
            });
            }
        })
    });
    </script>
</body>
</html>