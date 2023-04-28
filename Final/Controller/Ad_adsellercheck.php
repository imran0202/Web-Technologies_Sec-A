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
        header('location:../View/Ad_seller.php?err=null');
    }
    
       
    if($role == "seller"){
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'role'=>$role, 'dob'=>$dob,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'p_pic'=>$p_pic];
        $status=insertSuser($user);

        if($status){
            header('location:../View/Ad_addseller.php?msg=success');
        }
        else
        {
            header('location:../View/Ad_addseller.php?err=database_error');
        }
       
        
    }
    elseif($role == "customer"){
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'role'=>$role, 'dob'=>$dob,'mobile_no'=>$mobile_no, 'gender'=>$gender, 'p_pic'=>$p_pic];
        $status=insertCuser($user);

        if($status){
            header('location:../View/Ad_addseller.php?msg=success');
        }
        else
        {
            header('location:../View/Ad_addseller.php?err=database_error');
        }
       
        
    }
?>