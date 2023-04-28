
<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }
?>
<html>
    <head>
        <title>Seller Homepage</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">
                
                
                <b><a target="_self" href="SellerProfile.php">Profile</a> | </b>
                
                <b><a target="_self" href="AdminLogout.php">Logout</a></b>

            </div>

            <div align="left">
                <img src="AsianMART.png" width="100px" height="90px">
            </div>

            <center><h1>Home page</h1></center>

            <center><p>Welcome <?php echo $_SESSION['seller']['username']?></p></center>
               
                <form>
                    
                    <table border="0" align="center" width="75%">
                        <tr>
                            <td align="center"><img src="prdctlogo.png" width="200px" height="200px"></td>
                            <td align="center"><img src="saleslogo.png" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td align="center"><a href="SellerProd.php">Product Details</a></td>
                            <td align="center"><a href="SellerSales.php">Sales Details</a> </td>
                        </tr>
                    </table>                                            
                    </form>
        </fieldset>
    </body>
</html>