
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
$sidenav=4;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner4.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="natural-gas-electricity.php">NATURAL GAS &#43; ELECTRICITY</a>&gt; NATURAL GAS</div>
        <div class="txt-3">Get a Grasp on The Natural Gas Market</div>
        <p>We will be able to assess your personal situation, discuss the options that are available to you and to help you make the right decision in purchasing your natural gas. We use various methods to find you the right energy deal for your needs.</p>
        <div align="center"><img src="img/process-model.jpg" alt="Process Model" width="260" /></div>
        <p class="margin-top">You deserve cost control, managed risk, budget certainty and competitive rates. Learn more about <a href="contact-us.php"><u>our process</u></a> or <a href="contact-us.php"><u>contact us</u></a> today.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?></div>
    <div class="callout-bottom-right">
    	<span class="txt-2a">Show us your bill.</span>
        <p class="txt-1a margin-top">Email us a copy of your utility bill and we’ll be happy to offer up some energy solutions.</p>
        <button id="btn-email" name="btn-email" class="margin-top">Email</button>
    </div>
    <div class="clear"></div>
    
           <div class="bottom-banner">
    <img src="img/tb28.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="natural-gas.php"]').addClass('active');
	$('.side-nav a[href="natural-gas.php"]').removeAttr("href");
});

$("#btn-email").click(function() {
	document.location.href = "mailto:address@test.com";
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



