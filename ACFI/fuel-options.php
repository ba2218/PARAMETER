
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
$sidenav=3;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner3.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="diesel-fuels.php">DIESEL FUELS</a>&gt; FUEL OPTIONS</div>
        <div class="txt-3">Part Of Your Crew</div>
        <p>We deliver only the highest quality fuels including: <strong>Ultra Low Sulfur Diesel Clear</strong> (15 ppm maximum), <strong>Ultra Low Sulfur Diesel Dyed</strong> (15 ppm maximum), <strong>Blended Diesel</strong> (for winter protection), and <strong>Biodiesel</strong> (available in 2%, 5%, 10% and 20% blends).</p>
        <p class="margin-top">Our service fleet will help you save time and money, ultimately adding to your company's bottom line. Talk to us about fuel needs such as:</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">Marine Fuel.</span> A high quality product is needed to ensure the proper operation of marine vessels such as tug boats, research vessels, work boats, fishing fleets marine engines.</li>
        <li><span class="txt-green txt-1">On-Road Fuel.</span> Our high quality fuels, competitive pricing and dependable delivery service will keep your trucking fleets on the move.</li>
        <li><span class="txt-green txt-1">Off-Road Fuel.</span> Let us provide premium off road diesel to fuel construction sites and generators needed to keep the project moving.</li>
        </ul>
        <div class="txt-3">Ask Us About Energy</div>
        <p>From diesel to natural gas and electricity, no matter what your commercial energy need is, Devaney Energy is here to help. <a href="contact-us.php"><u>Contact us today</u></a>.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>  </div>
    
    <div class="clear"></div>
    
           <div class="bottom-banner">
    <img src="img/tb27.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="fuel-options.php"]').addClass('active');
	$('.side-nav a[href="fuel-options.php"]').removeAttr("href");
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



