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
        <a class="logo">Elphinstone College</a>

        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav>
            <ul>
                <li><a class="ashish"href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a class="perLog" href="login.php">Login</a></li>
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
        
        <section class="intro">
            <div class="inner">
                <div class="content">
                <h1>ELPHINSTONE COLLEGE</h1>
                <a class="btn" href="login.php">Login Here</a>
                
                </div>
            </div>
        </section>
        <p>
            Elphinstone College is an institution of higher education affiliated to the University of Mumbai. Established in 1856, it is one of the oldest colleges of the University of Mumbai. It was exalted as a prestigious seat of learning during the British Raj and is generally observed for its vibrant alumni. It is reputed for producing luminaries like Bal Gangadhar Tilak, Bhim Rao Ambedkar, Virchand Gandhi, Badruddin Tyabji, Pherozshah Mehta, Kashinath Trimbak Telang, Jamshedji Tata and for illustrious professors that includes Dadabhai Naoroji. It is further observed for having played a key role in spread of Western education in the Bombay Presidency.

The year 2006 marked the sesquicentennial celebrations of the college (1856–2006). At present it offers undergraduate level courses in the arts, sciences and commerce and is under the governance of the Maharashtra Government.
    
        </p>
         <p>
                By the 19th century Bombay was a prosperous centre for maritime trade and commerce. In 1824 an English school was set up by the Bombay Native Education Society for Indian students (while the opinion in Britain was against educating the 'natives').

In 1827 a resolution was passed that an institution for promotion of education should be established under Bombay Native Education Society and be designated as "Elphinstone College" (distinct from High School). This is after Hon. Mountstuart Elphinstone, the departing governor of Bombay who was responsible for beginning higher education in the city. Rs.2,29,636.00 was collected by public subscription to fund teaching professorships in the English language and the Arts, Science and Literature of Europe. The professorships were in honour of Mountstaurt Elphinstone. The college was formally constituted in 1835. The classes commenced in 1836, at Town Hall, with the first two professors: Arthur Bedford Orlebar (Natural Philosophy) and John Harkness (General Literature).

In 1840, the professors' classes were amalgamated with the Society's High School to form the Elphinstone Native Education Institution. In 1845, the name was shortened to Elphinstone Institution.

Elphinstone College became a distinct institution, separated from the high school, on 1 April 1856. This year is officially considered to be the year of the establishment of Elphinstone College.

The college was affiliated to University of Bombay in 1860.
                
            </p> 
            <p>
                The University of Bombay was established in 1857. Inception classes were held at Elphinstone college and was subsequently moved to the present Fort campus.

To formalize legal education, a chair of Jurisprudence was set up, called Perry Professorship at Elphinstone Institution in 1855. The same year, R. T. Reid (LL. B. Bar-at-Law) was appointed the first Perry professor of Jurisprudence and the Government Law School as it was then called. This is taken as the inception of the Government Law College Mumbai.

It was suggested that Elphinstone College premises be used (during Morning Hours) for initial classes of Jaihind College. The proposal was accepted and admission started for the Arts faculty in June 1948, with a formal inauguration in September 1948 at the Elphinstone College Library Hall.

Sir J J School of Arts was founded in 1857 and was instituted to take up drawing classes. Initial classes were held at Elphinstone Institution.
            </p>
        
        
    </body>
</html>
