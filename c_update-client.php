<?php
// error_reporting(0);
   include('config.php');

            $c_profilepic = $_FILES['c_profilepic']['name'];
            $tmp_file =$_FILES['c_profilepic']['tmp_name'];
            $extension =pathinfo($c_profilepic,PATHINFO_EXTENSION);
            $extensions = array("jpg","jpeg","png","gif");
         if(in_array($extension,$extensions))
            {
                $file =rand().".".$extension;
                $final='Assets/upload-images/'.$file;
                $result = move_uploaded_file($tmp_file,$final);
                if($result)
                    {
                    $c_id = $_POST['c_id'];
                    $c_fname =$_POST['c_fname'];
                    $c_mname =$_POST['c_mname'];
                    $c_lname =$_POST['c_lname'];
                    $c_village =$_POST['c_village'];
                    $tehsil =$_POST['tehsil'];
                    $district =$_POST['district'];
                    $state =$_POST['state'];
                    $c_email =$_POST['c_email'];
                    $c_mobile =$_POST['c_mobile'];
                    $pincode =$_POST['pincode'];
                    $q="UPDATE client_registration set c_fname='{$c_fname}',c_mname='{$c_mname}',c_lname='{$c_lname}',c_village='{$c_village}',tehsil='{$tehsil}',district='{$district}',state='{$state}',pincode={$pincode},c_email ='{$c_email}',c_mobile={$c_mobile},c_profilepic = '{$file}' where c_id = $c_id";
                    $query = mysqli_query($connection,$q) or die("Query not executed properly");
                    if($query)
                    {
                        echo "Your Profile Update successfully";
                    }
                    else
                    {
                        echo "Data not update properly";
                    }
                    }
                    else
                    {
                    echo "image not uploaded";
                    }
            }
            else
            {
                $c_id = $_POST['c_id'];
                $c_fname =$_POST['c_fname'];
                $c_mname =$_POST['c_mname'];
                $c_lname =$_POST['c_lname'];
                $c_village =$_POST['c_village'];
                $tehsil =$_POST['tehsil'];
                $district =$_POST['district'];
                $state =$_POST['state'];
                $c_email =$_POST['c_email'];
                $c_mobile =$_POST['c_mobile'];
                $pincode =$_POST['pincode'];
                $q="UPDATE client_registration set c_fname='{$c_fname}',c_mname='{$c_mname}',c_lname='{$c_lname}',c_village='{$c_village}',tehsil='{$tehsil}',district='{$district}',state='{$state}',pincode={$pincode},c_email ='{$c_email}',c_mobile={$c_mobile} where c_id = $c_id";
                $query = mysqli_query($connection,$q) or die("Query not executed properly");
                if($query)
                {
                    echo "Profile update successfully";
                }
                else
                {
                    echo "Data not update properly";
                }
            }
       
?>
