
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="oil-bioheat.php">HEATING OIL</a>&gt; BIO-HEAT</div>
        <div class="txt-3">Bioheat By Devaney</div>
        <p>We value you as a customer and a neighbor, so we are constantly striving to provide the best service options and pricing for your home or business. That's why for the last four years, Devaney Energy has been leading the charge in providing more environmentally friendly heating options, like bioheat. It's a blend of traditional oil and renewable fuel for reduced carbon emissions and a cleaner burn.</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">What's it made from?</span> Biofuel is often made from soybeans, recycled cooking oil, cotton and sunflower seeds or other domestic renewable resources.</li>
        <li><span class="txt-green txt-1">Does it require special equipment?</span> Your current oil heating system will work with Bioheat, without modifications. In fact, bioheat cleans and lubricates current equipment to help it run more efficiently.</li>
        <li><span class="txt-green txt-1">Reduce your carbon footprint.</span> Bioheat is biodegradable, nontoxic and nearly sulfur-free!</li>
        <li><span class="txt-green txt-1">Made in America!</span> Bioheat is manufactured and blended in processing facilities throughout the United States.</li>
        </ul>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?></div>
        <div class="callout-bottom-right">
    	<span class="txt-2a">Stay warm all winter.</span>
        <p class="txt-1a margin-top">Devaney Energy offers fully trained technicians, around-the-clock emergency assistance and more. For more tips on how to winterize your home <a class="link-white" href="http://www.energystar.gov/index.cfm?c=home_improvement.hm_improvement_index" target="_blank"><U>click here</U></a>.</p>
    </div>

    <!--<div class="clear"></div>-->
     <div class="bottom-banner">
    <img src="img/tb21.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="bio-heat.php"]').addClass('active');
	$('.side-nav a[href="bio-heat.php"]').removeAttr("href");
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



