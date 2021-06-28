<?php
    $pwd = $_POST['pwd'];
    $rpwd = $_POST['rpwd'];
    if($pwd == $rpwd)
    {
        if($_FILES['profile']['name']!="")
        {   
            $profile = $_FILES['profile']['name'];    
            $extension = pathinfo($profile,PATHINFO_EXTENSION);
            $valid_extensions =array("jpg","jpeg","png","gif","svg");
                if(in_array($extension,$valid_extensions))
                {
                    $new_Profile = rand().".".$extension;
            $path ="Assets/upload-images/".$new_Profile;
            $upload = move_uploaded_file($_FILES['profile']['tmp_name'],$path);

            if($upload)
                {
            $aid = $_POST['aid'];
            $cmpunqid = $_POST['cmpunqid'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $new_Profile;
            $usrname = $_POST['usrname'];
            // $pwd = $_POST['pwd'];
            // $rpwd = $_POST['rpwd'];
            $cmpname = $_POST['cmpname'];
        //   database connection
          $connection = mysqli_connect("localhost","root","","satpuda_online_shop_db") or die("database not connected");
          $query ="INSERT into Admin_registration VALUES($aid,$cmpunqid,'$fname','$mname','$lname','$new_Profile','$usrname','$pwd','$rpwd','$cmpname')";
          $result = mysqli_query($connection,$query);
            if($result)  
            {
              echo "Congratulation! '$fname' Now you are Admin";
            }
            else
            {
              echo "'$usrname someone already used please enter different email/username'";
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
}
else
{
    echo 11;
}
?>