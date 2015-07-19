
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php include("inc/head.php"); ?>
    <title>Devaney Energy</title>
    <meta name="description" content="">
</head>
<body>


<?php
$sidenav=6;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner1b.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="about-us.php">ABOUT US</a>&gt; <a href="contact-us.php">CONTACT US</a>&gt; COMMERCIAL</div>
       
        <div style=" float:left; margin:0; width:150px;">
<!--<p class="margin-tenpix-left">Click to learn more about our residential product offerings:</p>-->
        <a class="sections"  href="oil-bioheat.php" alt="Oil-Bioheat"><img src="img/oil-bio.png" alt="Oil-Bioheat" width="150" /></a>
        <a class="sections"  href="propane.php" alt="Propane"><img src="img/propane.png" alt="Propane" width="150" /></a>
        <a class="sections"  href="diesel-fuels.php" alt="Diesel"><img src="img/diesel.png" alt="Propane" width="150" /></a>
        <a class="sections"  href="electricity.php" alt="Electricity"><img src="img/electricity.png" alt="Electricity" width="150" /></a>
    </div>
       
        <div class="txt-3">Let Devaney Energy Deliver</div>
        <p>Commercial customers can enjoy several Devaney Energy services:</p>
        <ul class="content-list">
        <li>Automatic delivery of heating oil and propane</li>
        <li>Emergency diesel deliveries</li>
        <li>Fleet fueling</li>
        <li>Competitive supply of electricity and natural gas</li>
        <li>Installation of heating oil, natural gas and propane equipment</li>
        <li>Service of heating oil, natural gas and propane equipment</li>
        <li>Professional air conditioning service and installation </li>
        </ul>
    </div>
    
   
    
    <div class="clear"></div>
    
   
    
                       <div class="bottom-banner">
    <img src="img/tb31.jpg" alt="Yellow Truck" />
    </div>
    
    <?php include("inc/nav-footer.php"); ?>
    
    <?php include("inc/footer.php"); ?>
	
</div>





<!-- JavaScript at the bottom for fast page loading -->
<script src="js/libs/jquery-1.7.1.min.js"></script>
<script src="js/libs/jquery-ui-1.7.3.custom.min.js"></script>

<!-- start scripts --> 
<script src="js/script.js"></script>
<!-- end scripts -->

<script type="text/javascript" language="javascript">
$(document).ready(function() {
	$('.side-nav a[href="commercial-interests.php"]').addClass('active');
	$('.side-nav a[href="commercial-interests.php"]').removeAttr("href");
});
</script>


<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
mathiasbynens.be/notes/async-analytics-snippet
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script> -->


</body>
</html>



