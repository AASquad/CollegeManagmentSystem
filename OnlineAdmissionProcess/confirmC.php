<?php 
$msg = '';
include_once 'connection.php';

if(isset($_POST['resend'])){
    $email =($_POST['email']);
    

    $query = "select * from studentregistration where email='$email' AND isConfirmed='0'";
    $query1 = "select * from studentregistration where email='$email' AND isConfirmed='1'";

        $res= mysqli_query($con, $query);
        $res1= mysqli_query($con, $query1);

         $count= mysqli_num_rows($res);
         $count1= mysqli_num_rows($res1);
    if($count==1){
    
    $onetimepass='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890jkjaksghuagdhoiy887387GUYRCCf666rhguigtfhjvgcw124sdxnnnhn';
            $onetimepass= str_shuffle($onetimepass);
            $onetimepass= substr($onetimepass, 1,15);
            
            
           
            require 'phpmailer/PHPMailerAutoload.php';
            
            $mail= new PHPMailer();
            $mail->Host= "smtp.gmail.com";
            $mail->isSMTP();
            $mail-> SMTPAuth = true;
            $mail->Username="head.elphinstonecollege@gmail.com";
            $mail->Password="Namugk98";
            $mail->SMTPSecure="ssl";
            $mail->Port="465";
            $mail->Subject ="please Verify your email";
            $mail->isHTML(true);
            $mail->Body= " <h1>ELPHINSTONE COLLEGE MUMBAI</h1>
                Please Click On The Link below: <br><br>
                  <a href='http://elphi.22web.org/confirm.php?email=$email&token=$onetimepass'> <h3>Click Here</h3>
                      </a> 
                      <br>
                      <p> Sometimes the link will not work so just copy and paste it in browser</p>
                      <a href='http://elphi.22web.org/confirm.php?email=$email&token=$onetimepass'> http://elphi.22web.org/confirm.php?email=$email&token=$onetimepass </a>
                ";
        $mail->setFrom('head.elphinstonecollege@gmail.com');
        $mail->addAddress($email);
        if($mail->send()){
        $msg= "Verification Link has been sent on your email. Please Check spam also!!!";
        $con->query("UPDATE studentregistration SET token='$onetimepass' WHERE email='$email'"  );
           
        }else{
            echo "mail not send";
        }
        
        }else if($count1== 1){
            $msg ="your email is already verified";
            
        }
        
        
        else{
            $msg= "Please sign up again, Email is no longer Exist";
        }
        }




?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Elphinstone College</title>
  
  
  
      <link rel="stylesheet" href="cssstyle.css">

  
</head>

<body>
  <div id="container">
	<h3>Elphinstone College</h3>
	<p>resend verification Mail</p>
        <p style="color: red">
        <?php 
        if($msg != ''){
            echo $msg;
        }
        ?></p>
        <form action="confirmC.php" method="POST">
		<input type="email" name="email" placeholder="Type your Email" required>
			<br>
                        <input type="submit" class="button" value="resend" name="resend" />
	</form>
</div>
  
    <script src="jsindex.js"></script>

</body>
</html>
