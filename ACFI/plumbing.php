
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="heating-cooling-services.php">HEATING &#43; COOLING</a>&gt PLUMBING</div>
        <div class="txt-3">From Faucet To Full Appliance Installation... <em>We Do It All</em></div>
        <p>Due to increasing requests from our customers, we are pleased to announce the formation of our new Plumbing Division. Now you can turn to us for all of your plumbing needs. Our services are ever-expanding and include:</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">Fixing and servicing.</span> From a leaky faucet or fixture to a burst pipe or busted sink our licensed plumbers are ready to come to your aid.
</li>
<!--<li><span class="txt-green txt-1">Bathroom and kitchen remodeling.</span> From professional sales to technical expertise for installation, we're the right ones for the job.</li>-->        </ul>
        <div class="txt-3">Tell Us About Your Plumbing Needs</div>
        <p>No job is too big or too small for our licensed and insured master plumbers. Devaney Energy plumbing division provides personal, courteous, prompt and professional attention. Plus, you're free to choose from our selection of service and <a href="payment-options.php"><u>payment options</u></a>. <a href="contact-us.php"><u>Contact us today</u></a>.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?></div>
    <div class="callout-bottom-right">
    	<span class="txt-2a">You could already be on<br />your way to saving energy.</span>
        <p class="txt-1a margin-top">Get the Devaney Energy<br />list of conservation tips.</p>
        <button id="btn-tips" name="btn-tips" class="margin-top">View Tips</button>
    </div>
    <div class="clear"></div>
    
           <div class="bottom-banner">
    <img src="img/tb2.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="plumbing.php"]').addClass('active');
	$('.side-nav a[href="plumbing.php"]').removeAttr("href");
});

$("#btn-tips").click(function() {
	document.location.href = "energy-faq-tips.php";
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



