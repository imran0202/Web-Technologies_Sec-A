<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="" action="form1.php" enctype="">
        <fieldset>
        <div align="right">
                    
                    <b><a target="_self" href="publichome.html">Home</a> |</b>
                    
                    <b><a target="_self" href="login.php">Login</a> | </b>
                    
                    <b><a target="_self" href="registration.php">Registration</a> | </b>
                    
                    </div>
                    <div align="left">
                        <img src="xc.JPG" width="80px" height="60px">
                </div><hr>
        <fieldset >
            <legend>LOGIN </legend>
              
            <table>
                <tr>
                    <td>User Name :</td>
                    <td><input type="text" name="" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="" value="" placeholder=""/></td>
                
                </tr>
                <td>
                    <input type="checkbox" name="" value=""/> Remember me <br>
               
                </td>
                
                <tr align="left">
                    <td>
                        <input type="submit" name="" value="Submit"> 
                       <u> <a href="form2.html">Forgot Password? </a> </u>
                    </td>
                </tr>
                
                <?php
                // define variables and set to empty values
                $nameErr = $passwordErr =  "";
                $name = $password = "";
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                  } else {
                    $name = $_POST["name"];
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_]{2}*$/",$name)) {
                      $nameErr = "Only alpha numeric characters, period, dash and underscore allowed";
                    }
                  } }
                  ?>
            </table>
            </fieldset>
            <hr>
             <div align="center">
            <h2>Copyright @ 2017</h2>
            </fieldset>
       </form>
</body>
</html>