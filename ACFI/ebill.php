
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; EBILL</div>
        
			<div class="txt-3">Residential Charge Account Application</div>
            <p class="txt-2">Please tell us who you are:</p>
			
			<form method="post" action="customer_survey.php" onSubmit="return submitIt(this)" name="regForm">
			<table id="survey" cellpadding="0" cellspacing="0">
				
				<tr>
					<td class="label">Name:</td>
					<td class="input"><input class="creditForm"name="Name" type="text" size="30"></td>
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
					<td class="label">E-mail address:<div class="special">(Required)</div></td>
					<td class="input"><input class="creditForm"name="email" value="" size="25" type="text"></td>
				</tr>
				<tr>
					<td class="label">Repeat E-mail address:<div class="special">(Required)</div></td>
					<td class="input"><input class="creditForm"name="email" value="" size="25" type="text"></td>
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



