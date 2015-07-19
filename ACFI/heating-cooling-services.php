
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; HEATING &#43; COOLING</div>
        <div><img src="img/electricity.jpg"</div></div>
        <div class="txt-3">Time for A Home Tune-Up?</div>
        <p>Our home energy advisors are available for a free home energy assessment and estimate on all heating and cooling equipment. Take advantage of our expert service today, including:</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">No job is too big or too small.</span> No matter what type of project you are undertaking, we'll gladly help you achieve maximum comfort.
</li>
        <li><span class="txt-green txt-1">Professional service.</span> From tune-ups to around the clock emergency service, we have you covered.</li>
        <li><span class="txt-green txt-1">Expert installation.</span> We install high efficiency, top brand name systems.</li>
        <li><span class="txt-green txt-1">Tell us your budget.</span> Together we'll work out service, installation and upgrade solutions according to your home and financial needs, plus we provide <a href="rates.php"><u>in-house financing</u></a>.</li>
        </ul>
        <div class="txt-3">You're Getting Hotter, Or Cooler</div>
        <p>Looking for ways to conserve heat or keep cool? Check out our tips on how to conserve energy at no cost, low cost or by making a few simple investments. <a href="energy-faq-tips.php"><u>Learn more</u></a>.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<div class="callout"><span class="txt-2a">Do we serve your area?</span><input type="text" name="locator" class="locator" /><button name="btn-locate" class="btn-locate">GO</button></div>
        <div class="callout margin-top"><img src="img/e-bill.png" alt="e-bill" /><span class="e-bill txt-2a">Go paperless and a tree will be planted on your behalf by the American Forests.</span><button id="btn-eb" name="btn-eb">CLICK HERE TO LEARN MORE</button></div>
    </div>
    
    <div class="clear"></div>
    
           <div class="bottom-banner">
    <img src="img/tb29.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="heating-cooling-services.php"]').addClass('active');
	$('.side-nav a[href="heating-cooling-services.php"]').removeAttr("href");
});
</script>

<script>
$("#btn-eb").click(function() {
	document.location.href = "ebill.php";
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



