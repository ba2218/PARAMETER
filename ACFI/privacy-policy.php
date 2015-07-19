
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



<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner1.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="">HOME</a>&gt;<a href="">PRIVACY POLICY</a></div>
        <div class="txt-3">Privacy Policy</div>
        <p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifable information may be requested.</p>
        
        <div class="txt-3">The Information We Collect:</div>
        <p>This notice applies to all information collected or submitted on James Devaney Fuel website. On some pages, you can order products, make requests, and register to receive materials. The types of personal information collected at these pages are:</p>
    
    <ul class="content-list">
    <li>Name</li>
    <li>Address</li>
    <li>Email address</li>
    <li>Phone number</li>
    <li>Credit/Debit Card Information</li>
    <li>Social Security Number</li>
    </ul>
    
         <div class="txt-3">The Way We Use Information:</div>
        <p>We use the information you provide about yourself when placing an order only to complete that order. We do not share this information with outside parties except to the extent necessary to complete that order.</p>
<br />
<p>We use return email addresses to answer the email we receive. Such addresses are not used for any other purpose and are not shared with outside parties.</p>
<br />
<p>We use non-identifying and aggregate information to better design our website and to share with advertisers. For example, we may tell an advertiser that X number of individuals visited a certain area on our website, or that Y number of men and Z number of women filled out our registration form, but we would not disclose anything that could be used to identify those individuals.</p>
<br />
<p>Finally, we never use or share the personally identifable information provided to us online in ways unrelated to the ones described above without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses.</p>

         <div class="txt-3">Our Commitment To Data Security:</div>
        <p>To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</p>
        
         <div class="txt-3">Our Commitment To Children's Privacy:</div>
        <p>Protecting the privacy of the very young is especially important. For that reason, we never collect or maintain information at our website from those we actually know are under 13, and no part of our website is structured to attract anyone under 13.</p>
<br />
<p>How To Contact Us Should you have other questions or concerns about these privacy policies, please call us at (617) 964-8383, or toll free at (866) 964-8383, or send us an email at <a href="mailto:info@jamesdevaneyfuel.com">info@jamesdevaneyfuel.com</a>.</p>

   
</div>
    
    <div class="column one-third">
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



