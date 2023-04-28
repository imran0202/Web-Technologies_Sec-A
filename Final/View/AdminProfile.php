<?php
    

    include '../Controller/AdminProfilecheck.php';

	//$id = $_GET["id"];

    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=login_req');
    }
?>
<html>
    <head>
        <title>Admin Profile</title>
    </head>
    <body>
        <fieldset>
           
           
        <div align="right">               
        <b><a target="_self" href="AdminHome.php">Home</a> |</b>
        
        <b><a target="_self" href="AdminLogout.php">Logout</a></b>
        </div>
        
        <div align="left">
            <img src="Pictures/AsianMART.png" width="80px" height="60px">
        </div>
        
        <center><h1>Admin Profile</h1></center>
       
        <center><img src="Pictures/<?php echo $pOfUser;?>"  width="200px" height="200px" /></center>
        
        <form name="profile" action="" method="post">
            <br>
            <label> Name : </label> <input type="text" id="name" name="name" value="<?php echo $nameOfUser; ?>"> <br>
            
            <br>
            Email : <input type="text" id="email" name="email" value="<?php echo $emailOfUser; ?>"> <br>
            <br>
            Contact : <input type="text" id="contact" name="mobile_no" value="<?php echo $phoneOfUser; ?>"> <br>
            <br>
            
            
                <?php if(isset($_GET['err'])){
                    if($_GET['err'] == 'updated'){
                        echo "Your account have been updated successfully";
                    }

                    else if($_GET['err'] == 'not_updated'){
                        echo "Account not updated";
                    }

                    else if($_GET['err'] == 'not_deleted'){
                        echo "Not deleted";
                    }
                    
                } ?>
            <br>
            <input name="update" type="submit" id="green" onclick="return validateProfile()" value="UPDATE">
            <input name="delete" type="submit" id="green" onclick="return deleteMsg()" value="DELETE">
            <br><br>
            </form>
            
        </table>
                
        </fieldset>
    </body>
</html>