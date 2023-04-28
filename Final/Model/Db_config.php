<?php

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "shop_management";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbpass;
        global $dbname;
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return  $con;
    }
   
?>