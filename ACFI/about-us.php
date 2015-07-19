
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
$sidenav=6;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner1b.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; ABOUT US</div>
        <div class="txt-3">Our Vision</div>
        <p>Hard work is at the heart of Devaney Energy. Our employees are committed to exceeding the expectations of our customers.  We wish nothing more than to be your complete energy provider - offering value added services and products, <strong>no matter what fuel you use</strong>. With that in mind we strive to:</p>
        <ul class="content-list">
        <li>Be the premier provider of fuel oil, propane, natural gas, electricity, heating and cooling technology in Massachusetts.</li>
        <li>Make sure we only offer the highest quality products at the most efficient cost.</li>
        <li>Provide the most ethical and professional service possible.</li>
        </ul>
        <div class="txt-3">Our Promise</div>
        <p>We will work to constantly improve all areas of our profession by taking pride in all of our efforts, with the conviction that our job is never done until the customer is completely satisfied.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>
    </div>
        <div style="margin-bottom:100px;"class="callout-bottom-right margin-top"><img src="img/e-bill.png" alt="e-bill" /><p class="e-bill txt-2a">Go paperless and a tree will be<br />planted on your behalf by<br />the American Forests.</p><button id="btn-eb" name="btn-eb">CLICK HERE TO LEARN MORE</button></div>
    <div class="clear"></div>
    
       <div class="bottom-banner">
    <img src="img/tb31.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="about-us.php"]').addClass('active');
	$('.side-nav a[href="about-us.php"]').removeAttr("href");
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



