var Gravity = {
		
	init: function() {
		
		$("#air").css({
			height: $("#air").outerHeight() + "px"
		});
		
			
			var block = $(".block4");
			
			var yposBlock = $(block).position()['top'] - $("#air").position()['top'];
			var fallDist = ($("#air").outerHeight() - yposBlock) - $(block).outerHeight();
			
			//let the block fall
			$(block).stop().animate({
				marginTop: fallDist+"px"
			}, {
				duration: 800,
				easing: "easeOutBounce"
			});
	
	}
	

}
/******************************************/

var Gravity2 = {
		
	init: function() {
		
		$("#air").css({
			height: $("#air").outerHeight() + "px"
		});
				$(".row1").css({
			marginTop: -760
		});

		
			
			var block = $(".row1");
			
			var yposBlock = $(block).position()['top'] - $("#air").position()['top']+ 200;
			var fallDist = ($("#air").outerHeight() - yposBlock) - $(block).outerHeight() ;
			
			//let the block fall
			$(block).stop().delay(100).animate({
				marginTop: fallDist 
			}, {
				duration: 800,
				easing: "easeOutBounce"
			});
	
	}
}

/******************************************/

var Gravity3 = {
		
	init: function() {
		
		$("#air").css({
			height: $("#air").outerHeight() + "px"
		});
				$(".row2").css({
			marginTop: -760
		});

		
			
			var block = $(".row2");
			
			var yposBlock = $(block).position()['top'] - $("#air").position()['top']+ 200;
			var fallDist = ($("#air").outerHeight() - yposBlock) - $(block).outerHeight() ;
			
			//let the block fall
			$(block).stop().delay(200).animate({
				marginTop: fallDist 
			}, {
				duration: 800,
				easing: "easeOutBounce"
			});
	
	}
}



$(document).ready(function(){
	Gravity.init();
	Gravity2.init();
	Gravity3.init();
});