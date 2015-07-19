
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
    	<div class="breadcrumbs"><a href="index.php">HOME</a>&gt; <a href="oil-bioheat.php">OIL-BIOHEAT</a>&gt; OIL-HEAT</div>
        <div class="txt-3">Oilheat And Bioheat By Devaney</div>
        <p>Let Devaney Energy do what it does best - provide your home or business with oilheat, like we have for so many in the greater Boston area since 1934. Whether you require oil or bioheat service, we provide fully-trained technicians, around-the-clock emergency assistance and more. With Devaney Energy oil, you're in trusted hands.</p>
        
        <div class="txt-3">Get That Warm And Cozy Feeling</div>
        <p>Devaney Energy provides personal, courteous, prompt and professional attention. Plus, you're free to choose from our selection of service and payment options. To learn more about Devaney Energy oil or bioheat <u>contact us today</u>.</p>
    </div>
    
    <div class="column one-third">
    	<?php include("inc/nav-side.php"); ?>
		<?php include("inc/zip.php"); ?></div>
        <div class="callout-bottom-right-heat">
    	<span class="txt-2a">Is your heating unit is more than 15 years old?</span>
        <p class="txt-1a margin-top">Upgrade with us to get the most fuel for your dollar. Our equipment advisors perform home assessments and our energy advisors ensure accuracy, improve efficiency and add to your comfort.</p>
        <button id="btn-est" name="btn-est" class="margin-top">Get A FREE No-Obligation Estimate</button>
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
	$('.side-nav a[href="oil-heat.php"]').addClass('active');
	$('.side-nav a[href="oil-heat.php"]').removeAttr("href");
});

$("#btn-est").click(function() {
	document.location.href = "contact-us.php";
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



