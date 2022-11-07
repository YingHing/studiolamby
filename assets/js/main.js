$(document).ready(function() {
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('.page-title').addClass("sticky-top");
		}
		else{
			$('.page-title').removeClass("sticky-top");
		}
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 0.5){  
			// $('.display-1').addClass("resize-title");
			$('.big-title').addClass('small-title')
		}
		else{
			// $('.display-1').removeClass("resize-title");
			$('.big-title').removeClass('small-title')
		}
	});

	$(window).on('scroll',function(){
		//.05 is a multiplier for the font size
		//14 is the default font size
		$('.resize-title').css('font-size',(($(this).scrollTop()*-.2)+160)+'px');
	});

});