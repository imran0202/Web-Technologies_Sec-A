<?php

  session_start();
  require_once '../Model/Db_config.php';
  
  
  $name = $_POST['name'];
  $details = $_POST['details'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $status = $_POST['status'];
  $img = $_POST['img'];
  $ctg = $_POST['category']; 
  
  if($ctg=='beverage'){
  $beverage = ['', 'name'=>$name, 'details'=> $details, 'price'=>$price, 'quantity'=>$quantity, 'status'=>$status, 'img'=>$img];

  if($name == "" || $details == "" || $price == "" || $quantity == "" || $status == "" || $img == ""){
    echo "<h2>Missing field(s) detected!</h2><br>";
  } else{
    $con = getConnection();
    
    // Check connection
    if($con === false){
      die("ERROR: Could not connect." . mysqli_connect_error());
    }

    $sql = "INSERT into beverages VALUES ('', '{$img}', '{$name}', '{$details}', '{$price}', '{$quantity}', '{$status}')";

    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: ../View/Ad_viewprod.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
    
  }
  }
  elseif($ctg=='meat'){
    $meat= ['', 'name'=>$name, 'details'=> $details, 'price'=>$price, 'quantity'=>$quantity, 'status'=>$status, 'img'=>$img];
  
    if($name == "" || $details == "" || $price == "" || $quantity == "" || $status == "" || $img == ""){
      echo "<h2>Missing field(s) detected!</h2><br>";
    } else{
      $con = getConnection();
      
      // Check connection
      if($con === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
      }
  
      $sql = "INSERT into meat VALUES ('', '{$img}', '{$name}', '{$details}', '{$price}', '{$quantity}', '{$status}')";
  
      $status = mysqli_query($con, $sql);
  
      if($status) {
        echo "msg()";
        header('location: ../View/Ad_viewprod.php');
      } else {
        echo "<h2>Database error!</h2>";
      }
      
    }
    }
    elseif($ctg=='cosmetic'){
        $csmtc = ['', 'name'=>$name, 'details'=> $details, 'price'=>$price, 'quantity'=>$quantity, 'status'=>$status, 'img'=>$img];
      
        if($name == "" || $details == "" || $price == "" || $quantity == "" || $status == "" || $img == ""){
          echo "<h2>Missing field(s) detected!</h2><br>";
        } else{
          $con = getConnection();
          
          // Check connection
          if($con === false){
            die("ERROR: Could not connect." . mysqli_connect_error());
          }
      
          $sql = "INSERT into cosmetics VALUES ('', '{$img}', '{$name}', '{$details}', '{$price}', '{$quantity}', '{$status}')";
      
          $status = mysqli_query($con, $sql);
      
          if($status) {
            echo "msg()";
            header('location: ../View/Ad_viewprod.php');
          } else {
            echo "<h2>Database error!</h2>";
          }
          
        }
        }
        
?>