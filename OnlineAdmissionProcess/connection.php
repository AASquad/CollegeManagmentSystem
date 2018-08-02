<?php
$dbservername = "sql136.main-hosting.eu";
$dbusername = "u445700667_elphi";
$dbpassword = "elphi123";
$dbname="u445700667_elphi";
$con = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
} 
        $dbmsg= "Connected successfully to database";
        ?>
