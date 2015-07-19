
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; RESIDENTIAL CREDIT APPLICATION</div>
        
			<div class="txt-3">Residential Charge Account Application</div>
            <p class="txt-2">Please tell us who you are:</p>
			
			<form method="post" action="http://pbldev.pixelbridge.com/devaney/formmail.php" onSubmit="return submitIt(this)" name="resForm">
            <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
            
<input type="hidden" name="recipients" value="Justin.Devaney@devaneyenergy.com" />

 <input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />
 
 <input type="hidden" name="subject" value="Sample FormMail Testing" />
 
 <input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName" />
 
 <input type="hidden" name="mail_options" value="Exclude=email;realname" />

            
			<table id="survey" cellpadding="0" cellspacing="0">
				
				<tr>
					<td class="label">Name:</td>
					<td class="input"><input class="creditForm"name="Name" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">Title:</td>
					<td class="input">Mr.-<input class="creditForm"name="Title" type="radio" value="Mr."> Ms.-<input class="creditForm"name="Title" type="radio" value="Ms."> Mrs.-<input class="creditForm"name="Title" type="radio" value="Mrs."></td>
				</tr>
				<tr>
					<td class="label">Date of Birth:<div class="special">(DD/MM/YY)*</div></td>
					<td class="input"><input class="creditForm"name="DayofBirth" type="text" size="2"> / <input class="creditForm"name="MonthofBirth" type="text" size="2"> / <input class="creditForm"name="YearofBirth" type="text" size="2"></td>
				</tr>
				<tr>
					<td class="label">Address:</td>
					<td class="input"><input class="creditForm"name="Address" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">City, State, ZIP:</td>
					<td class="input"><input class="creditForm"name="City" type="text" size="15"> <input class="creditForm"name="State" type="text" size="2"> <input class="creditForm"name="ZIP" type="text" size="5"></td>
				</tr>
                <tr>
					<td class="label">Former Address:</td>
					<td class="input"><input class="creditForm"name="Address" type="text" size="30"></td>
				</tr>
				<tr>
					<td class="label">Home Phone:</td>
					<td class="input"><input class="creditForm"name="AreaCode" type="text" size="3"> <input class="creditForm"name="PhoneFirst3Digits" type="text" size="3"> - <input class="creditForm"name="PhoneLast4Digits" type="text" size="4"></td>
				</tr>
				<tr>
					<td class="label">Cell Phone:</td>
					<td class="input"><input class="creditForm"name="CellAreaCode" type="text" size="3"> <input class="creditForm"name="CellFirst3Digits" type="text" size="3"> - <input class="creditForm"name="CellLast4Digits" type="text" size="4"></td>
				</tr>
				<tr>
					<td class="label">E-mail address:<div class="special">(Required)</div></td>
					<td class="input"><input class="creditForm"name="email" value="" size="25" type="text"></td>
				</tr>
                
                <tr>
					<td class="label">How Long at this Address:</td>
					<td class="input"><input class="creditForm"name="howLong" value="" size="25" type="text"></td>
				</tr>
				<tr>
						<td class="label">Social Security Number<span class="special">*</span>:</td>
						<td class="input"><input class="creditForm"name="SocSecFirst3" type="text" size="3"> - <input class="creditForm"name="SocSecNext2" type="text" size="2"> - <input class="creditForm"name="SocSecLast4" type="text" size="4"></td></tr>
                    <tr>
					<td class="label">Former Oil Supplier:</td>
					<td class="input"><input class="creditForm"name="formerOil" value="" size="25" type="text"></td>
				</tr>
                
                 <tr>
					<td class="label">Employer Name:</td>
					<td class="input"><input class="creditForm"name="employer" value="" size="25" type="text"></td>
				</tr>
                 <tr>
					<td class="label">Employer Address</td>
					<td class="input"><input class="creditForm"name="employerAddress" value="" size="25" type="text"></td>
				</tr>
                
                <tr>
						<td class="label">Employer Phone<span class="special">*</span>:</td>
						<td class="input"><input class="creditForm"name="EmployerAreaCode" type="text" size="3"> <input class="creditForm"name="EmployerFirst3Digits" type="text" size="3"> - <input class="creditForm"name="EmployerLast4Digits" type="text" size="4"></td></tr>
					<tr>
						<td class="label">Position:</td>
						<td class="input"><input class="creditForm"name="Position" type="text" size="35"></td></tr>
					<tr>
						<td class="label">Weekly Income:</td>
						<td class="input"><input class="creditForm"name="WeeklyIncome" type="text" size="20"></td>
					</tr>
					<tr>
						<td class="label">Monthly Income:</td>
						<td class="input"><input class="creditForm"name="MonthlyIncome" type="text" size="20"></td></tr>
					<tr>
						<td class="label">Annual Income:</td>
						<td class="input"><input class="creditForm"name="AnnualIncome" type="text" size="20"></td></tr>
					<tr>
						<td class="label">If Own, Mortgage Held By<span class="special">*</span>:</td>
						<td class="input"><input class="creditForm"name="MortgageHolder" type="text" size="35"></td></tr>
					<tr>
						<td class="label">If Rent, Landlord Name &amp; Address<span class="special">*</span>:</td>
						<td class="input"><input class="creditForm"name="LandlordNameAddress" type="text" size="35"></td></tr>
					<tr>
						<td class="label">Co-Applicant's Name:</td>
						<td class="input"><input class="creditForm"name="CoApplicantsName" type="text" size="35"></td>
					</tr>
					<tr>
						<td class="label">Employment:</td>
						<td class="input"><input class="creditForm"name="Employment" type="text" size="35"></td></tr>
					<tr>
						<td class="label">Co-Applicant Phone:</td>
						<td class="input"><input class="creditForm"name="CoApplicantAreaCode" type="text" size="3"> <input class="creditForm"name="CoApplicantPhoneFirst3Digits" type="text" size="3"> - <input class="creditForm"name="CoApplicantPhoneLast4Digits" type="text" size="4"></td></tr>
					<tr>
						<td class="label">Co-Applicant Social Security Number:</td>
						<td class="input"><input class="creditForm"name="CoApplicantSocSecFirst3" type="text" size="3"> - <input class="creditForm"name="CoApplicantSocSecNext2" type="text" size="2"> - <input class="creditForm"name="CoApplicantSocSecLast4" type="text" size="4"></td></tr>
					<tr>
						<td class="label">Sales Representative:</td>
						<td class="input"><input class="creditForm"name="SalesRepresentative" type="text" size="20"></td></tr>
					<tr>
						<td class="label">Delivery Type<span class="special">*</span>:</td>
						<td class="input"><input class="creditForm"name="Delivery_Type" type="radio" value="Automatic">&nbsp;Automatic<br><input class="creditForm"name="Delivery_Type" type="radio" value="Will_Call">&nbsp;Will Call</td></tr>
					<tr>
						<td class="label">How much oil do you currently have in your tank?</td>
						<td class="input">
							<input class="creditForm"name="How_Much_Oil_In_Tank" type="radio" value="Empty">&nbsp;Empty<br>
							<input class="creditForm"name="How_Much_Oil_In_Tank" type="radio" value="One Quarter Full">&nbsp;One Quarter Full<br>
							<input class="creditForm"name="How_Much_Oil_In_Tank" type="radio" value="One Half Full">&nbsp;One Half Full<br>
							<input class="creditForm"name="How_Much_Oil_In_Tank" type="radio" value="Three Quarters Full">&nbsp;Three Quarters Full<br>
							<input class="creditForm"name="How_Much_Oil_In_Tank" type="radio" value="Full Tank">&nbsp;Full Tank<br>
						</td>
					</tr>
					<tr>
						<td class="label">Would you like to receive email billing?<span class="special">*</span></td>
						<td class="input">

							<select name="EmailBilling">
								<option value=""></option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="label">How did you hear of us?<span class="special">*</span></td>
						<td class="input"><input class="creditForm"name="How_did_you_hear_of_us" type="text" size="30"></td>
					</tr>
					 <tr>
					    <td colspan="2" align="center"><center><b>Terms &amp; Conditions<b><br>
					    <iframe src="terms.php" width="490" height="200"></iframe></b></b></center></td>
				    </tr>   
			    	<tr>
					    <td colspan="2" align="center"><center><input class="creditForm"type="checkbox" name="xagreement">I agree to the terms and conditions.</center>					
				  	    <hr noshade="" size="1">
					    </td>
				    </tr>
                
				<tr>
					<td class="label" colspan="2">
						Please correctly type in the following phrase to verify:<br />
						Please type s.u.n.n.y without the periods in the box below.<br />
                        <input class="creditForm"name="wordcheck" size="50" type="text">
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;"><input type="reset" value="Reset">&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="Submit To Devaney Energy"></td>
				</tr>
			</table>
			</form>
        
        
    </div>
    
    <div class="column one-third">
    	
		
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



