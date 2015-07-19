
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
$sidenav=5;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner5.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="heating-cooling-services.php">HEATING &#43; COOLING </a>&gt COOLING</div>
        <div class="txt-3">Keeping You Comfortable All Year Long</div>
        <p>Let Devaney Energy provide expert service and installation. From central air conditioning and mini split ductless air conditioning to high efficiency units, we have the solution to meet your needs.</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">Fixing and servicing.</span> From ducts to seals, our skilled technicians are ready to install and replace equipment.</li>
        <li><span class="txt-green txt-1">Upkeep and effectiveness.</span> We'll provide annual service and inspections of your air conditioning system and make sure your system stays efficient.</li>
        <li><span class="txt-green txt-1">Meeting and exceeding standards.</span> All our work meets local safety and building codes. along with the highest standards for experience, know-how and customer service.</li>
        </ul>
        <div class="txt-3">We Care About Your Air</div>
        <p>The cleanliness and efficiency of your air conditioning system can greatly affect your home air quality. In addition, yearly maintenance of condensers and cooling units is critical to the life expectancy and efficiency of the unit - Devaney Energy is happy to perform tune up on your cooling equipment. <a href="contact-us.php"><u>Contact us today</u></a>.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>  </div>
    <div class="callout-bottom-right">
    	<span class="txt-2a">Looking For a Recommendation?</span>
        <p class="txt-1a margin-top">Find out what air conditioning brand name equipment we trust.</p>
        <button id="btn-prods" name="btn-prods" class="margin-top">View Products</button>
    </div>    
    <div class="clear"></div>
    
	       <div class="bottom-banner">
    <img src="img/tb30.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="cooling.php"]').addClass('active');
	$('.side-nav a[href="cooling.php"]').removeAttr("href");
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



