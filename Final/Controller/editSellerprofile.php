<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }
    
?>
<html>
    <head>
        <title>Seller profile</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">
                <!-- Navbar -->
                <b><a target="_blank" href="SellerProfile.php">Profile</a> |</b>
                
                <b><a target="_blank" href="SellerHome.php">Home</a> | </b>
                
                <b><a target="_blank" href="salesAdminDetails.html">Sales details</a> | </b>
                
                <b><a target="_blank" href="AdminLogout.php">Logout</a></b>
                </div>
                
                <div align="left">
                    <img src="AsianMART.png" width="80px" height="60px">
                </div>
                
                <center><h1>Edit Profile</h1></center>
                
                <form method="post" action="editSellerProfilecheck.php">
                    
                    <table border="0" align="center" width="50%">
                        <tr>
                        <td>Update your name : </td> 
                        </tr>
                        <tr>
                            <td><input type="text" size="30" name="up_name" value="<?php echo $_SESSION['seller']['username']?>" placeholder=""> </td>
                           
                        </tr>
                        <tr>
                            <td>Enter your new contact no:</td>
                        </tr>
                        <tr>
                            <td><input type="0-10" size="30" name="up_phone" value="<?php echo $_SESSION['seller']['mobile_no']?>" placeholder="Phone NO"></td>
                        </tr>
                        <tr>
                            <td>Enter your new email:</td>
                        </tr>
                        <tr>
                            <td><input type="text" size="30" name="up_email" value="<?php echo $_SESSION['seller']['email']?>" placeholder="Email"></td>
                        </tr>
                        <tr>
                            <td>Enter your new profile picture:</td>
                        </tr>
                        <tr>
                            <td><input type="file" id="img" name="up_img" accept="image/*"></td>
                        </tr>
                        <tr>
                            <td align="center"colspan="2"><br><input type="submit" value="Submit"><br>
                        </tr>
                    </table>
                    </form>                   
        </fieldset>
    </body>
</html>