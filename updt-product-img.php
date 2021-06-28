<?php
        if(isset($_POST['submit'])&&($_POST['submit']=='submit'))
        {
            if($_FILES['p_img']['name']!="")
            {
                $p_img =$_FILES['p_img']['name'];
                $extension = pathinfo($p_img,PATHINFO_EXTENSION);
                $validExtension =array("jpg","jpeg","png","gif","svg");
                if(in_array($extension,$validExtension))
                {
                    $newName = rand().".".$extension;
                    $path = "Assets/upload-images/".$newName;
                    $final = move_uploaded_file($_FILES['p_img']['tmp_name'],$path);

                    if($final)
                    {
                        $servername ="localhost";
                        $username ="root";
                        $password = "";
                        $databasename = "satpuda_online_shop_db";
                        $p_id =$_POST['p_id'];
                        $connection = mysqli_connect($servername,$username,$password,$databasename) or die("Database not connected");
                        $query = "UPDATE product SET p_img ='$newName' where p_id='$p_id'";
                        $result = mysqli_query($connection,$query) or die("query not executed");  
                        if($result)
                        {
                            header("location:products.php");
                        }
                        else
                        {
                            header("location:products.php");
                        }
                    }else{
                        header("location:products.php");
                    }
                }
                else
                {
                    header("location::products.php");
                }
            }
            else
            {
                header("location:products.php");
            }
        }
        else
        {
            header("location:products.php");
        }
?>
