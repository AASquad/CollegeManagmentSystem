<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styleRegister.css" type="text/css">
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
        <title></title>
    </head>
    <body>
        <div class="elphiloader"></div>

        <header class="main_h">

    <div class="row">
        <a class="logo">Elphinstone College</a>

        <div class="mobile-toggle">
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

    if ($(window).scrollTop() > 100) {
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
        <form action="forgot.php">
        <div class="imgcontainer">
    <img src="logo.png" alt="Avatar" class="avatar">
        </div>

  <div class="container">
    <label for="email"><b>Email Id</b></label>
    <input class="myinput" type="email" placeholder="Enter Email ID" name="email" required>

    <input class="button" type="submit" value="submit" name="Submit" />
    
  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
</form>
           
    </body>
</html>
