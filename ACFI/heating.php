
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="heating-cooling-services.php">HEATING &#43; COOLING</a>&gt HEATING SERVICES</div>
        <div class="txt-3">Home Is Where Our Heat Is</div>
        <p>Devaney Energy has been the residential heating authority for over 75 years. Our home energy advisors are available for a free home energy assessment and estimate on all heating and equipment.</p>
        <div class="txt-3">We're Experts In Turning On The Heat</div>
        <ul class="content-list">
        <li><span class="txt-green txt-1">Peace of Mind.</span> Whether you use heating oil, natural gas or propane to heat your home, all residential customers are serviced by Devaney Energy trained and licensed technicians.</li>
        <li><span class="txt-green txt-1">Radiant heat.</span> An extremely comfortable option to conventional systems, radiant heating involves installation of durable yet flexible under-floor tubing. Warm water is then circulated through the tubing and heat is radiated up through the floor.</li>
        <li><span class="txt-green txt-1">Forced air and hot water heat.</span> We upgrade and service all baseboard heating, forced air and electric heat systems with the best brand name equipment for your budget.</li>
        </ul>
        <div class="txt-3">Highest Quality Heating Equipment</div>
        <p>Devaney Energy technicians are licensed and trained to install and service all brands of equipment, for all fuel types including heating oil, natural gas and propane. We are also experts at installing residential and commercial high efficiency heating equipment brands. In addition, every boiler and furnace installation includes 2 years of free service and is backed by our 2-year workmanship guarantee.</p>
<div id="products">
   <div class="img"><img src="img/waterheaterrinnai.jpg" />
   <a style="margin-top: 13px;" href="http://www.rinnai.us/">Rinnai Water Heater</a>
   </div>

   <div class="img"><img style="margin: 30px 0 14px 0;" src="img/waterheaterCrown.jpg" />
   <a href="http://www.crownboiler.com/">Crown Water Heater</a>
   </div>   
   <div class="img"><img src="img/Furnacethermo.jpg" />
   <a href="http://www.thermopride.com/">Thermo Furnace</a>
   </div>
   
   <div class="img"><img style="margin: 28px 0 0 0;" src="img/furnaceregal.JPG" />
   <a href="#">Regal Furnace</a>
   </div>
  </div>

   

   

   
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?></div>
    
    <div class="callout-bottom-right">
    	<span class="txt-2a">You could already be on your<br />way to saving energy.</span>
        <p class="txt-1a margin-top">Get the Devaney Energy list<br />of conservation tips.</p>
        <button id="btn-tips" name="btn-tips" class="margin-top">View Tips</button>
    </div>
    
    <div class="clear"></div>
    
           <div class="bottom-banner">
    <img src="img/tb14.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="heating.php"]').addClass('active');
	$('.side-nav a[href="heating.php"]').removeAttr("href");
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



