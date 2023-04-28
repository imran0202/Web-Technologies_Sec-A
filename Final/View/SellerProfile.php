<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }
?>
<html>
    <head>
        <title>Seller Profile</title>
    </head>
    <body>
        <fieldset>
           
           
        <div align="right">               
        <b><a target="_self" href="SellerHome.php">Home</a> |</b>
        
        <b><a target="_self" href="AdminLogout.php">Logout</a></b>
        </div>
        
        <div align="left">
            <img src="AsianMART.png" width="80px" height="60px">
        </div>
        
        <center><h1>Seller Profile</h1></center>
       
        <center><img src=<?php echo $_SESSION['seller']['img']?>  width="200px" height="200px" /></center>
        
        <table border="0" align="center" width="50%">

            <tr>
               <td>Name </td> 
               <td><?php echo $_SESSION['seller']['username']?></td>
            </tr>

            <tr>
                <td>Phone NO</td>
                <td><?php echo $_SESSION['seller']['mobile_no']?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?php echo $_SESSION['seller']['email']?></td>
            </tr>

            <tr>
                <td>Address</td>
                <td>Batha,Riyadh,KSA<a target="_blank" href="">|Gmap</a></td>
            </tr>
            <tr>

            </tr>
            <tr>
                <td align="right">Update my profile </td>
                <td align="" colspan=""><a target="_self" href="editSellerprofile.php">Update</a></td>
            </tr>
        </table>
                
        </fieldset>
    </body>
</html>