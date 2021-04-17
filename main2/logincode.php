<?php
include('security.php');

if(isset($_POST['login_btn']))
{
    $mobile_login = $_POST['mobilee']; 
    

    $query = "SELECT * FROM register WHERE mobile='$mobile_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $mobile_login;
        header('Location: password.php');
    } 
    
    else
    {
        $_SESSION['status'] = "Mobile Number is Invalid";
        header('Location: loginmodal.php');
    }
    
}
?>