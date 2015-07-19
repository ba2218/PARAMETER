
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; DIESEL FUELS</div>
        <div><img src="img/diesel.jpg"</div></div>
        <div class="txt-3">Providing Fuel For Productivity</div>
        <p>We provide fuel to run your commercial building, hotel or hospital generator. We also provide marine fueling for yachts and fishing boats, and on-site fueling of commercial fleets. 
</p>
        <div class="txt-3">Generations of Powering Generators</div>
        <p>You can count on Devaney Energy as your sole supplier of diesel fuel for generators. We offer a high quality product, competitive pricing, dependable delivery service and fast response when you need it most.</p>
        <div class="txt-3">Experience The Devaney Difference</div>
        <p>Our large fleet of diesel delivery trucks is ready when you need it. With quick emergency response time we can minimize the impact a power outage may have on your business. We’ll also help keep your construction project moving forward with on-site diesel delivery. No matter what your commercial diesel fuel need, Devaney Energy is here to help. We invite you to check out the <a href="fuel-options.php"><U>types of diesel fuel</U></a> we provide or <a href="contact-us.php"><U>contact us today</U></a>.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>  </div>
    
    <div class="clear"></div>
    
           <div class="bottom-banner">
    <img src="img/tb26.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="diesel-fuels.php"]').addClass('active');
	$('.side-nav a[href="diesel-fuels.php"]').removeAttr("href");
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



