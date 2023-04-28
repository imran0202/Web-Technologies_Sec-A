<?php 
    session_start();

    $username = $_POST['up_username'];
    $email = $_POST['up_email'];
    $mobile_no = $_POST['up_mobile_no'];
    $img = $_POST['up_img'];
    
    
    if($username == "" && $email == "" && $mobile_no== "" && $img == "") 
    {
        header('location:AdminProfile.php?err=null');
    }

    else{
        $admin = ['up_username'=> $username, 'up_email'=>$email, 'up_mobile_no'=>$mobile_no, 'up_img'=>$img];
        $_SESSION['admin'] = $admin;

        header('location:AdminProfile.php');
    }
?>