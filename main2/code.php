<?php
include('security.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['uname'];
    $mobile = $_POST['mobilee'];
    $alt_mobile = $_POST['alt_mobilee'];
    $email = $_POST['emaill'];
    $address = $_POST['adres'];
    $dob = $_POST['dobe'];
    $gender = $_POST['gendere'];
    

    $query = "UPDATE register SET username='$name',mobile='$mobile',alt_mobile='$alt_mobile', email='$email', address='$address', dob='$dob', gender='$gender'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['username'] = $mobile;
        $_SESSION['status_code'] = "success";
        header('Location: profile.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: profile.php'); 
    }
}











if(isset($_POST['changeimag']))
{
    $id = $_POST['edit_id'];
    $image = $_FILES["pro_pic"]['name'];
    $folder = "upload/".$image;

    $query = "UPDATE register SET images='$image'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["pro_pic"]['tmp_name'],"upload/".$_FILES["pro_pic"]['name']);
        $_SESSION['status_code'] = "success";
        header('Location: profile.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: profile.php'); 
    }
}















if(isset($_POST['changepass']))
{
    $id = $_POST['edit_id'];
    $old_pass = $_POST['oldPassword'];
    $new_pass = $_POST['newPassword'];
    $conf_pass = $_POST['confirmPassword'];
    $passfin = $_POST['pass'];
    
    if($old_pass==$passfin){
        if($new_pass==$conf_pass){
    $query = "UPDATE register SET password='$new_pass' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Password Changed.";    
        $_SESSION['status_code'] = "success";
        header('Location: profile.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: profile.php'); 
    }
    }
    else{
        $_SESSION['status'] = "New Password and Confirm Password Doesn't Match.";    
        $_SESSION['status_code'] = "success";
        header('Location: profile.php'); 
    }
}
else{
    $_SESSION['status'] = "Old Password is Incorrect.";    
    $_SESSION['status_code'] = "success";
    header('Location: profile.php'); 
}
}















if(isset($_POST['changepwd']))
{
    $id = $_POST['pwd_id'];
    $pass = $_POST['pwd'];
    
    $query = "UPDATE register SET password='$pass' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Password Changed.";    
        $_SESSION['status_code'] = "success";
        header('Location: profile.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: profile.php'); 
    }
    
}


?>