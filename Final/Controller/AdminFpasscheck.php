<?php 
    include '../Model/userModel.php';
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];


    $status1 = aupdate($user1);
    $status2 = cupdate($user2);
    $status3 = supdate($user3);
     

    
    if($username == "" || $password == "" ) {
        header('location:../View/AdminFpass.php?err=null');
    }
    elseif($status1){
          
        header('location: ../View/Adminlogin.php?err=success');
        
    }
    elseif($status2){

        header('location: ../View/Adminlogin.php?err=success');
        
    }
    elseif($status3){

        header('location: ../View/Adminlogin.php?err=success');
        
    }
    
    else{
        header('location: ../View/AdminFpass.php?err=invalid_request');
    }








    // $user1 = ['username'=>$username, 'password'=>$password];
    // $user2 = ['username'=>$username, 'password'=>$password];
    // $user3 = ['username'=>$username, 'password'=>$password];

    // $con1=$con2=$con3="";

    // $sql1="UPDATE admin SET password='$password' WHERE username='$username' ";
    // $sql2="UPDATE seller SET password='$password' WHERE username='$username' ";
    // $sql3="UPDATE customer SET password='$password' WHERE username='$username' ";

    // $sql4 = "SELECT * FROM admin WHERE username='$username'";
    // $sql5 = "SELECT * FROM admin WHERE username='$username'";
    // $sql6 = "SELECT * FROM admin WHERE username='$username'";
    
    
    // $con = getConnection();
    

    // $result1 = mysqli_query($con, $sql1);
    // $result2 = mysqli_query($con, $sql2);
    // $result3 = mysqli_query($con, $sql3);
    // $result4 = mysqli_query($con, $sql4);
    // $result5 = mysqli_query($con, $sql5);
    // $result6 = mysqli_query($con, $sql6);

    // if($username == "" || $password == "" ) {
    //         header('location:../View/AdminFpass.php?err=null');
    //     }
    
    // elseif($result4 && $result5 && $result6 ==""){
    //     header('location: ../View/AdminFpass.php?err=invalid_request');

    // }
    
    // elseif($result1==TRUE){
          
    //     header('location: ../View/Adminlogin.php?err=success');
            
    // }
    // elseif($result2=TRUE){
    
    //     header('location: ../View/Adminlogin.php?err=success');
            
    // }
    // elseif($result3=TRUE){
    
    //         header('location: ../View/Adminlogin.php?err=success');
            
    //     }
        
    

    













    




    // else{
    //     $con = getConnection();
    //     if($)
    //     $sql = "UPDATE admin SET password='$password' WHERE username='$username' ";
    //     $result = mysqli_query($con, $sql);  
            
    //     if($result==TRUE){
    //         header('location: ../View/Adminlogin.php?err=success');
    //     }

    // }










    // elseif($role == "admin"){
    //     $file = fopen('admin.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $admin = explode("|", $data);
    //         if($admin[0] == $username && $admin[3] == $email){            
    //             $admin = ['username'=> $username, 'password'=>$password, 'role' => $role];
                
    //             $admin = $username."|".$password."|".$role."\r\n" ;
    //             $file = fopen('admin.txt', 'a');
    //             fwrite($file, $admin);
    //             fclose($file);
    //             header('location:Adminlogin.php');}
    //         elseif($admin[0] == $username && $admin[3] != $email || $admin[0] != $username && $admin[3] == $email ){

    //             header('location:AdminFpass.php?err=invalid_request');
    //         }
    //         // elseif($admin[0] != $username && $admin[3] == $email){

    //         //     header('location:AdminFpass.php?err=invalid_request');
    //         // }
    //     }

    // }
    // elseif($role == "seller"){
    //     $file = fopen('salesman.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $seller = explode("|", $data);
    //         if($seller[0] == $username && $seller[3] == $email){
    //             $seller = ['username'=> $username, 'password'=>$password, 'role'=>$role];
    //             $seller = $username."|".$password."|".$role."\r\n" ;
    //             $file = fopen('salesman.txt', 'a');
    //             fwrite($file, $seller);
    //             fclose($file);
    //             header('location:Adminlogin.php');}
    //         elseif($seller[0] == $username && $seller[3] != $email){

    //             header('location:AdminFpass.php?err=invalid_request');
    //         }
    //         elseif($seller[0] != $username && $seller[3] == $email){

    //             header('location:AdminFpass.php?err=invalid_request');
    //         }
    //     }
    // }
    
    // elseif($role == "customer"){
    //     $file = fopen('user.txt', "r");
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $customer = explode("|", $data);
    //         if($customer[0] == $username && $customer[3] == $email){
    //             $customer = ['username'=> $username, 'password'=>$password, 'role' => $role];
    //             $customer = $username."|".$password."|".$role."\r\n" ;
    //             $file = fopen('user.txt', 'a');
    //             fwrite($file, $customer);
    //             fclose($file);
    //             header('location:Adminlogin.php');}
    //         elseif($customer[0] == $username && $customer[3] != $email){

    //             header('location:AdminFpass.php?err=invalid_request');
    //         }
    //         elseif($customer[0] != $username && $customer[3] == $email){

    //             header('location:AdminFpass.php?err=invalid_request');
    //         }
    //     }
    // }
?>