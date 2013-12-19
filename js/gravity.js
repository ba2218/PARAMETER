var Gravity = {
		
	init: function() {
		
		$("#air").css({
			height: $("#air").outerHeight() + "px"
		});
		
			
			var block = $(".block2");
			
			var yposBlock = $(block).position()['top'] - $("#air").position()['top'];
			var fallDist = ($("#air").outerHeight() - yposBlock) - $(block).outerHeight();
			
			//let the block fall
			$(block).stop().animate({
				marginTop: fallDist+"px"
			}, {
				duration: 800,
				easing: "easeOutBounce"
			});
	
				

	},
	
	reset: function() {
		$(".handle").stop().animate({
			height: "50px"
		},{
			duration: 1000,
			easing: "easeInElastic"
		});
		
		$(".block").stop().animate({
			marginTop: "0px"
		},{
			duration: 1000,
			easing: "easeInBounce"
		});
	}

}

$(document).ready(function(){
	Gravity.init();
});
/**********************************************************/

var GravityC = {
		
	init: function() {
		
		$("#air").css({
			height: $("#air").outerHeight() + "px"
		});
		
			
			var block = $(".content");
			
			var yposBlock = $(block).position()['top'] - $("#air").position()['top'];
			var fallDist = ($("#air").outerHeight() - yposBlock) - $(block).outerHeight() -150;
			
			//let the block fall
			$(block).stop().animate({
				marginTop: fallDist+"px"
			}, {
				duration: 600,
				easing: "easeOutBounce"
			});
	
				

	},
	
	reset: function() {
		$(".handle").stop().animate({
			height: "50px"
		},{
			duration: 1000,
			easing: "easeInElastic"
		});
		
		$(".block").stop().animate({
			marginTop: "0px"
		},{
			duration: 1000,
			easing: "easeInBounce"
		});
	}

}

$(document).ready(function(){
	GravityC.init();
});

/**********************************************************/

var GravityD = {
		
	init: function() {
		
		$("#air").css({
			height: $("#air").outerHeight() + "px"
		});
		
			
			var block = $(".content2");
			
			var yposBlock = $(block).position()['top'] - $("#air").position()['top'];
			var fallDist = ($("#air").outerHeight() - yposBlock) - $(block).outerHeight() -35;
			
			//let the block fall
			$(block).stop().animate({
				marginTop: fallDist+"px"
			}, {
				duration: 700,
				easing: "easeOutBounce"
			});
	
				

	},
	
	reset: function() {
		$(".handle").stop().animate({
			height: "50px"
		},{
			duration: 1000,
			easing: "easeInElastic"
		});
		
		$(".block").stop().animate({
			marginTop: "0px"
		},{
			duration: 1000,
			easing: "easeInBounce"
		});
	}

}

$(document).ready(function(){
	GravityD.init();
});

/**********************************************************/


