<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: Adminlogin.php?err=invalid_request');
    }
?>
<html>
    <head>
        <title>Product Details</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">               
            <b><a target="_self" href="SellerHome.php">Home</a> |</b>
            
            <b><a target="_self" href="AdminLogout.php">Logout</a></b>
            </div>

            <div align="left">
                <img src="a.png" width="80px" height="60px">
            </div>

            <center><h1>Product details</h1></center>

            <form method="" action="">
                <fieldset>
                    <legend><b>Fruits & Vegetables</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/Banana.webp" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/Watermelon.webp" width="250px" height="150px"></td>
                            <td><img src="Pictures/guava.webp" width="250px" height="150px"></td>
                            <td><img src="Pictures/mango.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/pineapple.jfif" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Banana</td>
                            <td align="center">Watermelon</td>
                            <td align="center">Guava</td>
                            <td align="center">Mango</td>
                            <td align="center">Pineapple</td>
                            
                        </tr>
                        <tr>
                            <td><img src="Pictures/malta.jpg" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/grape.jfif" width="250px" height="150px"></td>
                            <td><img src="Pictures/apple.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/orange.jfif" width="250px" height="150px"></td>
                            <td><img src="Pictures/pomegranate.webp" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Malta</td>
                            <td align="center">Red Grapes</td>
                            <td align="center">Apple</td>
                            <td align="center">Orange</td>
                            <td align="center">Pomegranate</td>
                            
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend><b>Beverage</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/pepsi.jfif" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/coca.jfif" width="250px" height="170px"></td>
                            <td><img src="Pictures/sprite.png" width="250px" height="170px"></td>
                            <td><img src="Pictures/fanta.jfif" width="250px" height="170px"></td>
                            <td><img src="Pictures/7up.jpg" width="250px" height="170px"></td>
                        </tr>
                        <tr>
                            <td align="center">Pepsi</td>
                            <td align="center">Coca Cola</td>
                            <td align="center">Sprite</td>
                            <td align="center">Fanta</td>
                            <td align="center">7 Up</td>
                            
                        </tr>
                        <tr>
                            <td><img src="Pictures/mirinda.png" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/pepsi-diet.jpeg" width="250px" height="170px"></td>
                            <td><img src="Pictures/coca-cola.jfif" width="250px" height="170px"></td>
                            <td><img src="Pictures/mountain.webp" width="250px" height="170px"></td>
                        </tr>
                        <tr>
                            <td align="center">Mirinda</td>
                            <td align="center">Pepsi Diet</td>
                            <td align="center">Coca Cola Can</td>
                            <td align="center">Mountain Dew</td>
                            
                        </tr>
                    </table>
                </fieldset>
                
                <fieldset>
                    <legend><b>Egg & Meat & Fish</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/egg.jpg" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/meat.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/fish.jfif" width="250px" height="150px"></td>
                            
                        </tr>
                        <tr>
                            <td align="center">Egg</td>
                            <td align="center">Meat</td>
                            <td align="center">Fish</td>
                            
                        </tr>
                    </table>
                </fieldset>

                <fieldset>
                    <legend><b>Ice Cream</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/choco.png" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/vanilla.webp" width="250px" height="150px"></td>
                            <td><img src="Pictures/mangoice.webp" width="250px" height="150px"></td>
                            
                        </tr>
                        <tr>
                            <td align="center">Chocolate</td>
                            <td align="center">Vanilla</td>
                            <td align="center">Mango</td>
                            
                        </tr>
                    </table>
                </fieldset>
                                        
                <fieldset>
                    <legend><b>Snacks</b></legend>
                    <table align="center">
                        <tr>
                            <td><img src="Pictures/Bombay.webp" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/cheese.jfif" width="250px" height="150px"></td>
                            <td><img src="Pictures/ring.jfif" width="250px" height="150px"></td>
                            <td><img src="Pictures/lays.jpg" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Potato Chips</td>
                            <td align="center">Cheese Puffs</td>
                            <td align="center">Ring Chips</td>
                            <td align="center">Lays</td>
                        </tr>
                        <tr>
                            <td><img src="Pictures/Kurkure.webp" alt="Banana" width="250px" height="150px"></td>
                            <td><img src="Pictures/alooz.jpeg" width="250px" height="150px"></td>
                            <td><img src="Pictures/pringles.jpg" width="250px" height="150px"></td>
                            <td><img src="Pictures/cheese ball.webp" width="250px" height="150px"></td>
                        </tr>
                        <tr>
                            <td align="center">Kurkure Chips</td>
                            <td align="center">Alooz</td>
                            <td align="center">Pringles</td>
                            <td align="center">cheese Ball</td>
                        </tr>
                    </table>
                </fieldset>
                    
                </form>
        </fieldset>
    </body>
</html>