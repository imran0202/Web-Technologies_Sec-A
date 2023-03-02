<?php
$message = '';  
$error = '';

if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label>Enter Name</label>";  
      }
      
      else if(empty($_POST["age"]))  
      {  
           $error = "<label>Age cannot be emoty</label>";  
      }
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label>Gender cannot be empty</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label>Enter an e-mail</label>";  
      } 
      else if(empty($_POST["degree"]))  
      {  
           $error = "<label>Gender cannot be empty</label>";  
      }
      else if(empty($_POST["birthday"]))  
      {  
           $error = "<label>Birthday cannot be empty</label>";  
      } 
      else if(empty($_POST["phone"]))  
      {  
           $error = "<label>Phone number cannot be empty</label>";  
      }  
      else if(empty($_POST["occupation"]))  
      {  
           $error = "<label>Occupation cannot be empty</label>";  
      }   
      else if(empty($_POST["marital"]))  
      {  
           $error = "<label>Marital status cannot be empty</label>";  
      } 
      else if(empty($_POST["address"]))  
      {  
           $error = "<label>Address cannot be empty</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label >Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
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
            $nameErr =  $emailErr = $dateofbirthErr =$genderErr  = $degreeErr = $bloodgroupErr =  "";
            $name = $email =  $dateofbirth = $gender = $degree = $bloodgroup = "";

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
            

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["age"])){
                    $ageErr = "Age is required";
                }else{
                    $age = ($_POST["age"]);
                    //check if name contains letter and whitespace
                    if (!preg_match("/^[0-9' ]*$/",$age))
                    $ageErr = "Only number is allowed";
                }
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = ($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }
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
              if (empty($_POST["degree"])) {
                $degreeErr = "Degree is required";
              } else {
                $degree = ($_POST["degree"]);
                // 
               
                }
                if (empty($_POST["bloodgroup"])) {
                    $bloodgroupErr = "Blood Group is required";
                  } else {
                    $bloodgroup = ($_POST["bloodgroup"]);
                    // 
                   
                    }

            
    ?>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
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
                     <legend>Date of Birth</legend>
                     <input type="date" name="" value="<?php echo $dateofbirth;?>"/> 
                     <span class="error">* <?php echo $dateofbirthErr;?></span>
    </fieldset>
    <fieldset>
                        
                   <legend>Gender</legend>
                   
                        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value=""/> Male
                        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value=""/> Female
                        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="other") echo "checked";?>value=""/> Other
                        <span class="error">* <?php echo $genderErr;?></span>
                   
                </fieldset>
                <fieldset>
                        
                   <legend>Degree</legend>
                   
                        <input type="checkbox" name="gender"<?php if (isset($degree) && $degree=="SSC") echo "checked";?> value=""/> SSC
                        <input type="checkbox" name="gender"<?php if (isset($degree) && $degree=="HSC") echo "checked";?> value=""/> HSC
                        <input type="checkbox" name="gender"<?php if (isset($degree) && $degree=="BSC") echo "checked";?> value=""/> BSc
                        <input type="checkbox" name="gender"<?php if (isset($degree) && $degree=="MSC") echo "checked";?> value=""/> MSc
                        <span class="error">* <?php echo $degreeErr;?></span>
                   
                </fieldset>
                
                <fieldset>
                     <legend>BLOOD GROUP</legend>
                            <select name="">
                                <option <?php if (isset($bloodgroup) && $bloodgroup=="A+") echo "checked";?> value="">A+</option>
                                <option <?php if (isset($bloodgroup) && $bloodgroup=="A-") echo "checked";?> value="">A-</option>
                                <option value="">B+</option>
                                <option value="">B-</option>
                                <option value="">O+</option>
                                <option value="">AB+</option>
                            </select>
                        <br><hr>
                            <input type="submit" name="" value="Submit"> 
                   
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
          echo $dateofbirth;
          echo"<br>";
          echo $gender;
          echo"<br>";
          echo $degree;
          echo"<br>";
          echo $bloodgroup;
          echo"<br>";
          



?>

</body>
</html>