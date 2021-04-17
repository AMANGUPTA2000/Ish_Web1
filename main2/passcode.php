<?php
include('security.php');

if(isset($_POST['login_btn2']))
{
    $pass_login = $_POST['passwordd']; 
    

    $query = "SELECT * FROM register WHERE password='$pass_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_fetch_array($query_run))
    {
        header('Location: index.php');
    } 
    
    else
    {
        $_SESSION['status'] = "Password is Invalid";
        header('Location: password.php');
    }
    
}
?>