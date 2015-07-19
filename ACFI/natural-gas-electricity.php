
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
$sidenav=4;
?>


<div class="container">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
    
    <div id="top-content">
        <img src="img/top-trim-bg.png" alt="BG" id="trim" />
        <img src="img/banner4.png" alt="Devaney" />
    </div>
    
    <div class="column two-thirds">
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; NATURAL GAS &#43; ELECTRICITY</div>
        <div><img src="img/natural-gas.jpg"/></div>
        <div class="txt-3">You Now Have Power Over Supply</div>
        <p>Thanks to deregulation, consumers are now able to choose natural gas and electricity suppliers. Now more than ever commercial consumers are making the switch and turning to Devaney Energy for their energy supply needs. With over 75 years in the energy business let Devaney be your commercial energy partner for natural gas and electricity solutions. The process is seamless and includes:</p>
        <ul class="content-list">
        <li><span class="txt-green txt-1">An initial consultation.</span> We determine customer needs, discuss current market conditions and purchase strategy such as: length of contract, fixed price vs. floating price, risk assessment and billing method.</li>
        <li><span class="txt-green txt-1">Usage analysis.</span> We look at energy bills, usage, rate class, and price level data to advise the best energy solution.</li>
        <li><span class="txt-green txt-1">Price.</span> We'll gather and compile multiple pricing options from suppliers to review with you.</li>
        <li><span class="txt-green txt-1">Secure agreed pricing and paperwork.</span>  We work out contracts, change letters and notifications.</li>
        <li><span class="txt-green txt-1">Provide periodic updates.</span> You'll be sent news or information on the market, and future buying opportunities, plus answer questions or address concerns.</li>
        </ul>
        <div class="txt-3">What Do You Get With Devaney Energy?</div>
        <p>While we are most recognized for our yellow and green fuel trucks, we have over 9 years of experience in securing competitive and stable rates for customers on their electricity and natural gas supply. We offer the following solutions and products:</p>
    
            <div class="callout-bottom-right">
    	<span class="txt-3a">Energy Solutions.</span>
        <ul class="options-list">
        <li ><p class="options">Natural Gas Solutions</p></li>
                <li ><p class="options">Electricity Solutions</p></li>
        </ul>
    </div>

    <div class="callout-bottom-right-last">
    	<span class="txt-3a">Products.</span>
        <ul class="options-list">
        <li ><p class="options">Fixed Rate</p></li>
                <li ><p class="options">Variable Rate</p></li>    
        </ul>
        </div>

    
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?></div>
        <div class="callout-bottom-right">
    	<span class="txt-2a">Setting a price.</span>
        <p class="txt-1a margin-top">An at-a-glance guide to what you need to know about your rate options.</p>
        <button id="btn-rates" name="btn-rates" class="margin-top">Rates Explained</button>
    
    </div>
    


    <div class="clear"></div>
    
           <div class="bottom-banner">
    <img src="img/tb28.jpg" alt="Yellow Truck" />
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
	$('.side-nav a[href="natural-gas-electricity.php"]').addClass('active');
	$('.side-nav a[href="natural-gas-electricity.php"]').removeAttr("href");
});

$("#btn-rates").click(function() {
	document.location.href = "rates.php";
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



