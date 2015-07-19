
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
$sidenav=2;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner2.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; PROPANE</div>
        <div><img src="img/propane.jpg"</div></div>
        <div class="txt-3">Exceptional Energy</div>
        <p>Today, clean burning propane is providing efficient and safe energy to homes and businesses throughout New England. Due to increasing requests from our customers, we are pleased to announce new propane delivery, installation and servicing options. Call on Devaney Energy today for all of your propane related needs.  </p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">Indoor propane solutions. </span> One of the most versatile fuels available, propane is the perfect energy solution for heating, water heating, clothes drying and more. Propane is also the preferred choice for cooking and provides added warmth and ambiance when used as a fireplace. </li>
        
        <li><span class="txt-green txt-1">Outdoor propane solutions.</span>Use Devaney Energy propane to heat your pool, hot tub or outdoor room. It can be used to fuel patio heaters, mosquito eliminators and fireplace pits or hearths. Attached to a generator, propane can power your home during an outage, when other energy sources aren’t available.</li>
        
        </ul>
        <div class="txt-3">Get Your Fill Of Satisfaction</div>
        <p>Devaney Energy provides personal, courteous, prompt and professional attention. Plus, you’re free to choose from our selection of <a href="payment-options.php"><u>service and payment options</u></a>. To learn more about Devaney Energy propane <a href="contact-us-php"><U>contact us today</U></a>.</p>
    </div>
    
    <div class="column one-third margin-top">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>  
    </div>
<!--         <div class="callout-bottom-right">
    	<span class="txt-2a">Have both heating oil and propane?</span>
        <p class="txt-1a margin-top">Switch to Devaney Energy for all of your energy needs. Enjoy the benefits of working with one company, having one bill and best of all, duel fuel discounts.</p>
    </div>
-->
    
    <div class="clear"></div>
    
         <div class="bottom-banner">
    <img src="img/tb24.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="propane.php"]').addClass('active');
	$('.side-nav a[href="propane.php"]').removeAttr("href");
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



