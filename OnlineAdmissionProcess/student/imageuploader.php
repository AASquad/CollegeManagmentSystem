

<?php 
session_start();
$email= $_SESSION['passing'];

if(!isset($_POST['submit'])){
        $dbHost     = 'localhost';
        $dbUsername = 'id4873382_root';
        $dbPassword = 'id4873382_root';
        $dbName     = 'id4873382_elphicol';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image= "INSERT INTO studentregistration VALUES('$imagetmp') WHERE email = '$email'";

mysql_query($insert_image);
        
}       
?>