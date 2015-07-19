
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="oil-bioheat.php">HEATING OIL</a>&gt; PAYMENT OPTIONS</div>
        <div class="txt-3">Payment Options And More.</div>
        <p>In addition to providing outstanding products, policies and services, Devaney Energy is constantly looking for ways to serve you better. That's why we offer budget plans, gift certificates, credit card payment options, and more.</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">Eliminate surprise bills.</span> Enroll in our budget plan and spread charges out evenly over a ten or twelve month period.
</li>
        <li><span class="txt-green txt-1">Give the gift of warmth.</span> Energy gift certificates are a great way to help out a friend, family member or anyone who could use a little extra assistance paying their heating bill. 
</li>
        <li><span class="txt-green txt-1">Never go without heat.</span> We offer in-house financing options and help you take advantage of <a href="http://www.masssave.com" target="_blank"><u>utility sponsored loans</u></a>.</li>
        </ul>
        <div class="txt-3">We Offer Convenient Credit Card Payments</div>
        <p><strong>Automatic credit card payment</strong> instantly charges your credit card for a previously budgeted amount or your full charge. You may apply fuel purchases, equipment installations and service calls. Just <a href="https://myaccount.jamesdevaneyfuel.com">log into your account</a> to sign up for <strong>automatic credit card payment. </strong></p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>
        
        </div>
    <div class="callout-bottom-right">
    	<span class="txt-2a">Budget Plans.</span>
        <p class="txt-1a margin-top">Spreading your estimated heating costs out over a ten or twelve month period helps eliminate any unexpected heating bills during the winter months. To learn more or enroll call us today.</p>
    </div>
    <div class="clear"></div>
    
         <div class="bottom-banner">
    <img src="img/tb4.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="payment-options.php"]').addClass('active');
	$('.side-nav a[href="payment-options.php"]').removeAttr("href");
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



