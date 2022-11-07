$(document).ready(function() {
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){
			$('.page-title').addClass("sticky-top")
		}
		else{
			$('.page-title').removeClass("sticky-top")
		}
	});

	// function scroll(){
	// 	$(window).scroll(function() {

	// 		if ($(this).scrollTop() > 0.5){  
	// 			$('.big-title').addClass('small-title')
	// 		}
	
	// 		else {
	// 			$('.big-title').removeClass('small-title')
	// 		}
	// 	});	
	// }

	// $(window).resize(function() {

	// 	if (window.matchMedia("(min-width: 992px)").matches) {
	// 		scroll();
	// 	}
	// 	else {
	// 		$('.big-title').css("font-size", "100vw");
	// 	}
	// });

	$(window).scroll(function() {

		if ($(this).scrollTop() > 0.5 && window.matchMedia("(min-width: 992px)").matches){  
			$('.size-title-big').addClass('size-title-small')
		}

		else {
			$('.size-title-big').removeClass('size-title-small')
		}
	});	

	


	$(window).resize(function() {
		if ($(window).width()<992){
			$('.responsive-bottom').removeClass('fixed-bottom')
		}
		else {
			$('.responsive-bottom').addClass('fixed-bottom')
		}
	});

});