<?php
include ('../Model/userModel.php');

session_start();

$nameOfUser="";
$emailOfUser="";
$phoneOfUser="";
$pOfUser="";

$user=$_SESSION['username'];

                            
$con = getConnection();
$sql = "SELECT * FROM admin WHERE username='$user'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $nameOfUser=$row['username'];
        $emailOfUser=$row['email'];
        $phoneOfUser=$row['mobile_no'];
        $pOfUser=$row['p_pic'];
    }
} else {
    echo "<td colspan=\"6\">No data found</td>";
}
if(isset($_POST['update']))
{
    
    $nameOfUser=$_POST['name'];
    $emailOfUser=$_POST['email'];
    $phoneOfUser=$_POST['mobile_no'];
    $con = getConnection();
    $sql = "UPDATE admin SET username='$nameOfUser', email= '$emailOfUser',mobile_no= '$phoneOfUser'WHERE username='$user' ";
    $result = mysqli_query($con, $sql);
    if ($result==TRUE)
    {
        header('location:../View/AdminProfile.php?err=updated');
    }
    else
    {
        header('location:../View/AdminProfile.php?err=not_updated');
    }

}    
if(isset($_POST['delete']))
{
    if($nameOfUser != "")
    {
        
        $con = getConnection();
    
        $sql = "DELETE FROM admin WHERE username='$user'";
    
        $status = mysqli_query($con, $sql);
        return $status;
        if($status==TRUE){
        session_destroy();
        header('location:../View/Adminlogin.php?err=deleted');
        
        
    }
    }

    else
    {
        header('location:../View/AdminProfile.php?err=not_deleted');
    }
}
    //header("Location:login.php"); 
                   

?>
