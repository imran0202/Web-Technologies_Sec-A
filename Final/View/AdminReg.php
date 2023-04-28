<?php

require_once "../Asset/alertMsg.php";
require_once "../Controller/AdminController.php"
?>
<html>

    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <fieldset>
         <!-- <style>
           body {
             background-image: url('Pictures/Bck.jpg');
            }
            </style>  -->
        <div align="left">
            <img src="Pictures/AsianMART.png" width="80px" height="60px">
        </div>
		   <h1 align="center">Registration</h1>
		    <form action="../Controller/AdminRegcheck.php" onsubmit="return_validate()" method="post">
                
                                           
			    <table border="1"align="center">
               
					<tr>
						<td>Username: </td>
						<td><input type="text" size="30" name="username" value="" placeholder="Enter your username"></td>
					     
                    </tr>
                    <tr>
						<td>Email: </td>
						<td><input type="text" size="30" name="email" value="" placeholder="Enter your email"></td>
					    
                    </tr>
                    <tr>
						<td>Mobile No: </td>
						<td><input type="text" size="11" name="mobile_no" value="" placeholder="Enter your mobile no"></td>
					    
                    </tr>
					<tr>
						<td>New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					    
                    </tr>
                    <tr>
						<td>Retype New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					    
                    </tr>
                    <tr>
                        <td>User Type</td>
                        <td>
                            <select name="role">
                                <option value="admin">admin</option>
                                <option value="customer">customer</option>
                                <option value="seller">seller</option>
                            </select>
                        </td>
                    </tr> 
                    
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" name="dob" value="" /></td>
                    </tr>
                    <tr>
                        <td>gender</td>
                        <td>
                            <select name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </td>
                    </tr> 
					<tr>
                        <td>Enter your profile pic</td>
                        <td><input type="file" id="p_pic" name="p_pic" accept="image/*"></td>
						  
					</tr>
					<tr>
    
						<td align="center"colspan="2"><br><input type="submit" value="Register"><br>
                        <?php 

                            if(isset($_GET['err'])){
                            
                            if($_GET['err'] == 'null'){
                                // alertMSg("null");
                                echo "Please fill all the requirement";
                            }
                            elseif($_GET['err']=='database_error'){
                                echo "This username is taken!";;
                            }
                            }
                        ?>
                        <br><a href ="Adminlogin.php" >Already have an account.</a>
					</tr>
					
				</table>
		 	</form>
            <script src="js/signup.js"></script>
		</fieldset>
    </body>