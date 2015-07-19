
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="natural-gas-electricity.php">NATURAL GAS &#43; ELECTRICITY</a>&gt; RATES EXPLAINED</div>
        <div class="txt-3">De-coding Deregulation</div>
        <p>With you in mind, we have earned our licenses to provide electricity and natural gas brokerage services. To cut through some of the confusion the following is an outline of the various supply options Devaney Energy can provide.</p>
        <div class="txt-3">Fixed Rate</div>
        <p>Our fixed rate program is for anyone looking for price certainty in a volatile market. Devaney Energy will secure a fixed rate for a short term or multi-year term, depending on your needs. Fixed rates provide certainty and stability allowing those managing energy expenses to appropriately budget their costs.</p>
        <div class="txt-3">Variable Rate</div>
        <p>Our variable rate program allows customers to float the market without any long-term commitment. Your price will change month-to-month depending on market fluctuations. During any point customers have the flexibility to lock in their price, taking advantage of market drops and securing a lower rate for a fixed period of time.</p>
        <br />
        <div class="txt-3">Please Note You Will Still Be A Customer Of The Utility</div>
        <p>Your current utility is still responsible for maintaining the wires, pipes and meters that deliver your natural gas and electricity. However, the supply portion of your bill will come through the competitive supplier we have chosen that best fits your needs. Learn more about our process or <a href="contact-us.php">contact us</a> today.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>  </div>
        <div class="callout-bottom-right">
    	<p class="txt-1a">Look to Devaney Energy for any of your commercial heating equipment service and installation needs.</p>
        <p class="txt-1a margin-top"><a class="link-white" href="contact-us.php">Contact us</a> today.</p>
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
	$('.side-nav a[href="rates.php"]').addClass('active');
	$('.side-nav a[href="rates.php"]').removeAttr("href");
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



