<?php
    require_once "../Model/userModel.php";
    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=login_req');
    }

?>
<html>
    <head>
        <title>Salesman details</title>
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
                
            <center><h1>Salesman Details</h1></center>
                <form method="post" action="">
                    <table border="01" align="center" width="75%">
                        <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th> 
                            <button><a href="Ad_addseller.php">Add Seller</a></button>
                        </th>
                        </tr>
                        <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM seller";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";

                                    echo "<td><center>{$row['s_id']}</center></td>";
                                    echo "<td><center>{$row['username']}</center></td>";
                                    echo "<td><center>{$row['email']}</center></td>";
                                    echo "<td><center>{$row['mobile_no']}</center></td>";
                                
                                 
                                echo "<td><center><a href='../Controller/Ad_deleteusercheck.php?delete=".$row['username']."'>Delete</a></center></td>";

                                echo "</tr>";}
                            }
                         else {
                            echo "<td colspan=\"6\">No data found</td>";
                        }
                        ?>
                            
                    </table>
                    
                </form>
        </fieldset>
    </body>
</html>
