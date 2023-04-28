<?php
   /* session_start();

    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }*/
    
?>
<html>
    <head>
        <title>Admin profile</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">
                <!-- Navbar -->
                <b><a target="_blank" href="AdminProfile.php">Profile</a> |</b>
                
                <b><a target="_blank" href="AdminHome.php">Home</a> | </b>
                
                <b><a target="_blank" href="salesAdminDetails.html">Sales details</a> | </b>
                
                <b><a target="_blank" href="AdminLogout.php">Logout</a></b>
                </div>
                
                <div align="left">
                    <img src="Pictures/AsianMART.png" width="80px" height="60px">
                </div>
                
                <center><h1>Edit Profile</h1></center>
                
                <form method="post" action="controller/editAdminProfilecheck.php">
                    
                    <table border="0" align="center" width="50%">
                        <tr>
                        <td>Update your name : </td> 
                        </tr>
                        <tr>
                            <td><input type="text" size="30" name="up_name" value="<?php echo $_SESSION['admin']['username']?>" placeholder=""> </td>
                           <script>
                                   let head = document.getElementsByTagName('h1')[0].innerHTML = "TEST";
                                    
                                    function f1(){
                                        let name = document.getElementById('name').value;
                                        document.getElementsByTagName('h1')[0].innerHTML = name;
                            }</script>
                        </tr>
                        <tr>
                            <td>Enter your new contact no:</td>
                        </tr>
                        <tr>
                            <td><input type="0-10" size="30" name="up_phone" value="<?php echo $_SESSION['admin']['mobile_no']?>" placeholder="Phone NO"></td>
                        </tr>
                        <tr>
                            <td>Enter your new email:</td>
                        </tr>
                        <tr>
                            <td><input type="text" size="30" name="up_email" value="<?php echo $_SESSION['admin']['email']?>" placeholder="Email"></td>
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