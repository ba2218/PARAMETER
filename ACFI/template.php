
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
        <img src="img/banner1.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="">HOME</a>&gt;<a href="">OIL-BIOHEAT</a></div>
        <div class="txt-4">Oil-Bioheat Overview</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris faucibus iaculis dolor, nec ullamcorper turpis auctor quis. Pellentesque dignissim, velit quis elementum auctor, eros enim malesuada magna, ut dictum erat tortor a ligula. Mauris in malesuada nisl. In sit amet tortor tellus. Ut nisl mi, tincidunt sit amet vulputate bibendum, dictum vel metus. Phasellus eros est, dignissim in auctor eget, sollicitudin quis tellus. Integer ut augue lectus, eu auctor mauris.</p>
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
    
    <?php include("inc/nav-footer.php"); ?>
    
    <?php include("inc/footer.php"); ?>
	
</div>





<!-- JavaScript at the bottom for fast page loading -->
<script src="js/libs/jquery-1.7.1.min.js"></script>
<script src="js/libs/jquery-ui-1.7.3.custom.min.js"></script>

<!-- start scripts --> 
<script src="js/script.js"></script>
<!-- end scripts -->




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



