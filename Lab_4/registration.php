<?php
$message = '';  
$error = '';

if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label>Enter Name</label>";  
      }
      else if(empty($_POST["username"]))  
      {  
           $error = "<label>UserName cannot be empty</label>";  
      }
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label>Gender cannot be empty</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label>Enter an e-mail</label>";  
      } 
      else if(empty($_POST["date of birth"]))  
      {  
           $error = "<label>Date of Birth cannot be empty</label>";  
      }      
      else if(empty($_POST["password"]))  
      {  
           $error = "<label >Enter a password</label>";  
      }
      else if(empty($_POST["confirmpass"]))  
      {  
           $error = "<label>Confirm password field cannot be empty</label>";  
      } 
      
      
        }
?>
<html>
<head>
    <title>Form</title>
</head>
<?php
            //define variable and empty values
            $nameErr =  $emailErr = $usernameErr = $passErr = $confirmpassErr = $genderErr  = $dateofbirthErr = "";
            $name = $email = $username =$pass = $confirmpass = $gender = $dateofbirth = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                  $nameErr = "Name is required";
                } else {
                  $name = ($_POST["name"]);
                  // check if name only contains letters and whitespace
                  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";

                  }
                }}
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = ($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["username"])) {
                  $usernameErr = "UserName is required";
                } else {
                  $username = ($_POST["username"]);
                  // check if name only contains letters and whitespace
                  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $usernameErr = "Only letters and white space allowed";

                  }
                }}
              if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["dateofbirth"])){
                    $dateofbirthErr = "Birthday is required";
                }else{
                    $dateofbirth = ($_POST["birthday"]);
                    
                }}
            
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = ($_POST["gender"]);
              }
            
    ?>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<div align="right">
                    
                   <b><a target="_self" href="publichome.html">Home</a> |</b>
                    
                    <b><a target="_self" href="login.php">Login</a> | </b>
                    
                    <b><a target="_self" href="registration.php">Registration</a> | </b>
                    </div>
                    <div align="left">
                        <img src="xc.JPG" width="80px" height="60px">
                </div>
                <hr>
        <fieldset>
            <legend>REGISTRATION</legend>
            
        <fieldset>
           
                   <legend> Name :</legend>
                    <input type="text" name="" value="<?php echo $name;?>" placeholder=""/>
                    <span class="error">* <?php echo $nameErr;?></span>
    </fieldset>
                <fieldset>
                    <legend>Email:</legend>
                    <input type="email" name="" value="<?php echo $email;?>" placeholder=""/>
                    <span class="error">* <?php echo $emailErr;?></span>
    </fieldset>
    <fieldset>
           
           <legend> User Name :</legend>
            <input type="text" name="" value="<?php echo $username;?>" placeholder=""/>
            <span class="error">* <?php echo $usernameErr;?></span>
</fieldset>
<fieldset>
           
           <legend> Password :</legend>
            <input type="text" name="" value="<?php echo $pass;?>" placeholder=""/>
            <span class="error">* <?php echo $passErr;?></span>
</fieldset>
<fieldset>
           
           <legend> Confirm Password :</legend>
            <input type="text" name="" value="<?php echo $confirmpass;?>" placeholder=""/>
            <span class="error">* <?php echo $confirmpassErr;?></span>
</fieldset>
<fieldset>
                        
                   <legend>Gender</legend>
                   
                        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value=""/> Male
                        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value=""/> Female
                        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="other") echo "checked";?>value=""/> Other
                        <span class="error">* <?php echo $genderErr;?></span>
                   
                </fieldset>
    <fieldset>
                     <legend>Date of Birth</legend>
                     <input type="date" name="" value="<?php echo $dateofbirth;?>"/> 
                     <span class="error">* <?php echo $dateofbirthErr;?></span>
    </fieldset>
    
                        <br><hr>
                            <input type="submit" name="" value="Submit"> 
                            <input type="reset" name="" value="reset"> 
                   
                </fieldset>
                <hr>
             <div align="center">
            <h2>Copyright @ 2017</h2>
            </fieldset>
          
               
            </fieldset>
            <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
       </form>
       <?php 
          echo "<h2>Your Input:</h2>";
          echo $name;
          echo "<br>";
          echo $email;
          echo"<br>";
          echo $username;
          echo"<br>";
          echo $pass;
          echo"<br>";
          echo $confirmpass;
          echo"<br>";
          echo $dateofbirth;
          echo"<br>";
          echo $gender;
          echo"<br>";
        
          



?>

</body>
</html>