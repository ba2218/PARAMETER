
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="oil-bioheat.php">HEATING OIL</a>&gt; RESIDENTIAL SERVICES</div>
        <div class="txt-3">Services, With A Smile</div>
        <p>Only Devaney Energy offers a "Comfort Care" Plan for home heating customers. This comprehensive plan includes 24/7 emergency service, plus a 24-point annual maintenance tune-up. In addition, we guarantee our quality service with:</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">In-house technicians.</span> We do not contract out any of our work. Our licensed technicians receive continual training on the latest in heating technology in our state of the art classroom.</li>
        <li><span class="txt-green txt-1">Service dispatch center.</span> For a more timely response dispatch professionals keep in constant contact with technicians. All service vans are connected via wireless computer network and GPS tracking technology.</li>
        <li><span class="txt-green txt-1">Smart delivery.</span> There's no need to check your own tank. We offer automatic delivery service to your home that uses degree days and consumption patterns to schedule oil deliveries when you need them.  </li>
        <li><span class="txt-green txt-1">Full force.</span> Our large fleet of fully stocked service vehicles is ready when you need us, no job is too big or too small.</li>
        </ul>
        <div class="txt-3">From Emergency To Everyday, We're Here For You</div>
        <p>In addition to flexible payment options, we strive to provide the ultimate in customer service. We invite you to <a href="contact-us.php"><U>contact us today</U>.</a></p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
				<?php include("inc/zip.php"); ?>  </div>
                
                   
 <div class="bottom-banner">
    <img src="img/tb23.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="residential-services.php"]').addClass('active');
	$('.side-nav a[href="residential-services.php"]').removeAttr("href");
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



