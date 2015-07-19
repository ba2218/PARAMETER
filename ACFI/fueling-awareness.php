
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
        <img src="img/banner7.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="about-us.php">ABOUT US</a>&gt; FUELING AWARENESS</div>
    	<div class="txt-3">Fueling Awareness</div>
        <p>In 2008 Devaney Energy introduced the “Pink Truck”, and since then we have been supporting the cure for breast cancer. The program is named “Fueling Awareness” where a portion of the proceeds from each gallon of fuel oil delivered by the Pink Truck will be donated to the Faulker Hospital-Sagoff Centre, a locally based leading center for breast cancer research and treatment in New England. The money is used exclusively for breast cancer research, education, screening and treatment.
</p>
        <p class="margin-top">Devaney Energy believes in the importance of spreading breast care awareness in local communities and raising money for the fight to cure breast cancer. We are honored to be involved in the battle against breast cancer.
</p>
        <p class="margin-top">For more information about the Faulker Hospital-Sagoff Centre please visit <a href="http://www.faulknerhospital.org/sagoff_centre" target="_blank">www.faulknerhospital.org/sagoff_centre</a></p>
    </div>
    
    <div style="margin-bottom:100px;" class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<div class="callout-home">
              <span class="txt-2a">Do we serve your area?</span><form action="zip_lookup.php" method="post" target="ziplookup">
							<input id="area" type="text" maxlength="5" name="zip" />
							<input id="area-btn" type="submit" value="GO" />
						</form>
        <div id="zipLookupResultsNo">
							<a href="javascript:void();" class="close" onClick="this.parentNode.style.display='none'">X</a>
							<h1>We're Sorry!</h1>
							<strong>We do not service <span id="zipno"></span>&nbsp; at this time.</strong><br>
							<em><a href="contact.php">Click here</a> to let us know that you'd like us to service your area.</em><br>
							[ <a href="javascript:void();" onClick="this.parentNode.style.display='none'">Close</a> ]
						</div>
						<div id="zipLookupResultsYes">
							<div id="rep">
								<a href="javascript:void();" class="close" onClick="this.parentNode.parentNode.style.display='none'">X</a>
								<h1>Yes!</h1>
								<img src="" alt="" class="right" id="repImg"><strong>We serve <span id="zipyes"></span>!</strong>
								Hi my name is <span id="repName"></span>, and we serve your area. Please feel free to call me at <span id="repCell"></span>, or <a id="repLink">email me</a> for more information.<br>
							</div>
							<em>Please use the navigation on top to explore our web site.</em><br>
							[ <a href="javascript:void();" onClick="this.parentNode.style.display='none'">Close</a> ]
						</div>
        </div>
    </div>
    
    <div class="clear"></div>
    
    <div class="bottom-banner">
    <img src="img/tb32.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="fueling-awareness.php"]').addClass('active');
	$('.side-nav a[href="fueling-awareness.php"]').removeAttr("href");
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



