
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="natural-gas-electricity.php">NATURAL GAS &#43; ELECTRICITY</a>&gt; ELECTRICITY</div>
        <div class="txt-3">You Now Have The Power, Over Power</div>
        <p>Deregulation has opened the markets to competitive electricity supply. This means the customer has the competitive edge when it comes to choosing an electricity provider. With large utility companies you are subject to volatile market swings. However, with Devaney Energy you have a company who truly cares enough to help you manage costs, budget expenses and provide price stability for both the short and long-term. </p>
        
        
        <div class="txt-3">Power - Made Personal</div>
        <p>We will be able to assess your personal situation, discuss the options that are available to you and to help you make the right decision in purchasing your electricity. We use various methods to find you the right energy deal for your needs. Learn more about <a href="contact-us.php"><u>our process</u></a> or <a href="contact-us.php"><u>contact us</u></a> today.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?></div>
        <div style="margin-bottom:100px;" class="callout-bottom-right">
    	<span class="txt-2a">Show us your bill.</span>
        <p class="txt-1a margin-top">Email us a copy of your utility bill and we’ll be happy to offer up some energy solutions.</p>
        <button id="btn-upload" name="btn-upload" class="margin-top">Email</button>
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
	$('.side-nav a[href="electricity.php"]').addClass('active');
	$('.side-nav a[href="electricity.php"]').removeAttr("href");
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



