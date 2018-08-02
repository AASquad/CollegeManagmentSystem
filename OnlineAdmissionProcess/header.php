 <header class="main_h">
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