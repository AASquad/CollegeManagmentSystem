<?php

if(!isset($_GET['email']) || !isset($_GET['token'])){
}else{
    $dbservername = "sql136.main-hosting.eu";
$dbusername = "u445700667_elphi";
$dbpassword = "elphi123";
$dbname="u445700667_elphi";
$con = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
} 
        $dbmsg= "Connected successfully to database";
    
    $email = $con->real_escape_string($_GET['email']);
    $onetimepass = $con->real_escape_string($_GET['token']);
    
   
            $query="select * from studentregistration where email='$email'  AND token='$onetimepass' AND isConfirmed=0";
            $query2="select * from studentregistration where email='$email'  AND token='' AND isConfirmed=1";
            $res= mysqli_query($con, $query);
            $res2= mysqli_query($con, $query2);
            $count= mysqli_num_rows($res);
            $count2= mysqli_num_rows($res2);
            if($count==1)
            {
                echo "<h1>you are verified please login now</h1>";

                echo '<script>';
                echo 'alert("you are verified please login now");';
                header("Refresh:5; url=login.php");
                 $con->query("UPDATE studentregistration SET isConfirmed='1', token='' WHERE email='$email'");
            }else if($count2 ==1){
                echo "<h1>You are already verified</h1>";
                echo '<script>';
                echo 'alert("You Are Already Verified");';
               
                echo '</script>';
                sleep(5);
                header("Refresh:5; url=login.php");
                
                
            }else{
                echo 'Please register again';
            }
    
    
}

?>
