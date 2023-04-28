<?php 
    session_start();
   
    require_once "../Model/userModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //for admin
    
    $user1 = ['username'=>$username, 'password'=>$password];
    $user2 = ['username'=>$username, 'password'=>$password];
    $user3 = ['username'=>$username, 'password'=>$password];
    
    $status1 = alogin($user1);
    $status2 = clogin($user2);
    $status3 = slogin($user3);

    if($username == "" || $password == "") {
        //echo "invalid username/password!";
        header('location: ../View/Adminlogin.php?err=null');
    }else if($status1){
        $_SESSION['status'] = "true";
        $_SESSION["username"] = $username;
        setcookie('status', 'true', time() + 3000, '/');
        
            header('location: ../View/AdminHome.php');
        
        
    }
    else if($status2){
        $_SESSION['status'] = "true";
        $_SESSION["username"] = $username;
        setcookie('status', 'true', time() + 3000, '/');
        
            header('location: ../View/CustomerHome.php');
        
        
    }
    else if($status3){
        $_SESSION['status'] = "true";
        $_SESSION["username"] = $username;
        setcookie('status', 'true', time() + 3000, '/');
        
            header('location: ../View/SellerHome.php');
        
        
    }
    else{
        header('location: ../View/Adminlogin.php?err=invalid_request');
    }
    
    
    
    //for customer

    // $user = ['username'=>$username, 'password'=>$password];
    // $status = clogin($user);

    // if($username == "" || $password == "") {
    //     //echo "invalid username/password!";
    //     header('location: ../View/Adminlogin.php?err=null');
    // }else if($status){
    //     $_SESSION['status'] = "true";
    //     $_SESSION["username"] = $username;
    //     setcookie('status', 'true', time() + 3000, '/');
    //     if($user==TRUE){
    //         header('location: ../View/CustomerHome.php');
    //     }
    //     else{
    //         header('location: ../View/Adminlogin.php?err=invalid_request');
    //     }
    // }
    

    
    // //for seller

    // $user = ['username'=>$username, 'password'=>$password];
    // $status = slogin($user);

    // if($username == "" || $password == "") {
    //     //echo "invalid username/password!";
    //     header('location: ../View/Adminlogin.php?err=null');
    // }else if($status){
    //     $_SESSION['status'] = "true";
    //     $_SESSION["username"] = $username;
    //     setcookie('status', 'true', time() + 3000, '/');
    //     if($user==TRUE){
    //         header('location: ../View/SellerHome.php');
    //     }
    //     else{
    //         header('location: ../View/Adminlogin.php?err=invalid_request');
    //     }
    // }
    
    



   



//Login with File


    // if($username == "" || $password == "" ) {
    //     header('location: ../View/Adminlogin.php?err=null');
    // }
    // else($role == "admin"){
    //     $file = fopen('admin.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $admin = explode("|", $data);
    //         if($admin[0] == $username && $admin[1] == $password){
    //             setcookie('status', 'true', time()+3600, '/');
    //             header('location:../View/AdminHome.php');
    //         }
    //         elseif($admin[0] == $username && $admin[1] != $password || $admin[0] != $username && $admin[1] == $password){

    //             header('location: ../View/Adminlogin.php?err=invalid_request');
    //         }
    //         // elseif($admin[0] != $username && $admin[1] == $password){

    //         //     header('location: Adminlogin.php?err=invalid_request');
    //         // }


    //     }
    // }


    // elseif($role == "seller"){
    //     $file = fopen('salesman.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $seller = explode("|", $data);
    //         if($seller[0] == $username && $seller[1] == $password){
    //             setcookie('status', 'true', time()+3600, '/');
    //             header('location:../View/SellerHome.php');
    //         }
    //         elseif($seller[0] == $username && $seller[1] != $password || $seller[0] != $username && $seller[1] == $password){

    //             header('location: ../View/Adminlogin.php?err=invalid_request');
    //         }
    //         // elseif($seller[0] != $username && $seller[1] == $password){

    //         //     header('location: Adminlogin.php?err=invalid_request');
    //         // }
    //     }
    // }
    // elseif($role == "customer"){
    //     $file = fopen('user.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $customer = explode("|", $data);
    //         if($customer[0] == $username && $customer[1] == $password){
    //             setcookie('status', 'true', time()+3600, '/');
    //             header('location:../View/CustomerHome.php');
    //         }
    //         elseif($customer[0] == $username && $customer[1] != $password || $customer[0] != $username && $customer[1] == $password){

    //             header('location: ../View/Adminlogin.php?err=invalid_request');
    //         }
            // elseif($customer[0] != $username && $customer[1] == $password){

            //     header('location: Adminlogin.php?err=invalid_request');
            // }

        // }
    // }
    // else{
    //     header('location: Adminlogin.php?err=invalid_request');
    // }
    // else{

    //     $file = fopen('user.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $user_data = explode("|", $data);
    //         if($user_data[0] == $username && $user_data[1] == $password){
    //             setcookie('status', 'true', time()+3600, '/');
    //             header('location:AdminHome.php');
    //         }
        
      
    //     echo "invalid username/pass";
    //     }
    // }
?>