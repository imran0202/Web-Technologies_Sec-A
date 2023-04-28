<html>
    <head><title>Admin Registration</title></head>
    <body>
        <fieldset>
         <style>
           body {
             background-image: url('Bck.jpg');
            }
            </style> 
        <div align="left">
            <img src="Pictures/AsianMART.png" width="80px" height="60px">
        </div>
		   <h1 align="center">Registration</h1>
		    
           <form action="../controller/AdminFpasscheck.php" method="post">
                
                    
                
			    <table border="1"align="center">
               
					<tr>
						<td>Username : </td>
						<td><input type="text" size="30" name="username" value="" placeholder="Enter your valid username"></td>
					</tr>
                    <tr>
						<td>New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					</tr>
                    <tr>
						<td>Retype New password: </td>
						<td><input type="password" size="30" name="password" value="" placeholder="Password"></td>
					
					<tr>
                        
						<td align="center"colspan="2"><br><input type="submit" value="Submit"><br>
                        
                       

                        <?php 
                            if(isset($_GET['err'])){
                                if($_GET['err'] == 'invalid_request'){
                                    echo "Please enter your valid username/email!";
                                }

                                if($_GET['err'] == 'null'){
                                    echo "Please enter your username/new password!";
                                }
                            }

                        ?>
                        <br><a href ="Adminlogin.php" >Login</a>

                        </td>
					</tr>
					
				</table>
		 	</form>
		</fieldset>
    </body>