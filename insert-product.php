<?php

if(($_FILES['p_img']['name']!=""))
{
        $filename = $_FILES['p_img']['name'];
       
        $filetmp =$_FILES['p_img']['tmp_name'];
       
       
        $extension = pathinfo($filename,PATHINFO_EXTENSION);
       $valid_extension = array("png","jpeg","jpg","gif","svg");
        
    if(in_array($extension,$valid_extension))
    {
        $filename = rand().".".$extension;
        $path ="Assets/upload-images/";
            $final =$path.$filename;
            move_uploaded_file($filetmp,$final); 
            $p_name = $_POST['p_name'];
            $pdesc = $_POST['pdesc'];
            $c_name = $_POST['c_name'];
            $sc_name = $_POST['sc_name'];
            $p_brand = $_POST['p_brand'];
            $c_format = $_POST['c_format'];
            $p_price = $_POST['p_price'];
            $p_search = $_POST['p_search'];
            $pd_ck = $_POST['pd_ck'];
            date_default_timezone_set('Asia/Kolkata'); //set indian time Zone
            $dt = date('d-M-Y H:i:s'); //set date and time
            $dt1 = date('dis');    //set date for pid_with_name
             $date_time = $dt;
             $p_id = $dt1;
        if(!$c_name =="" AND !$sc_name == ""AND !$pd_ck=="")         
        {
            $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("DataBase not connected");
            $q = "insert into product values($p_id,'$p_name','$filename','$pdesc','$c_name','$sc_name','$p_brand','$c_format',$p_price,'$p_search','$pd_ck','$date_time')";
            if(mysqli_query($connection,$q))
                {
                    echo 1; 
                }
                else
                {
                echo 0;
                }
        }
        else
        {
            echo 0;
        }
    }
    else
    {
        echo 0;
    }



}
else
{
    echo 0;
}


?>