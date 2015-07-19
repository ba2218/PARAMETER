
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="propane.php">PROPANE</a>&gt; SERVICES</div>
        <div class="txt-3">Safety And Customer Satisfaction Go Hand-In-Hand.</div>
        <p>Safety comes standard with all Devaney Energy propane services. From service calls to expert tank installations, we continually train employees on the latest processes to ensure everyone’s wellbeing. We also care deeply about customer satisfaction. Let us help you determine the best above or underground tank solution, install multiple gas appliances and equipment with minimal inconvenience, or take over as your propane provider so you can take advantage of the following options and more: </p>
        
        <ul class="content-list">
        <li><span class="txt-green txt-1">Smart delivery. </span> Automatic Delivery is the propane gas delivery option that saves you time and money, and can guarantee that you’ll never run out of propane. There’s no need to check your own tank. Simply choose Automatic Delivery for continuous and hassle-free propane gas service at the lowest possible price. </li>
        
        <li><span class="txt-green txt-1">Family Style Service. </span>You can trust Devaney Energy to provide you with friendly, family-style customer service.  Switching to Devaney is easy: give us a call and we'll make the transition easy and seamless.</li>

        <li><span class="txt-green txt-1">Convenient Payment Options. </span>Budget plans help spread your propane costs over a ten or twelve month period and automatic credit card payment instantly charges your credit card for a previously budgeted amount, or your full charge. </li>

        
        </ul>
        <div class="txt-3">Switch to Devaney Energy Propane. </div>
        <p>Propane offers the perfect energy solution for water heating, space heating, cooking, clothes drying, gas fireplaces, pool heaters, generators and more. Call us to arrange a free, no obligation Gas Service Consultation today. </p>
    </div>
    
    <div class="column one-third margin-top">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?>  
    </div>
         <div class="callout-bottom-right">
    	<span class="txt-2a">Have both heating oil and propane?</span>
        <p class="txt-1a margin-top">Switch to Devaney Energy for all of your energy needs. Enjoy the benefits of working with <strong>one company</strong> and having <strong>one bill</strong> for both of your fuels.</p>
    </div>

    
    <div class="clear"></div>
    
          <div class="bottom-banner">
    <img src="img/tb25.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="services.php"]').addClass('active');
	$('.side-nav a[href="services.php"]').removeAttr("href");
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



