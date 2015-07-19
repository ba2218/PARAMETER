
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
$sidenav=1;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner1b.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="oil-bioheat.php">HEATING OIL</a>&gt; COMMERCIAL SERVICES</div>
        <div class="txt-3">Committed To Commercial Success</div>
        <p>For over 75 years, Devaney Energy has provided volume fuel oil clients a full variety of energy solutions to meet their unique challenges. From colleges and churches to apartment complexes and more, Devaney offers commercial customers a high quality product, competitive pricing, dependable distribution and fast response.</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">360&deg; service options available.</span> At Devaney Energy we not only supply fuel oil, but also install and service state-of-the-art systems and equipment.</li>
        <li><span class="txt-green txt-1">Complex jobs made simple.</span> We maintain an engineering staff to handle commercial and industrial service needs.</li>
        <li><span class="txt-green txt-1">The Energy To Do More.</span> We strive to be your complete energy provider and supply value-added services and products, <strong>no matter what fuel you use</strong>.To learn more about our commercial offerings <a href="#"><u>click here</u></a>.</li>
        </ul>
        <div class="txt-3">Delivering On Convenience</div>
        <p>Our large fleet of fully stocked service vehicles is ready to meet your needs. Devaney Energy is proud to provide automatic delivery to your place of business. Because every business is different, we use a computerized delivery system that utilizes degree days and consumption patterns to automatically schedule oil deliveries. To get us working for you, <a href="contact-us.php"><U>contact us today</U></a>.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
				<?php include("inc/zip.php"); ?>  </div>
    
 <div class="bottom-banner">
    <img src="img/tb22.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="commercial-services.php"]').addClass('active');
	$('.side-nav a[href="commercial-services.php"]').removeAttr("href");
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



