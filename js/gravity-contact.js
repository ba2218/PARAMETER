var Gravity = {
		
	init: function() {
		
		$("#air").css({
			height: $("#air").outerHeight() + "px"
		});
		
			
			var block = $(".block5");
			
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