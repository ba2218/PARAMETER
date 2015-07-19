
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="about-us.php">ABOUT US</a>&gt; CONTACT US</div>
        <div class="txt-3">We Look Forward To Providing Energy Solutions For Another 75 Years</div>
        <p>Let us take care of your home or business. Whatever your need, we'll be sure to find a solution - that's the Devaney Energy way. Start up a conversation today. Click one of the below buttons to contact us and an appropriate representative will be in touch.</p>
        <div class="fl-lt margin-top half-width center"><button id="btn-res-int" name="btn-res-int">Residential Interests</button></div>
        <div class="fl-rt margin-top half-width center"><button id="btn-com-int" name="btn-com-int">Commercial Interests</button></div>
        <div class="clear"></div>
        
        <div class="txt-3 callout-margin-top">Interested In Working For Devaney Energy?</div>
        <p>We're always on the look-out for top-quality and enthusiastic staff members. From energy experts to professional technicians, if  you think you've got what it takes to join the Devaney Energy family contact us today.  <a href="employment.php"><u>Fill out our employment questionnaire</u></a>.</p>
       <!-- <div class="txt-3 callout-margin-top">Are You A Devaney Energy Customer?</div>
        
        <p>The Devaney Energy family is constantly looking to expand and enhance our residential and commercial services. Please take a moment to tell us how we're doing, what services or plans you want us to offer in the future and how we may improve our current offerings.</p>
        <div class="fl-lt margin-top half-width center"><button id="btn-survey" name="btn-survey">Take Our Customer Survey Today</button></div>-->
        <div class="margin-top full-width center"><button id="btn-testimonials" name="btn-testimonials">Read Customer Testimonials</button></div>
        <div class="clear"></div>
        
        
        
    </div>
    
    <div class="column one-third">
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
	$('.side-nav a[href="contact-us.php"]').addClass('active');
	$('.side-nav a[href="contact-us.php"]').removeAttr("href");
});

$("#btn-res-int").click(function() {
	document.location.href = "residential-interests.php";
});

$("#btn-com-int").click(function() {
	document.location.href = "commercial-interests.php";
});

$("#btn-survey").click(function() {
	document.location.href = "customer-survey.php";
});

$("#btn-testimonials").click(function() {
	document.location.href = "testimonials.php";
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



