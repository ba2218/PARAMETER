
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="about-us.php">ABOUT US</a>&gt; CUSTOMER SURVEY</div>
        
			<p><strong>We want to hear your thoughts</strong> - please fill out our feedback form:</p>
			
			<form method="post" action="customer_survey.php" onSubmit="return submitIt(this)" name="regForm">
			<table id="survey" cellpadding="0" cellspacing="0">
				<tr>
					<th colspan="2">Please tell us who you are:</th>
				</tr>
				<tr>
					<td class="label">Name:</td>
					<td><input name="Name" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">Account Number:</td>
					<td><input name="AccountNumber" type="text" size="20"></td>
				</tr>
				<tr>
					<td class="label">Company Name:<div class="special">(If Applicable)</div></td>
					<td><input name="CompanyName" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">Address:</td>
					<td><input name="Address" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">City, State, ZIP:</td>
					<td><input name="City" type="text" size="20"> <input name="State" type="text" size="2"> <input name="ZIP" type="text" size="5"></td>
				</tr>
				<tr>
					<td class="label">Phone:</td>
					<td>(<input name="AreaCode" type="text" size="3">) <input name="PhoneFirst3Digits" type="text" size="3"> - <input name="PhoneLast4Digits" type="text" size="4"></td>
				</tr>
				<tr>
					<td class="label">Fax:</td>
					<td>(<input name="FaxAreaCode" type="text" size="3">) <input name="FaxFirst3Digits" type="text" size="3"> - <input name="FaxLast4Digits" type="text" size="4"></td>
				</tr>
				<tr>
					<td class="label">E-mail address:<div class="special">(Required)</div></td>
					<td><input name="email" value="" size="25"></td>
				</tr>
				<tr>
					<td colspan="2">Thank you for your business. Your comfort and satisfaction are important to us. To help maintain high standards of quality service, we would appreciate your response to these questions. Please check the comments that best describe our performance.</td>
				</tr>
				<tr>
					<th colspan="2">When you called our office:</th>
				</tr>
				<tr>
					<td class="label">
						<select name="AccessToPhone" size="1">
							<option value="">Select one</option>
							<option value="Excellent">Excellent</option>
							<option value="Very Good">Very Good</option>
							<option value="Satisfactory">Satisfactory</option>
							<option value="Needs Improvement">Needs Improvement</option>
						</select>
					</td>
					<td>Access to our phone number.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="ReceptionistsCourtesyAndProfessionalism" size="1">
							<option value="">Select one</option>
							<option value="Excellent">Excellent</option>
							<option value="Very Good">Very Good</option>
							<option value="Satisfactory">Satisfactory</option>
							<option value="Needs Improvement">Needs Improvement</option>
						</select>
					</td>
					<td>The receptionist's courtesy and professionalism.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="EaseGettingProperDepartmentOrIndividual" size="1">
							<option value="">Select one</option>
							<option value="Excellent">Excellent</option>
							<option value="Very Good">Very Good</option>
							<option value="Satisfactory">Satisfactory</option>
							<option value="Needs Improvement">Needs Improvement</option>
						</select>
					</td>
					<td>Ease in getting to the proper department or individual.</td>
				</tr>
				<tr>
					<th colspan="2">If you spoke with a Sales Engineer or Sales Representative:</th>
				</tr>
				<tr>
					<td class="label">Salesman's Name:</td>
					<td><input name="SalesmansName" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">
						<select name="SalesmansCourtesyAndProfessionalism" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The Salesman's courtesy and professionalism.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="SalesmansPromptnessForAppointment" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The Salesman's promptness for your appointment.	</td>
				</tr>
				<tr>
					<td class="label">
						<select name="SalesmanExplainedServiceOffered" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The Salesman explained the service being offered in an understandable manner and made me feel comfortable.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="SalesmansPromptnessReturningWrittenProposalToYou" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The Salesman's promptness in returning a written proposal to you for installation work.</td>
				</tr>
				<tr>
					<th colspan="2">If you received an oil delivery:</th>
				</tr>
				<tr>
					<td class="label">
						<select name="ArrivalOfOrderComparedWithAnticipatedTimeOfDelivery" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The arrival of your order compared with the anticipated time of delivery.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="DriversCourtesyAndProfessionalism" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The driver's courtesy and professionalism.</td>
				</tr>
				<tr>
					<td class="label"><select name="DriversAppearanceAndUniform" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The driver's appearance and uniform.</td>
				</tr>
				<tr>
					<th colspan="2">When you called for service work:</th>
				</tr>
				<tr>
					<td class="label">Service Representative's Name:</td>
					<td><input name="ServiceRepresentativesName" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">
						<select name="ServiceRepresentativesCourtesyAndProfessionalism" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Service Representative's courtesy and professionalism.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="EaseGettingConvenientAppointment" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Ease in getting a convenient appointment.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="ResponseTimeToCall" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Response time to my call was...</td>
				</tr>
				<tr>
					<th colspan="2">When the Service Technician arrived:</th>
				</tr>
				<tr>
					<td class="label">The service technician's Name:</td>
					<td><input name="TechniciansName" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">
						<select name="TechniciansOnTimeForAppointment" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Was the technician on time for your appointment?</td>
				</tr>
				<tr>
					<td class="label">
						<select name="TechniciansCourtesyAndProfessionalism" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The technician's courtesy and professionalism.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="TechniciansAppearanceAndUniform" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Technician's appearance and uniform.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="TechniciansQualityOfWork" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The quality of our work was...</td>
				</tr>
				<tr>
					<th colspan="2">When you installed new equipment:</th>
				</tr>
				<tr>
					<td class="label">The Installer's Name(s):</td>
					<td><input name="InstallersName" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">
						<select name="InstallersOnTimeForAppointment" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Were the installers on time for your appointment?</td>
				</tr>
				<tr>
					<td class="label">
						<select name="InstallersCourtesyAndProfessionalism" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The installer's courtesy and professionalism.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="InstallersAppearanceAndUniform" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Installer's appearance and uniform.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="InstallersQualityOfWork" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>The quality of our work was...</td>
				</tr>
				<tr>
					<th colspan="2">When you spoke to our Bookkeeping representatives:</th>
				</tr>
				<tr>
					<td class="label">Bookkeeper's Name:</td>
					<td><input name="BookkeepersName" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">
						<select name="BookkeepersCourtesyAndProfessionalism" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Bookkeeper's courtesy and professionalism.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="BookkeepersAbilityToAnswerQuestions" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Bookkeeper's ability to answer your questions fully.</td>
				</tr>
				<tr>
					<td class="label">
						<select name="QuestionResolvedToSatisfaction" size="1">
						<option value="">Select one</option>
						<option value="Excellent">Excellent</option>
						<option value="Very Good">Very Good</option>
						<option value="Satisfactory">Satisfactory</option>
						<option value="Needs Improvement">Needs Improvement</option></select>
					</td>
					<td>Your question was resolved to your satisfaction.</td>
				</tr>
				<tr>
					<td class="label" colspan="2" style="text-align: left;">
						Are there any particular products you would like us to offer?
						<textarea name="AnyParticularProductsYouLikeUsToOffer" cols="60" rows="5" wrap="hard"></textarea>
					</td>
				</tr>
				<tr>
					<td class="label" colspan="2" style="text-align: left;">
						If you could implement any one change at James Devaney Fuel, what would it be?
						<textarea name="ChangeToImplement" cols="60" rows="5" wrap="hard"></textarea>
					</td>
				</tr>
				<tr>
					<td class="label" colspan="2" style="text-align: left;">
						We welcome any additional comments:<br />
						<textarea name="AdditionalComments" cols="60" rows="5" wrap="hard"></textarea>
					</td>
				</tr>
				<tr>
					<td class="label" colspan="2" style="text-align: left;"><strong>Did you see our Yellow Pages Ad? Which edition?</strong> <input name="YellowPagesEdition" type="text" size="30"></td>
				</tr>
				<tr>
					<td colspan="2">
						Please correctly type in the following phrase to verify:<br />
						<strong>Please type s.u.n.n.y without the periods in the box below.</strong><br />
                        <input name="wordcheck" size="50" type="text">
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;"><input type="reset" value="Reset">&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="Submit To James Devaney Fuel"></td>
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
	$('.side-nav a[href="customer-survey.php"]').addClass('active');
	$('.side-nav a[href="customer-survey.php"]').removeAttr("href");
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



