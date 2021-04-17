<?php
include('security.php');

if(isset($_POST['signup_btn']))
{
    $mobile_login = $_POST['mobilee']; 
    $pass_login = $_POST['passs']; 
    

    $query = "INSERT INTO register (mobile,password) VALUES ('$mobile_login','$pass_login')";
    $query_run = mysqli_query($connection, $query);
            
    if($query_run)
        {
             // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: index.php');
        }
    else 
        {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: signupmodal.php');  
        }
    
}
?>