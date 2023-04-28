<?php 
    session_start();

    require_once "../Model/userModel.php";
   

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role= $_POST['role'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobile_no = $_POST['mobile_no'];
    $gender = $_POST['gender'];
    $p_pic = $_POST['p_pic'];
    
    
    if($username == "" || $password == "" || $role == "" || $email == "" || $dob == "" || $mobile_no == "" || $gender == "" || $p_pic == "") {
        // alertMsg("invalid");
        header('location:../View/AdminReg.php?err=null');
    }
    elseif($role == "admin"){
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'role'=>$role, 'dob'=>$dob,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'p_pic'=>$p_pic];
        $status=insertAuser($user);

        if($status){
            header('location:../View/Adminlogin.php');
        }
        else
        {
            header('location:../View/AdminReg.php?err=database_error');;
        }
       
        
    }
    elseif($role == "seller"){
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'role'=>$role, 'dob'=>$dob,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'p_pic'=>$p_pic];
        $status=insertSuser($user);

        if($status){
            header('location:../View/Adminlogin.php');
        }
        else
        {
            header('location:../View/AdminReg.php?err=database_error');;
        }
       
        
    }
    elseif($role == "customer"){
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'role'=>$role, 'dob'=>$dob,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'p_pic'=>$p_pic];
        $status=insertCuser($user);

        if($status){
            header('location:../View/Adminlogin.php');
        }
        else
        {
            header('location:../View/AdminReg.php?err=database_error');
        }
       
        
    }


              //Reg with File;

    // elseif($role == "admin"){
    //     $admin = ['username'=> $username, 'password'=>$password, 'role' => $role, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'img'=>$img];
    //     $_SESSION['admin'] = $admin;
    //     $admin = $username."|".$password."|".$role ."|".$email."|".$DOB."|".$mobile_no."|".$gender."|".$img."\r\n";
    //     $file = fopen('admin.txt', 'a');
    //     fwrite($file, $admin);
    //     fclose($file);
    //     header('location:../View/Adminlogin.php');
    // }
    // elseif($role == "customer"){
    //     $customer = ['username'=> $username, 'password'=>$password, 'role' => $role, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'img'=>$img];
    //     $_SESSION['user'] = $customer;
    //     $customer = $username."|".$password."|". $role."|".$email."|".$DOB."|".$mobile_no."|".$gender."|".$img."\r\n";
    //     $file = fopen('user.txt', 'a');
    //     fwrite($file, $customer);
    //     fclose($file);
    //     header('location:../View/Adminlogin.php');
    // }
    // else{
    //     $user_data = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'img'=>$img];
    //     $_SESSION['user_data'] = $user_data;
    //     $user_data = $username."|".$password."|".$email."|".$DOB."|".$mobile_no."|".$gender."|".$img."\r\n";
    //     $file = fopen('user.txt', 'a');
    //     fwrite($file, $user_data);
    //     fclose($file);
    //     header('location:Adminlogin.php');
        
    // }
?>