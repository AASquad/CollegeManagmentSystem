<?php
$inputmsg="";
$dbmsg="";
$msgg="";
$msgmobile="";
$msgemail="";
$mmsg="";
if(isset($_POST['submit'])){
    include 'connection.php';
    
    $name= $con->real_escape_string($_POST['name']);
    $middlename= $con->real_escape_string($_POST['middlename']);
    $surname= $con->real_escape_string($_POST['surname']);
    $mobile= $con->real_escape_string($_POST['mobile']);
    $email= $con->real_escape_string($_POST['email']);
    $password= $con->real_escape_string($_POST['password']);
    $confirmpassword= $con->real_escape_string($_POST['confirmpassword']);
    $gender= $con->real_escape_string($_POST['gender']);
    
    if($name==""||$surname==""||$mobile==""||$email==""||$password!=$confirmpassword){
        $inputmsg = "Please Check Your Inputs";
    }
    else{
        $sqlemail = $con->query("select * from studentregistration where email='$email'");
         $sqlmobile = $con->query("select * from studentregistration where mobile='$mobile'");    
            if ($sqlmobile->num_rows>0) {
            $msgmobile="       **Mobile number is already exists in database! please Log in".'<a href="https://elphinstonecollegemumbai.ga/confirmC.php">  Click here if you dont have recieve confirmation mail</a>';
        }elseif($sqlemail->num_rows>0){
        $msgemail="   **email already exists in database!" .'<a href="https://elphinstonecollegemumbai.ga/confirmC.php">            Click here if you dont have recieve confirmation mail</a>';
        
        
    }
        
         else {
            $onetimepass='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890jkjaksghuagdhoiy887387GUYRCCf666rhguigtfhjvgcw124sdxnnnhn';
            $onetimepass= str_shuffle($onetimepass);
            $onetimepass= substr($onetimepass, 1,15);
            
            $hashedPassword= md5($password);
           
            require 'phpmailer/PHPMailerAutoload.php';
            
            $mail= new PHPMailer();
            $mail->Host= "smtp.gmail.com";
            //$mail->isSMTP();
            $mail-> SMTPAuth = true;
            $mail->Username="head.elphinstonecollege@gmail.com";
            $mail->Password="Namugk98";
            $mail->SMTPSecure="ssl";
            $mail->Port="465";
            $mail->Subject ="please Verify your email";
            $mail->isHTML(true);
            $mail->Body= " <h1>ELPHINSTONE COLLEGE MUMBAI</h1>
                Please Click On The Link below: <br><br>
                  <a href='https://elphinstonecollegemumbai.ga/confirm.php?email=$email&token=$onetimepass'> <h3>Click Here</h3>
                      </a> 
                      <br>
                      <p> Sometimes the link will not work so just copy and paste it in browser</p>
                      <a href='https://elphinstonecollegemumbai.ga/confirm.php?email=$email&token=$onetimepass'> https://elphinstonecollegemumbai.ga/confirm.php?email=$email&token=$onetimepass </a>
                ";
        $mail->setFrom('head.elphinstonecollege@gmail.com');
        $mail->addAddress($email);
        if($mail->send()){
        $msgg="you have been registered Succefully!!! Please Verify Your Email". '<a href="https://elphinstonecollegemumbai.ga/confirmC.php">Click here if you dont recieve any mail  </a>';
        echo '<script language="javascript">';
        echo 'alert("you have been registered Succefully!!! Please Verify Your Email   , We Are Not Spamming You bt check spam also")';
        echo '</script>';
        
        
         $con->query("INSERT INTO studentregistration(name, middleName, surname, mobile, email, password,gender,isConfirmed, token) values 
                ('$name','$middlename','$surname', '$mobile','$email','$hashedPassword','$gender','0','$onetimepass')"  );
           
    
        
        
        }else{ 
        $mmsg="Unable to send email. Please try again";
        }
            
        }
        
        
    }
    
}

?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <style>
            .myDi{
                margin: 10% 20%;
                
            }
        </style>
    </head>
    <body><nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">ELPHINSTONE COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
  </div>
</nav>
        <div class="myDi">
            <form action="register.php" method="POST">
  <fieldset>
      
      
    <legend> Student Register Here</legend>
   

    <p class="text-success">
         <?php 
      if($dbmsg!= null) {
          echo $dbmsg;  
  }
  ?>
    </p>
    <p class="text-success">
    <?php 
        if ($msgg != null){
            echo $msgg;
             }
             ?><br>
    </p> 

<p class="text-danger"> <?php 
        if ($mmsg != null){
            echo $mmsg;
             }
          ?></p>
       
       

   
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter name" required>
        <br>
        <label>Middle Name</label>
        <input name="middlename" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Middle name">
        <br>
        <label>Surname</label>
        <input type="text" name="surname" class="form-control" id="exampleInputEmail1"  placeholder="Enter Surname" required>
        <br>
        <label>Mobile</label> <p class="text-danger"><?php if ($msgmobile != null){echo $msgmobile;}?></p>
        <input type="number" class="form-control" id="exampleInputEmail1" name="mobile"  placeholder="Enter Mobile" required>
        <br>
        <label >Email address</label><p class="text-danger"><?php if ($msgemail != null){echo $msgemail;}?></p>
      <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Your Email Id is your Username. We'll never share your email with anyone else. </small>
      <br>
      <label >Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
      
      <br>
      <label >Confirm Password</label>
      <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
      <br>
      <label >Gender</label>
      <select name="gender" class="form-control" id="exampleSelect1" required>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>
      <br>
      <input class="btn btn-primary" type="submit" value="submit" name="submit" />
      
      
    </div>

  </fieldset>

            </form>
            
        </div>
    </body>
</html>
