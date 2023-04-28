<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }
?>
<html>
    <head>
        <title>Sales details</title>
    </head>
    <body>
        <fieldset>
           
           
        <div align="right">               
            <b><a target="_self" href="AdminHome.php">Home</a> |</b>

            <b><a target="_self" href="AdminLogout.php">Logout</a></b>
        </div>
                
            <center><h1>Sales details</h1></center>
            
            <form method="post" action="controller/AdminSalescheck.php">    
                <table border="1" align="center" width="50%">
                    <tr>
                        <th>Sl</th>
                        <th>Date</th>
                        <th>Total sales</th>
                        <th>Reveneu</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>01/10/2022</td>
                        <td>40500</td>
                        <td>4500</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>02/10/2022</td>
                        <td>40500</td>
                        <td>4500</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>03/10/2022</td>
                        <td>40500</td>
                        <td>4500</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>04/10/2022</td>
                        <td>56000</td>
                        <td>5600</td>
                    </tr>
                    
                    
                </table>
                <center>
                    <br><br><br><b>Edit sales details</b>
                    <a target="_self" href="editAdminSales.php">Edit</a>
                <center>
            </form>    
        </fieldset>
    </body>
</html>