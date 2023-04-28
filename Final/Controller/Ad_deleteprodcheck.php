<?php
include ('../Model/Db_config.php');

$con = getConnection();

$name = $_GET['delete'];



$sql1 = "DELETE FROM beverages WHERE name = '$name'";
$sql2 = "DELETE FROM meat WHERE name = '$name'";
$sql3 = "DELETE FROM cosmetics WHERE name = '$name'";

$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);


if($result1) {      

    header('location:../View/Ad_viewprod.php?err=deleted');
        
}
elseif($result2) {      

    header('location:../View/Ad_viewprod.php?err=deleted');
    
}
elseif($result3) {      

    header('location:../View/Ad_viewprod.php?err=deleted');
    
}
else
    {
        header('location:../View/Ad_viewprod.php?err=not_deleted');
    }


// elseif(isset($_GET['delete'])) {
//     $name = $_GET['delete'];
//     $sql = "DELETE FROM meat WHERE name = '$name'";
//     $result = mysqli_query($con,$sql);

    
        
//         if($result){
    
//         header('location:../View/Ad_viewprod.php?err=deleted');
        
        
//     }
    

//     else
//     {
//         header('location:../View/Ad_viewprod.php?err=not_deleted');
//     }
// }
// elseif(isset($_GET['delete'])) {
//     $name = $_GET['delete'];
//     $sql = "DELETE FROM cosmetics WHERE name = '$name'";
//     $result = mysqli_query($con,$sql);

    
        
//         if($result){
    
//         header('location:../View/Ad_viewprod.php?err=deleted');
        
        
//     }
    

//     else
//     {
//         header('location:../View/Ad_viewprod.php?err=not_deleted');
//     }
// }
?>