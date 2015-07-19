
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php include("inc/head.php"); ?>
    <title>African Christians Fellowship International</title>
    <meta name="description" content="">
</head>
<body>




<div class="container container-top">
	
	<?php include("inc/header.php"); ?>
    
    <?php include("inc/nav-main.php"); ?>
</div>
<div class="container">  
    <div id="top-content">
        <?php include("inc/carousel.php"); ?>
    </div>
    </div>
<div class="container">    
    <div class="column-right three-thirds">
    	<p class="txt-2">Spreading God's Ministry Since 1986.</p>
        <p class="txt-0">African Christians Fellowship International (ACFI) is an Independent Indigenous Bible Believing Evangelical Church Organization. The Fellowship comprises of more than 280 indigenous churches several countries in the sub-region of West Africa including Liberia, Sierra Leone, Guinea, Cote D’ Iviore and Ghana. Founded in 1986, Rev. T. Edward Kofi ACFI has been God's instrument for reaching multitudes of lost souls with the gospel message.</p>
		</div>
    

    
            <div class="column-right two-thirds">
        <p class="txt-2">The Primary Goals</p>
         <p class="txt-0">The primary goals of ACFI are to bring Christ and the message of Salvation to the Nations and humanity (Matt. 28:19-20). We seek to express the love of God through service to mankind (Luke 6L35 / Hebrews 13:16), to bring the lost from darkness to light through the Saving Knowledge of our Lord and Savior, Jesus Christ.</p>
    </div>

    <div class="clear"></div>
    
 
    <?php include("inc/nav-footer.php"); ?>
    
    <?php /*?><?php include("inc/footer.php"); ?><?php */?>
    
	
</div>


<!-- JavaScript at the bottom for fast page loading -->
<script src="js/libs/jquery-1.7.1.min.js"></script>
<script src="js/libs/jquery-ui-1.7.3.custom.min.js"></script>
<script src="js/libs/jquery.nivo.slider.pack.js"></script>

<!-- start scripts --> 
<script src="js/script.js"></script>
<!-- end scripts -->


<script>
$(document).ready(function() {
	
	$('#slider').nivoSlider({
		directionNavHide: false,
		captionOpacity: 1,
		prevText: '<',
		nextText: '>'
	});
	
});

$("#btn-res").click(function() {
	document.location.href = "residential-interests.php";
});

$("#btn-com").click(function() {
	document.location.href = "commercial-interests.php";
});

$("#btn-eb").click(function() {
	document.location.href = "residential-electricity.php";
});

$(".btn-search").click(function() {
	document.location.href = "search.php";
});

</script>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/jquery.storelocator.js"></script>
      <script>
        $(function() {
          $('#map-container').storeLocator();
        });
      </script>
      
<script>
var selectmenu=document.getElementById("customer")
selectmenu.onchange=function(){ //run some code when "onchange" event fires
 var chosenoption=this.options[this.selectedIndex] //this refers to "selectmenu"
 if (chosenoption.value!="nothing"){
  document.open(chosenoption.value, "", "") //open target site (based on option's value attr) in new window
 }
}
</script>

<!--<script>
$("#main-nav").hover(function(){
	$(".active").css({"display":"block","margin-left":"-20px"});
}, function(){
	$(".active").css("display", "none");	
});

$("#main-nav").hover(function(){
	$(".active2").css("display", "block");
}, function(){
	$(".active2").css("display", "none");	
});

	
</script>-->



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



