
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
        <img src="img/banner1.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="about-us.php">ABOUT US</a>&gt; <a href="contact-us.php">CONTACT US</a>&gt; RESIDENTIAL</div>
        <div class="txt-3">We Look Forward To Providing Energy Solutions For Another 75 Years</div>
        <p>Let us take care of your home or business. Whatever your need, we'll be sure to find a solution - that's the Devaney Energy way. Start up a conversation today. Click one of the below buttons to contact us and an appropriate representative will be in touch.</p>
        <div class="fl-lt margin-top half-width center"><button id="btn-res-int" name="btn-res-int">Residential Interests</button></div>
        <div class="fl-rt margin-top half-width center"><button id="btn-com-int" name="btn-com-int">Commercial Interests</button></div>
        <div class="clear"></div>
        <div class="txt-3 callout-margin-top">Interested In Working For Devaney Energy?</div>
        <p>We're always on the look-out for top-quality and enthusiastic staff members. From energy experts to professional technicians, if  you think you've got what it takes to join the Devaney Energy family contact us today. Fill out our <a href="employment.php">employment questionnaire</a>.</p>
        <div class="txt-3 callout-margin-top">Are You A Devaney Energy Customer?</div>
        <p>The Devaney Energy family is constantly looking to expand and enhance our residential and commercial services. Please take a moment to tell us how we're doing, what services or plans you want us to offer in the future and how we may improve our current offerings.</p>
        <div class="fl-lt margin-top half-width center"><button id="btn-survey" name="btn-survey">Take Our Customer Survey Today</button></div>
        <div class="fl-rt margin-top half-width center"><button id="btn-testimonials" name="btn-testimonials">Read Customer Testimonials</button></div>
        <div class="clear"></div>
        
        
        <div class="txt-3 callout-margin-top">Employee Listings</div>
        
		<p class="margin-top">For more information about our full line of products and services, select a department or individual and fill out the form below. Or contact James Devaney Fuel Company at <strong>1-866-964-8383</strong></p>
        
        <p>Need directions or to send us something? Click <a href="howtofindus.php">here</a> to find us.</p>
        
        <form method="post" action="contact.php" onSubmit="return submitIt(this)" name="regForm">
            <table cellpadding="8" cellspacing="0" border="0" class="margin-top">
                <tr>
                    <td><input type="radio" name="recipient" value="Justin.Devaney@JAMESDEVANEYFUEL.com" checked="checked"></td>
                    <td colspan="2"><strong>General Inquiry</td>
                    <td>1-866-964-8383</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="bduffy@jamesdevaneyfuel.com"></td>
                    <td colspan="3"><strong>Questions about prices, or setting up a new account</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value="jbscagnoli@jamesdevaneyfuel.com"></td>
                    <td colspan="3"><strong>Scheduling a Tune Up</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="jdevaney@jamesdevaneyfuel.com"></td>
                    <td><strong>James W. Devaney</td>
                    <td>President</td>
                    <!-- <td><a href="mailto:jdevaney@jamesdevaneyfuel.com">jdevaney@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 964-8383</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" id="Bob" value="bduffy@jamesdevaneyfuel.com"></td>
                    <td><strong>Bob Duffy</td>
                    <td>Oil Sales Manager</td>
                    <!-- <td><a href="mailto:bduffy@jamesdevaneyfuel.com">bduffy@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8523
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="camodeo@jamesdevaneyfuel.com" id="Chris"></td>
                    <td><strong>Chris Amodeo</td>
                    <td>Oil Sales Representative</td>
                    <!-- <td><a href="mailto:camodeo@jamesdevaneyfuel.com">camodeo@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8525</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value="rstarr@jamesdevaneyfuel.com"></td>
                    <td><strong>Bob Starr</td>
                    <td>Oil Sales Representative</td>
                    <!-- <td><a href="mailto:rstarr@jamesdevaneyfuel.com">rstarr@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8486</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" id="John" value="jholmes@jamesdevaneyfuel.com"></td>
                    <td><strong>John Holmes</td>
                    <td>Oil Sales Representative</td>
                    <!-- <td><a href="mailto:lkepnes@jamesdevaneyfuel.com">lkepnes@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8516</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" id="Brian" value="bweydt@jamesdevaneyfuel.com"></td>
                    <td><strong>Brian Weydt</td>
                    <td>Oil Sales Representative</td>
                    <td>(617) 213-8489</td>
                </tr>					
                
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="tkilbride@jamesdevaneyfuel.com"></td>
                    <td><strong>Tom Kilbride</td>
                    <td>Commercial Oil, Gas and Electricity Sales</td>
                    <!-- <td><a href="mailto:tkilbride@jamesdevaneyfuel.com">tkilbride@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8524</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value="mwilliams@jamesdevaneyfuel.com"></td>
                    <td><strong>Mike Williams</td>
                    <td>Commercial Oil, Gas and Electricity Sales</td>
                    <!-- <td><a href="mailto:mwilliams@jamesdevaneyfuel.com">mwilliams@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8542</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="bdoherty@jamesdevaneyfuel.com"></td>
                    <td><strong>Bill Doherty</td>
                    <td>Service Manager</td>
                    <!-- <td><a href="mailto:bdoherty@jamesdevaneyfuel.com">bdoherty@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8507</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value="raprea@jamesdevaneyfuel.com"></td>
                    <td><strong>Rick Aprea</td>
                    <td>Equipment Sales Representative</td>
                    <!-- <td><a href="mailto:raprea@jamesdevaneyfuel.com">raprea@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8530</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="bwodarski@jamesdevaneyfuel.com"></td>
                    <td><strong>Bud Wodarski</td>
                    <td>Equipment Sales Representative</td>
                    <!-- <td><a href="mailto:bwodarski@jamesdevaneyfuel.com">bwodarski@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8531</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value="mobrien@jamesdevaneyfuel.com"></td>
                    <td><strong>Mike O'Brien</td>
                    <td>Equipment Sales Representative</td>
                    <!-- <td><a href="mailto:mobrien@jamesdevaneyfuel.com">mobrien@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8532</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="gmccarthy@jamesdevaneyfuel.com"></td>
                    <td><strong>Geoffrey McCarthy</td>
                    <td>Oil Department Manager</td>
                    <!-- <td><a href="mailto:gmccarthy@jamesdevaneyfuel.com">gmccarthy@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8554</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value="jmccarthy@jamesdevaneyfuel.com"></td>
                    <td><strong>John McCarthy</td>
                    <td>Controller</td>
                    <!-- <td><a href="mailto:jmccarthy@jamesdevaneyfuel.com">jmccarthy@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8520</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="bzighera@jamesdevaneyfuel.com"></td>
                    <td><strong>Barbara Zighera</td>
                    <td>Credit Manager</td>
                    <!-- <td><a href="mailto:bzighera@jamesdevaneyfuel.com">bzighera@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8503</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value=" jbscagnoli@jamesdevaneyfuel.com"></td>
                    <td><strong>Jean Scagnoli</td>
                    <td>Office Manager</td>
                    <!-- <td><a href="mailto:jbscagnoli@jamesdevaneyfuel.com">jbscagnoli@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8556</td>
                </tr>
                <tr class="alt">
                    <td><input type="radio" name="recipient" value="lkepnes@jamesdevaneyfuel.com"></td>
                    <td><strong>Lisa Kepnes</td>
                    <td>Director of Customer Relations/Human Resource Specialist</td>
                    <!-- <td><a href="mailto:lkepnes@jamesdevaneyfuel.com">lkepnes@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8548</td>
                </tr>
                <tr>
                    <td><input type="radio" name="recipient" value="jessica@jamesdevaneyfuel.com"></td>
                    <td><strong>Jessica Devaney</td>
                    <td>Director of Marketing</td>
                    <!-- <td><a href="mailto:jessica@jamesdevaneyfuel.com">jessica@jamesdevaneyfuel.com</a></td> -->
                    <td>(617) 213-8482</td>
                </tr>
            </table>
            <table id="contact" cellpadding="4" cellspacing="0">
                <tr>
                    <td class="label"><strong>Name:</strong><br /><div class="special">(Required)</div></td>
                    <td><input name="Name" type="text" size="30"></td>
                </tr>
                <tr class="alt">
                    <td class="label"><strong>Company Name:</strong><br /><div class="special">(If Applicable)</div></td>
                    <td><input name="CompanyName" type="text" size="30"></td>
                </tr>
                <tr>
                    <td class="label"><strong>Address:</strong><br /><div class="special">(Required)</div></td>
                    <td><input name="Address" type="text" size="35"></td>
                </tr>
                <tr class="alt">
                    <td class="label"><strong>City:</strong><br /><div class="special">(Required)</div></td>
                    <td><input name="City" type="text" size="30"></td>
                </tr>
                <tr>
                    <td class="label"><strong>State:</strong><br /><div class="special">(Required)</div></td>
                    <td><input name="State" type="text" size="3"></td>
                </tr>
                <tr class="alt">
                    <td class="label"><strong>ZIP:</strong><br /><div class="special">(Required)</div></td>
                    <td><input name="ZIP" type="text" size="9"></td>
                </tr>
                <tr>
                    <td class="label"><strong>Phone:</strong></td>
                    <td>(<input name="AreaCode" type="text" size="3">) <input name="PhoneFirst3Digits" type="text" size="3"> - <input name="PhoneLast4Digits" type="text" size="4"></td>
                </tr>
                <tr class="alt">
                    <td class="label"><strong>Best Time to Call:</strong></td>
                    <td><input name="BestTimetoCall" type="text" size="4"> -  AM<input type="radio" name="TimeToCall" value="AM"> PM<input 	type="radio" name="TimeToCall" value="PM"></td>
                </tr>
                <tr>
                    <td class="label"><strong>E-mail address:</strong><div class="special">(Required)</div></td>
                    <td><input name="email" value="" size="25"></td>
                </tr>
                <tr class="alt">
                    <td class="label"><strong>Comments/Questions:</strong></td>
                    <td><textarea cols="50" rows="4" name="Comments"></textarea></td>
                </tr>
                <tr>
                    <td class="label" valign="top"><strong>How Did You Hear About Us?</strong></td>
                    <td align="left" valign="top">
                        <table cellspacing="0" cellpadding="0" border="0" style="margin:0px; padding:0px;">
                        <tr>
                        <td align="left">
                        <input type="checkbox" name="xheard[]" value="Internet Search"> Internet Search<br />
                        <input type="checkbox" name="xheard[]" value="Newspaper Ad"> Newspaper Ad<br />
                        <input type="checkbox" name="xheard[]" value="Magazine Ad"> Magazine Ad<br />
                        <input type="checkbox" name="xheard[]" value="TV Ad"> TV Ad<br /></td>
                        <td width="10"><br /></td>
                        <td align="left"><input type="checkbox" name="xheard[]" value="Radio Ad"> Radio Ad<br />
                        <input type="checkbox" name="xheard[]" value="Newsletter"> Newsletter<br />
                        <input type="checkbox" name="xheard[]" value="Postcard"> Postcard<br />
                        <input type="checkbox" name="xheard[]" value="Word of Mouth"> Word of Mouth<br /></td>
                        </tr>
                        </table>
                        <b>Other: <i>(please explain)</i></b><br /><textarea name="xheardother" rows="3" cols="40"></textarea><br />
                    </td>
                </tr>
                
                <tr class="alt">
                    <td align="left" valign="top" colspan="2">Please correctly type in the following phrase to verify:<br /><strong>Please type f.u.e.l. without the periods in the box to the right.</strong> <input name="wordcheck" size="4" type="text"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><button name="reset" id="reset">Reset</button>&nbsp;&nbsp;&nbsp;<button name="submit" id="submit">Please Contact Me!</button></td>
                </tr>
            </table>
        </form>
        
        
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
    <img src="img/tb18.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="residential.php"]').addClass('active');
	$('.side-nav a[href="residential.php"]').removeAttr("href");
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


