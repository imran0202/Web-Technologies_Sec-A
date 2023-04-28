<?php

 if(!isset($_COOKIE['status'])){
    header('location: Adminlogin.php?err=login_req');
}
?>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css" />
      

    <!-- <style>
        table{
          border-collapse: collapse;
          width: 100%; 
        }
       th,td,tr table{
          border : 2px solid black; 
          padding: 5px; 
        }

        th{
            background-color: lightblue;
            color: black;
            height: 30px;
        }
       a{
        text-decoration: none;
       }
       a:hover{
        color: brown;
       }


    </style> -->
 
        <title>Add Product</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">               
            <b><a target="_self" href="AdminHome.php">Home</a> |</b>
            
            <b><a target="_self" href="AdminLogout.php">Logout</a></b>
            </div>

            <div align="left">
                <img src="Pictures/a.png" width="80px" height="60px">
            </div>

            <center><h1>Add New User</h1></center>

<body>
    <table>
        
                <form method="post" action="../Controller/Ad_adsellercheck.php" >
                
                <tr>
                        <td>User Type</td>
                        <td>
                            <select name="role">
                                <option value="customer">customer</option>
                                <option value="seller">seller</option>
                            </select>
                        </td>
                    </tr>   
                <tr>
						<td> Username: </td>
						<td><input type="text" size="30" name="username" value="" placeholder="Enter username"></td>
					     
                    </tr>
                    <tr>
						<td>Email: </td>
						<td><input type="text" size="30" name="email" value="" placeholder="email"></td>
					    
                    </tr>
                    <tr>
						<td>Mobile No: </td>
						<td><input type="text" size="11" name="mobile_no" value="" placeholder="mobile no"></td>
					    
                    </tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					    
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
                        <td>Enter user profile pic</td>
                        <td><input type="file" id="p_pic" name="p_pic" accept="image/*"></td>
						  
					</tr>
                    <tr>
                        <td>
							<?php 
								if(isset($_GET['msg'])){
									if($_GET['msg'] == 'success'){
										echo "User added successfully!";
									}

									elseif($_GET['msg']== 'null'){
										echo "Please insert all value";
									}
                                }
                                ?>
                        </td>
                            </tr>
                            <tr>
                                <br>
    
						<td align="center"colspan="2"><br><input type="submit" value="submit"><br>
    </tr>
            </fieldset>
        </form>
    </table>

</body>

</html>