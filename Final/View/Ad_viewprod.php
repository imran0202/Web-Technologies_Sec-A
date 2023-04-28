<?php

    session_start();
    include '../Model/ProductModel.php';
    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=login_req');
    }
?>

<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css" />
      

    <style>
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


    </style>
 
        <title>Product Details</title>
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

            <center><h1>Product details</h1></center>

<body>
    <table>
        <tr>
            <td style="padding: 80px">
                <form method="post" action="" >

                    <fieldset>
                        <legend>BEVERAGE</legend>
                        <table>
                           <table>
                            
						   <tr>
                           <th>
							<center>  Product  </center><br>
							</th>
						   <th>
							<center>   Name  </center><br>
							</th>
							<th>
							<center>  Details  </center><br>
							</th>
                            <th>
							<center>  Price  </center><br>
							</th>
                            <th> 
								<center> Quantity </center><br>
                            </th>
                            <th> 
								<center>Status </center><br>
                            </th>

                            <th> 
                            <button><a href="Ad_addprod.php">Add Product</a></button>
                            </tr>

                            <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM beverages";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";

                                    echo "<td><center><img src='Pictures/".$row['pic']."'width='50px' height='50px'></center></td>";
                                    echo "<td><center>{$row['name']}</center></td>";
                                    echo "<td><center>{$row['details']}</center></td>";
                                    echo "<td><center>{$row['price']}</center></td>";
                                    echo "<td><center>{$row['quantity']}</center></td>";
                                    echo "<td><center>{$row['status']}</center></td>";
                                   
                                    
                                    
                                    echo "<td><center><a href='../Controller/Ad_deleteprodcheck.php?delete=".$row['name']."'>Delete</a></center></td>";

                                    echo "</tr>";
                                }
                            } else {
                                echo "<td colspan=\"6\">No data found</td>";
                            }
                            ?>

                        </table>      
                    </fieldset>
                    <fieldset>
                        <legend>COSMETICS</legend>
                        <table>
                           <table>
                            
						   <!-- <tr>
						   <th>
							<center>  Product name  </center><br>
							</th>
							<th>
							<center>  Details  </center><br>
							</th>
                            <th>
							<center>  Price  </center><br>
							</th>
                            <th> 
								<center> Quantity </center><br>
                            </th>
                            <th> 
								<center>Status </center><br>
                            </th>

                            <th colspan = "2 " > 
                            <button><a href="Ad_addprod.php">ADD PRODUCT</a></button>
                            </tr> -->

                            <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM cosmetics";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";

                                    echo "<td><center><img src='Pictures/".$row['pic']."'width='50px' height='50px'></center></td>";
                                    echo "<td><center>{$row['name']}</center></td>";
                                    echo "<td><center>{$row['details']}</center></td>";
                                    echo "<td><center>{$row['price']}</center></td>";
                                    echo "<td><center>{$row['quantity']}</center></td>";
                                    echo "<td><center>{$row['status']}</center></td>";
                                   
                                     
                                    echo "<td><center><a href='../Controller/Ad_deleteprodcheck.php?delete=".$row['name']."'>Delete</a></center></td>";

                                    echo "</tr>";
                                }
                            } else {
                                echo "<td colspan=\"6\">No data found</td>";
                            }
                            ?>

                        </table>      
                    </fieldset>
                    <fieldset>
                        <legend>MEAT</legend>
                        <table>
                           <table>
                            
						   <!-- <tr>
						   <th>
							<center>  Product name  </center><br>
							</th>
							<th>
							<center>  Details  </center><br>
							</th>
                            <th>
							<center>  Price  </center><br>
							</th>
                            <th> 
								<center> Quantity </center><br>
                            </th>
                            <th> 
								<center>Status </center><br>
                            </th>

                            <th colspan = "2 " > 
                            <button><a href="Ad_addprod.php">ADD PRODUCT</a></button>
                            </tr> -->

                            <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM meat";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td><center><img src='Pictures/".$row['pic']."'width='50px' height='50px'></center></td>";
                                    echo "<td><center>{$row['name']}</center></td>";
                                    echo "<td><center>{$row['details']}</center></td>";
                                    echo "<td><center>{$row['price']}</center></td>";
                                    echo "<td><center>{$row['quantity']}</center></td>";
                                    echo "<td><center>{$row['status']}</center></td>";
                                   
                                     
                                    echo "<td><center><a href='../Controller/Ad_deleteprodcheck.php?delete=".$row['name']."'>Delete</a></center></td>";

                                    echo "</tr>";
                                }
                            } else {
                                echo "<td colspan=\"6\">No data found</td>";
                            }
                            ?>

                        </table>      
                    </fieldset>
    </form>
    </td>
    </tr>
    </table>

</body>

</html>

