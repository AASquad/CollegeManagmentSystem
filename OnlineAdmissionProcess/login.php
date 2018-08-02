<?php
session_start();

$dbservername = "sql136.main-hosting.eu";
$dbusername = "u445700667_elphi";
$dbpassword = "elphi123";
$dbname="u445700667_elphi";
$con = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
} 
        $dbmsg= "Connected successfully to database";
        
       //login account process
        if(isset($_POST['email'])){
            
            $email=$_POST['email'];
            $password= md5($_POST['password']);
            
            $_SESSION['passing']= $email;
            $_SESSION['passingpass']= $password;
            

            
            
            $query="select * from studentregistration where email='$email'  AND password='$password' AND isConfirmed='1' ";
            $confirmation ="select * from studentregistration where email='$email'  AND password='$password' AND isConfirmed=''";
            $res= mysqli_query($con, $query);
            $count= mysqli_num_rows($res);
            
            
            if($count==1)
            {   
                $session_id = session_id();
                $_SESSION['auth']=$session_id;
                header('Location:student/elphiPanel.php');
                 
            }else{
                
                $_SESSION['error']="Wrong Email ID or Password";
            }
        }

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Elphinstone College Website</title>

        <link rel="stylesheet" type="text/css" href="stylereg.css">

        <link rel="stylesheet" href="style.css" type="text/css">
        <script type="text/javascript" src="jquery-1.9.1.js"></script>
        <script src="jq/jquery.min.js"></script>
        <script src="jq/modernizr.js"></script>

<script type="text/javascript">
	$(window).load(function() {
		// Animate loader off screen
		$(".elphiloader").fadeOut("slow");
	});
        
        
        
        </script>
        
    </head>
    <body>
        <div class="elphiloader"></div>

        <header class="main_h">

    <div class="row">
        <a class="logo" style="color: white; font-size: 17px">Elphinstone College</a>

        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a class="perLog" href="register.php">Register</a></li>
            </ul>
        </nav>

    </div> <!-- / row -->
    
    
    <script>
    // Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 0) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});
    </script>

</header>
        
       
        <section>
            <div class="container">
    <h1>Log In</h1>
    <?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    ?>
   <form action="login.php" method="POST">  
<div class="group">      
    <input  type="email"  name="email" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>
      
    <div class="group">      
        <input type="password" required name="password">
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>

<div class="button">
    <input type="submit" value="submit" name="submit" />
     <p style="font-size: 12px"> <a href="forgot.php">Forgot Password??</a></p>

</div>
    <p style="font-size: 12px">For Registration <a href="register.php"> Click here</a>.</p>
</form>
</div>
        </section>        
        
    </body>
</html>
