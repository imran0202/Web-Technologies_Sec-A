<?php
include ('../Model/Db_config.php');

$con = getConnection();

$name = $_GET['delete'];



$sql1 = "DELETE FROM seller WHERE username = '$name'";
$sql2 = "DELETE FROM customer WHERE username = '$name'";


$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);



if($result1==TRUE) {      

    header('location:../View/AdminSeller.php?err=deleted');
        
}
elseif($result2==TRUE) {      

    header('location:../View/AdminCustomer.php?err=deleted');
    
}

