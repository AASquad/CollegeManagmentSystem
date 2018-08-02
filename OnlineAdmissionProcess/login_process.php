<?php

$loginmsg ="";
$dbmsg="";
$inputmsg="";

if(isset($_POST['submit'])){
    $dbservername = "localhost";
$dbusername = "id4873382_root";
$dbpassword = "id4873382_root";
$dbname="id4873382_elphicol";
$con = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
} 
        $dbmsg= "Connected successfully to database";
    
     $email= $con->real_escape_string($_POST['email']);
    $password= $con->real_escape_string($_POST['password']);
    if($email==""||$password==""){
        $inputmsg = "Please Check Your Inputs";
        
    } else{
    $sql = $con->query("select id, password, isConfirmed from studentregistration where email='$email'");
             
            if ($sql->num_rows>0) {
                
                $data = $sql->fetch_array();
                $session_id = session_id();
                $_SESSION['auth'] = $session_id;
                 
                
                if(password_verify($password, $data['password'])){
                    
                    
                    if($data['isConfirmed']==0){
                        echo  "please verify your email" ;
                    }else{
                        
                       
                        
                         header('location:student/elphiPanel.php');
                       
                    }
                    
                }else{
                    $loginmsg="please check inputs";
                }
            }else{
                    $loginmsg="Incorrect email or password";
                }
           
        
    }
}
?>