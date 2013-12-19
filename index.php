<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="favicon.jpg" type="image/jpg" sizes="50x50" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:image" content="http://parameter.cc/logo3.jpg" />
<meta property="og:title" content="Welcome to Parameter"/>
<meta property="og:url" content="http://parameter.cc/"/>

<title>Parameter</title>



<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/greensock/TweenMax.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/shadowbox.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>

    <script> 
		
	
 $(document).ready(function(){
                var defaultSize = [350, 269]; // expanded box size: width , height. Used for masonry
				var iframe = $(".myiFrame");
				var copy = $(".expandable p");
                $('.cunload2 a').css("top", "-269px");
                //home masonry
                $('#grid').masonry({
                    singleMode: false,
                    columnWidth: 0,
                    resizeable: true,
                    itemSelector: '.box',
                    isAnimated: true,
                    animationOptions: {
                        //duration: 200,
                        easing: 'swing',
                        queue: false }
                });
                
                //box clicking event
                $('.box').click(function(){
					
					TweenLite.from(copy, 1, {delay:1, alpha:"0"});
					TweenLite.from(iframe, 1, {delay:1, alpha:"0"});
					
                    if (!$(this).is('.expanded')){
                        var size = ($(this).attr('data-size')) ? $(this).attr('data-size').split(',') : defaultSize;
                       $(this).find('img').hide('slow');
					  $(this).find('a').css("height", "0").css("top", "-275px");	
					    $(this)
                            // save original box size
                            .data('size', [ $(this).width(), $(this).height() ])
                            .animate({
                                width: size[0],
                                height: size[1]
                            
							}, function(){
                                // show hidden content when box has expanded completely
                                $(this).find('.expandable').show('slow');
                                $(this).find('.hideable').hide('slow');
								$(this).removeClass("hover");
								$(this).find('a').css("text-indent", "9999");
                                $('#grid').masonry();
								
								$("iframe").each(function(){
        $(this).attr("src", $(this).data("src"));
    });
								
                            })
                        restoreBoxes();
					
                        $(".box").removeClass("expanded"); //remove the class to all boxes
						$(".box").addClass("hover"); TweenLite.to($(".hover a"), .75, {height:"0px", ease:Bounce.easeOut});;
                        $(this).addClass('expanded'); //and add it to the actual one
						$(this).find('a').css("text-indent", "0");
                    }
                });
                
                //close clicking event    
                $('.cunload').click(function(e){
                    e.stopPropagation();
                    restoreBoxes();
                    $(this).parents(".box").removeClass("expanded");
                });
				
                    
                //closing boxes
                function restoreBoxes(){
                    var len = $('.expanded').length - 1;
                    $('.expanded').each(function(i){
                        var box = $(this).data('size');
                        $(this).find('.expandable').hide('slow');
                        $(this).find('.hideable').show('slow');
                      window.setTimeout(function() {
     $(this).find('a').css("height", "269px").css("top", "-275px");
},1000);							
					   $(this).find('img').show('slow');
                        $(this).animate({
                                width: ( box[0] || 350 ),
                                height: ( box[1] || 269 )
                            }, function(){
                                if (i >= len) {
                                    $('#grid').masonry();
                                }
                            });            
                    })
                }
                
                
						window.setTimeout(function() {
    $('.expandable:first').click();
},2500);
				    
 
			   
			               
            });           
            
        </script> 



<link href="css/style-home.css" rel="stylesheet" type="text/css" />
<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
<link href="css/style-masonry.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.pageslide.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/shadowbox.css">


  

</head>

<body>
<div id="main">
<div id="logoBig"></div>
<div id="air">


<div id="menu">
        <ul id="buttons">
        <li id="work"><a href="index.html">Home</a></li>
        <li id="about"><a href="work2.html">Work</a></li>
        <li id="contact"><a class="firstb" href="contact-side.html">About</a></li>
        </ul>
</div>



<div class="wrap masonry" id="grid" style="position: relative; overflow: hidden; width: 1600px; ">
    
                            
                                
                                                        
                            
        <div id="expandDefault" class="box masonry-brick hover f1" data-size="728,566" style="position: absolute; top: 0px; left: 0px; width: 350px; height: 269px; ">
        <div class="cunload2">  <img src="images/work/9.jpg" alt="featured-slide" />  
            <a href="javascript:;" class="open-content">HASBRO HOLLOWEEN ROLEPLAY</a>
            <div class="box-title" style="margin-left: -100px; ">vid 1</div>
            <div class="expandable" style="display: none; ">
               
 <iframe style="float:left; border: #000 2px solid"  class="myiFrame" src="about:blank"  data-src="http://extranet.pixelbridge.com/userfiles/Hasbro/Hasbro_Holloween/R1/Hasbro_Holloween_240x400.html" width="240" height="400" ></iframe> 			
 <div class="deets">  
            <p>ClIENT: <br>HASBRO</p>
            <p>CAMPAIGN :<br> Role Play Like a Hero</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
</div>
        </div>    
    </div>
        
                                
                            
        <div class="box masonry-brick hover" data-size="728,566" style="position: absolute; top: 0px; left: 154px; width: 350px; height: 269px; ">
        
        <div class="cunload2">  <img src="images/work/2.jpg" alt="featured-slide" /> 
            <a href="javascript:;" class="open-content">AI ARCHITECTURE</a>
            <div class="box-title" style="margin-left: -100px; ">vid 2</div>
            <div class="expandable" style="display: none; ">
            <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="images/ai/1.jpg" alt="slide" />
    </li>
    <li>
      <img src="images/ai/2.jpg" alt="slide" />
    </li>
    <li>
      <img src="images/ai/3.jpg" alt="slide" />
    </li>
    <li>
      <img src="images/ai/4.jpg" alt="slide" />
    </li>
  </ul>
</div>
<div class="deets">  
            <p>ClIENT:<br> AI ARCHITECTURE</p>
            <p>CAMPAIGN :<br> WEBSITE DEVELOPMENT</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
               
            </div>
        </div>    
    </div>
        
                                
                            
        <div class="box masonry-brick hover" data-size="728,566" style="position: absolute; top: 0px; left: 154px; width: 350px; height: 269px; ">
        
        <div class="cunload2">   <img src="images/work/3.jpg" alt="featured-slide" />
            <a href="javascript:;" class="open-content"><p class="client-white">SUNTRUST</p> CARD CARDIVAL</a>
            <div class="box-title" style="margin-left: -100px; ">vid 2</div>
            <div class="expandable" style="display: none; "> 			<div class="deets">  
            <p>ClIENT: <br>HASBRO</p>
            <p>CAMPAIGN :<br> Role Play Like a Hero</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
</div>
        </div>    
    </div>
    
            <div class="box masonry-brick hover" data-size="728,566" style="position: absolute; top: 0px; left: 154px; width: 350px; height: 269px; ">
           
        <div class="cunload2">    <img src="images/work/4.jpg" alt="featured-slide" />
            <a href="javascript:;" class="open-content">HASBRO MOONLITE FAIRIES</a>
            <div class="box-title" style="margin-left: -100px; ">vid 2</div>
            <div class="expandable" style="display: none; ">
              

               <iframe style="float:left; border: #000 2px solid"  class="myiFrame" src="about:blank"  data-src="http://extranet.pixelbridge.com/userfiles/Hasbro/LPS_MoonLight_Fairies/r1/MoonLight_Fairies_300x250.html" width="300" height="250" ></iframe> 			<div class="deets">  
            <p>ClIENT: <br>HASBRO</p>
            <p>CAMPAIGN :<br> Role Play Like a Hero</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
</div>
        </div>    
    </div>
    
            <div class="box masonry-brick hover" data-size="728,566" style="position: absolute; top: 0px; left: 154px; width: 350px; height: 269px; ">
           
        <div class="cunload2">    <img src="images/work/5.jpg" alt="featured-slide" />
            <a href="javascript:;" class="open-content">HASBRO LOL ELMO</a>
            <div class="box-title" style="margin-left: -100px; ">vid 2</div>
            <div class="expandable" style="display: none; "> 			<div class="deets">  
            <p>ClIENT: <br>HASBRO</p>
            <p>CAMPAIGN :<br> Role Play Like a Hero</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
</div>
        </div>    
    </div>
    
            <div class="box masonry-brick hover" data-size="728,666" style="position: absolute; top: 0px; left: 154px; width: 350px; height: 269px; ">
            
        <div class="cunload2">   <img src="images/work/6.jpg" alt="featured-slide" />
            <a href="javascript:;" class="open-content">HASBRO GAME NIGHT</a>
            <div class="box-title" style="margin-left: -100px; ">vid 2</div>
            <div class="expandable" style="display: none; ">
               

               <iframe style="float:left; border: #000 2px solid"  class="myiFrame" src="about:blank"  data-src="http://extranet.pixelbridge.com/userfiles/Hasbro/HGN_Weather.com/r1/HGN_WeatherCom_300x600.html" width="300" height="600" ></iframe> 			<div class="deets">  
            <p>ClIENT: <br>HASBRO</p>
            <p>CAMPAIGN :<br> Role Play Like a Hero</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
</div>
        </div>    
    </div>
    
            <div class="box masonry-brick hover" data-size="728,666" style="position: absolute; top: 0px; left: 154px; width: 350px; height: 269px; ">
            
        <div class="cunload2">   <img src="images/work/7.jpg" alt="featured-slide"/>
            <a href="javascript:;" class="open-content">PRETZEL CRISP ROAD TRIP READY</a>
            <div class="box-title" style="margin-left: -100px; ">vid 2</div>
            <div class="expandable" style="display: none; ">
               

               <iframe style="float:left; border: #000 2px solid"  class="myiFrame" src="about:blank"  data-src="http://extranet.pixelbridge.com/userfiles/Pretzel_Crisps/Seasonal_2013/r1/PC_Beach_300x600.html" width="300" height="600" ></iframe> 			<div class="deets">  
            <p>ClIENT: <br>HASBRO</p>
            <p>CAMPAIGN :<br> Role Play Like a Hero</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
</div>
        </div>    
    </div>
    
            <div class="box masonry-brick hover" data-size="728,566" style="position: absolute; top: 0px; left: 154px; width: 350px; height: 269px; ">
        <div class="cunload2">   <img src="images/work/8.jpg" alt="featured-slide"/>
            <a href="javascript:;" class="open-content">LEXIS NEXIS ADVANCE</a>
            <div class="box-title" style="margin-left: -100px; ">vid 2</div>
            <div class="expandable" style="display: none; ">
               
               <iframe style="float:left; border: #000 2px solid"  class="myiFrame" src="about:blank"  data-src="http://extranet.pixelbridge.com/userfiles/LexisNexis/Lexis_Advance_Banners/Final/Lexis_Nexis_300x250_022013.html" width="300" height="250" ></iframe> 			<div class="deets">  
            <p>ClIENT: <br>HASBRO</p>
            <p>CAMPAIGN :<br> Role Play Like a Hero</p>
              <p>DESCRIPTION :<br> September, 2012 <br> Hasbro Holloween roleplay costume campaign.<br> Distributed on Walmart, Amazon, Target & Batagna websites.</p>
               </div>
</div>
        </div>    
    </div>


            
    
</div>


<script src="js/jquery.pageslide.min.js"></script>
<script>
$("a.firstb").pageslide();
</script>

<script>

$(document).ready(function () {
          
  
		
	//Declarations
	var tl1 = new TimelineLite({});
	var tl2 = new TimelineLite({});
	var menu = $("#menu"),
		featured = $(".box"),
		hotSpot = $(".active"),
		cover = $(".hover a"),
		logo =  $("#logoBig");



	//Start
	/*TweenLite.to(logo, .75, {marginTop:(($(window).height()/2) - (logo.height()/2)), ease:Bounce.easeOut});
	TweenLite.to(logo, .75, {delay:1.5, alpha:"0", onComplete:revealSite});*/
	logo.css("display", "none");
	revealSite();
	function revealSite(){
	
		
	logo.css("margin-top", "0");		
	$("#air").css("display", "block");
	$("#air").css("margin-top", "0");
	TweenLite.to(menu, 1, {delay:.25, marginTop:"0px", ease:Bounce.easeOut});
	tl2.staggerFrom(featured, .5, {delay:.5, marginTop:"-=1200", alpha:"1", ease:Linear.easeOut}, .1);
	
	
	$(".hover").hover(function(){$(this).addClass("active"); TweenLite.to($(".hover.active a"), .75, {height:"269px", ease:Bounce.easeOut});}, function(){$(this).removeClass("active");
	TweenLite.to($(".hover a"), .75, {height:"0px", ease:Bounce.easeOut});});
	
		window.setTimeout(function() {
   $(".wrap").css("width", "90%").css("height", "900px");
}, 1500);

	
	}
	
});




</script>



         
           

</div>
</div>

</body>
</html>